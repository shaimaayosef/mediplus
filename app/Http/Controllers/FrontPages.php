<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPages extends Controller
{
    public function home(){
        $title = "mediplus website";
        return view('home', compact('title'));
    }
    public function cntact(){
        $title = "mediplus contact";
        return view('contact', compact('title'));
    }
}
