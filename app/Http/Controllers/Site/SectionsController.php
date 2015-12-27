<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SectionsController extends Controller
{
    public function index() {
        $sections = (new \App\Section)->orderBy('title')->get();
        return view('site.sections.all', compact('sections'));
    }

    public function show($id){
        $section = (new \App\Section)->find($id);
        return view('site.sections.section', compact('section'));

    }
}
