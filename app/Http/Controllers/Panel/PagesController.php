<?php
namespace App\Http\Controllers\Panel;
use App\Http\Requests\CreateNewPageRequest;
use App\Link;
use App\Page;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

use App\Helpers\StoreFile;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $pages = (new \App\Page)->all();
        return view('panel.pages.all', compact('pages'));
    }
    public function create()
    {
        $pages = (new \App\Page)->where('parent_id',0)->get();
        $dropdown_pages = dropdown_generator($pages, ['id' => 'title'], ['0' => 'No Parent']);
        return view('panel.pages.create',compact('dropdown_pages'));
    }
    public function store(Requests\Pages\CreatePageRequest $request, StoreFile $storeFile, \App\Page $page)
    {
        if($request->hasFile('image')) {
            $image_path         = $storeFile->move($request->file('image'), 'images/pages/' , 16);
            $modified_request   = array_merge($request->all(), ['image' => $image_path]);

        } else {
            $modified_request = $request->except('image');
        }

        $page->create($modified_request);

        //Redirect
        return redirect()->action('Panel\PagesController@index');
    }

    public function show($id)
    {
    }
    public function edit($id)
    {
        $page = (new \App\Page)->find($id);
        $pages = (new \App\Page)->all();
        $dropdown_pages = dropdown_generator($pages, ['id' => 'title'], ['0' => 'No Parent']);
        return view('panel.pages.edit', compact('page', 'dropdown_pages'));
    }
    public function update(Requests\Pages\EditPageRequest $request, $id, StoreFile $storeFile, \App\Page $page)
    {
        if($request->hasFile('image')) {
            $image_path         = $storeFile->move($request->file('image'), 'images/pages/' , 16);
            $modified_request   = array_merge($request->all(), ['image' => $image_path]);

        } else {
            $modified_request = $request->except('image');
        }
        $page->findOrFail($id)->update($modified_request);

        //Redirect
        return redirect()->action('Panel\PagesController@index');
    }
    public function destroy($id)
    {
        (new \App\Page)->destroy($id);
        return redirect()->action('Panel\PagesController@index');
    }
}