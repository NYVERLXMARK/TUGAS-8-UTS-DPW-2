<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

    function showBeranda(){
        return view('template.base');
    }

    function showBlog(){
        return view('blog.home');
    }

    function showContact(){
        return view('blog.contact');
    }
}