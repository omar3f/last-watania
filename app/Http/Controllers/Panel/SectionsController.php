<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SectionsController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = (new \App\Section)->orderBy('id')->get();
        return view('panel.sections.all', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = (new \App\Page)->orderBy('id')->get();
        $dropdown_pages = dropdown_generator($pages, ['id' => 'title']);

        $sections = (new \App\Section)->where('parent_id', '0')->orderBy('id')->get();
        $dropdown_sections = dropdown_generator($sections, ['id' => 'title'], ['0' => 'No Parent']);

        return view('panel.sections.create', compact('dropdown_pages', 'dropdown_sections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\CreateEditSectionsRequest $request)
    {
        (new \App\Section)->create($request->all());
        return redirect()->action('Panel\SectionsController@index');
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
        $section = (new \App\Section)->find($id);

        $pages = (new \App\Page)->orderBy('id')->get();
        $dropdown_pages = dropdown_generator($pages, ['id' => 'title']);

        $sections = (new \App\Section)->where('parent_id', '0')->orderBy('id')->get();
        $dropdown_sections = dropdown_generator($sections, ['id' => 'title'], ['0' => 'No Parent']);

        return view('panel.sections.edit', compact('dropdown_pages', 'dropdown_sections', 'section'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\CreateEditSectionsRequest $request, $id)
    {
        (new \App\Section)->find($id)->update($request->all());
        return redirect()->action('Panel\SectionsController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        (new \App\Section)->destroy($id);
        return redirect()->action('Panel\SectionsController@index');
    }
}
