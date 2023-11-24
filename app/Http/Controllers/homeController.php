<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    function home () {
        return view('pages.home');
    }
    function about () {
        return view('pages.about');
    }
    function project () {
        return view('pages.project');
    }
    function contact () {
        return view('pages.contact');
    }
}
