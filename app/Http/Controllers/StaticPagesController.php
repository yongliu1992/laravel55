<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{

    function home()
    {
        return view('static_pages/home');
    }

    function help()
    {
        return view('static_pages/help');
    }

    function about()
    {
        return view('static_pages/about');
    }
}
