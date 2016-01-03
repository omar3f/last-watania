<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LinksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        //Getting all parent links
        $links = (new \App\Link)->orderBy('sort')->get();
        //Returning the view and passing all links to it
        return view('panel.links.all', compact('links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Getting all parent links
        $links = (new \App\Link)->where('parent_id', '=', '0')->get();

        //Generating the dropdown list for parent pages as follows ['0' => 'No Parent', '1' => 'First Parent']
        $dropdown_links = dropdown_generator($links, ['id' => 'title'], ['0' => 'No Parent']);

        //returning the create view with the dropdown list variable
        return view('panel.links.create', compact('dropdown_links'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Requests\CreateEditLinksRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Requests\CreateEditLinksRequest $request)
    {
        //Storing the validated link
        (new \App\Link)->create($request->all());

        //Redirecting back to the index so the admin can view the canges
        return redirect()->action('Panel\\LinksController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Getting the link to be edited so the form-model binder can pre-populate the form fields with old values
        $link = \App\Link::find($id);

        //Getting all parent links
        $links = (new \App\Link)->where('parent_id', '=', '0')->get();

        //Generating the dropdown list for parent pages as follows ['0' => 'No Parent', '1' => 'First Parent']
        $dropdown_links = dropdown_generator($links, ['id' => 'title'], ['0' => 'No Parent']);

        return view('panel.links.edit', compact('link', 'dropdown_links'));
    }

    /**
     * @param Requests\CreateEditLinksRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Requests\CreateEditLinksRequest $request, $id)
    {

        $link = (new \App\Link)->find($id);
        $link->update($request->all());
        return redirect()->action('Panel\\LinksController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        (new \App\Link)->destroy($id);

        return redirect()->action('Panel\\LinksController@index');

    }

    public function toggleVisibility($id) {
        $old_visibility = (new \App\Link)->find($id)->visibility;
        $new_visibility =  ($old_visibility-1) * -1;
        (new \App\Link)->find($id)->update(['visibility' => $new_visibility]);
        return redirect()->action('Panel\\LinksController@index');
    }
}
