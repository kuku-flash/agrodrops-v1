<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function ourProducts(){
        return view('pages.ourProducts');
    }

    public function accessories(){
        return view('pages.accessories');
    }
<<<<<<< HEAD
    public function aboutus(){
        return view('pages.aboutus');
    }
    public function featured(){
        return view('pages.featured');
    }
=======

    public function aboutus(){
        return view('pages.aboutus');
    }
>>>>>>> cd8a6579588e26c3bcd0fd5774c94dccf198e6a1
}
