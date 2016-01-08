<?php

namespace App\Http\Controllers\Panel;

use \App\Helpers\StoreFile;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SectionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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
     * @param Requests\CreateEditSectionsRequest $request
     * @param StoreFile $storeFile
     * @param \App\Section $section
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Requests\Sections\CreateSectionRequest $request, StoreFile $storeFile, \App\Section $section)
    {

        $image_path         = $storeFile->move($request->file('image'), 'images/sections/', 16);
        $modified_request   = array_merge($request->all(), ['image' => $image_path]);



        $section->create($modified_request);

        //Redirect
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
    public function update(Requests\Sections\EditSectionRequest $request, $id, StoreFile $storeFile, \App\Section $section)
    {
        if ($request->hasFile('image')) {
            //Creating and moving the file image
            $image_path         = $storeFile->move($request->file('image'), 'public/images/sections/' , 16);

            //Adding the image file path to the array of request
            $modified_request   = array_merge($request->except('image'), ['image' => $image_path]);

        } else {
            $modified_request = $request->except('image');
        }

        //Storing
        $section->findOrFail($id)->update($modified_request);

        //Redirect
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

    public function toggleVisibility($id) {
        $old_visibility = (new \App\Section)->find($id)->home;
        $new_visibility =  ($old_visibility-1) * -1;
        (new \App\Section)->find($id)->update(['home' => $new_visibility]);
        return redirect()->action('Panel\\SectionsController@index');
    }
}
