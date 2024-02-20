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
}
