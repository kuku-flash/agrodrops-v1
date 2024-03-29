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
    public function aboutus(){
        return view('pages.aboutus');
    }
   
    public function featured(){
        return view('pages.featured');
    }
    
    public function ourClients(){
        return view('pages.ourClients');
    }

    public function ourServices(){
        return view('pages.ourServices'); 
    }
    public function contactus(){
        return view('pages.contactus');
    }
    public function FAQ(){
        return view('pages.FAQ'); 
    }
}
