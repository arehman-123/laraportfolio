<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index(){
        return view('frontend.pages.index');
    }
    public function about(){
        return view('frontend.pages.about');
    }

    public function blog(){
        return view('frontend.pages.blog');
    }

    public function contact(){
        return view('frontend.pages.contact');
    }
    public function portfolio(){

        return view('frontend.pages.portfolio');
    }
    

}
