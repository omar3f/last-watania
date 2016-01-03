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

        $links = (new \App\Link)->links();
        $data = (new \App\MainData)->data(['logo', 'favicon' , 'websitename', 'mail', 'address', 'phone', 'short-desc', 'short-desc-title', 'short-desc-photo', 'footer-photo']);

        $social = (new \App\Social)->social(['facebook', 'twitter', 'linkedin', 'youtube', 'google', 'skype']);

        $child_sections = (new \App\Section)->where('parent_id', $section->id)->take(4)->get();
        return view('site.sections.section', compact('section', 'child_sections' , 'links', 'data', 'social'));

    }
}
