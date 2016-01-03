<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{



    public function index() {

        $links = (new \App\Link)->links();
        $sections = (new \App\Section)->home_sections();
        $data = (new \App\MainData)->data(['logo', 'favicon' , 'websitename', 'mail', 'address', 'phone', 'short-desc', 'short-desc-title', 'short-desc-photo', 'footer-photo']);

        $social = (new \App\Social)->social(['facebook', 'twitter', 'linkedin', 'youtube', 'google', 'skype']);

        return view('site.home.home', compact('links', 'social', 'data', 'sections'));

    }
}
