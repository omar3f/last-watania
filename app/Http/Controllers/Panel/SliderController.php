<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use app\Helpers\StoreFile;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = (new \App\Slider)->orderBy('sort')->get();

        return view('panel.slider.all', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Requests\CreateEditSliderRequest $request
     * @param StoreFile $storeFile
     * @param \App\Slider $slider
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Requests\CreateEditSliderRequest $request, StoreFile $storeFile, \App\Slider $slider)
    {
        //Creating and moving the file image
        $image_path         = $storeFile->move($request->file('image'), 'public/images/sliders/' , 16);

        //Adding the image file path to the array of request
        $modified_request   = array_merge($request->except('image'), ['image' => $image_path]);

        //Storing
        $slider->create($modified_request);

        //Redirect
        return redirect()->action('Panel\SliderController@index');
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
        $slider = (new \App\Slider)->find($id);
        return view('panel.products.edit', compact('slider'));

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
