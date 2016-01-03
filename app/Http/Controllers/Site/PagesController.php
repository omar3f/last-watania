<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{


    public function show($url){
        $page = (new \App\Page)->where('url', $url)->firstOrFail();
        $links = (new \App\Link)->links();
        $sections = (new \App\Section)->home_sections();
        $data = (new \App\MainData)->data(['logo', 'favicon' , 'websitename', 'mail', 'address', 'phone', 'short-desc', 'short-desc-title', 'short-desc-photo', 'footer-photo']);

        $social = (new \App\Social)->social(['facebook', 'twitter', 'linkedin', 'youtube', 'google', 'skype']);
        return view('site.pages.page', compact('page', 'links', 'social', 'data', 'sections'));

    }


}
