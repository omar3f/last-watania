<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{


    public function show($id){
        $page = (new \App\Page)->find($id);
        return view('site.pages.page', compact('page'));

    }
}
