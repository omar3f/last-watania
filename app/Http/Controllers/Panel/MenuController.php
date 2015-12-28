<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function __construct() {

    }


    public function menu() {
        $links = (new \App\Link)->parents()->visible()->orderBy('sort')->get();
        return view('menu.menu', compact('links'));
    }
}
