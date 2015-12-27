<?php

namespace App\Http\Controllers\Panel;

use App\Helpers\StoreFile;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class ProductsController extends Controller
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
        $products = (new \App\Product)->orderBy('id')->get();
        return view('panel.products.all', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $sections = (new \App\Section)->orderBy('id')->get();
        $dropdown_sections = dropdown_generator($sections, ['id' => 'title']);
        return view('panel.products.create', compact('dropdown_sections'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Requests\CreateEditProductsRequest $request
     * @param StoreFile $storeFile
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Requests\CreateEditProductsRequest $request, StoreFile $storeFile, \App\Product $product)
    {
        //Creating and moving the file image
        $image_path         = $storeFile->move($request->file('image'), 'public/images/products/' , 16);

        //Adding the image file path to the array of request
        $modified_request   = array_merge($request->except('image'), ['image' => $image_path]);

        //Storing
        $product->create($modified_request);

        //Redirect
        return redirect()->action('Panel\ProductsController@index');
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

        $product = (new \App\Product)->find($id);
        $sections = (new \App\Section)->orderBy('id')->get();
        $dropdown_sections = dropdown_generator($sections, ['id' => 'title']);
        return view('panel.products.edit', compact('dropdown_sections', 'product'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
