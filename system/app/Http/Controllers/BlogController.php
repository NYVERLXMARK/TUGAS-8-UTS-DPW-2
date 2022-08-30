<?php

namespace App\Http\Controllers;
use App\Models\Artikel;

class BlogController extends Controller
{
	function ShowBlog(){
		$data['list_artikel'] = Artikel::all();
		return view('blog.home', $data);
	}

    function show(Artikel $artikel)
    {
        $data['artikel'] = $artikel;
        return view('blog.show', $data);
    }

    // function contact(Artikel $artikel)
    // {
    //     $data['artikel'] = $artikel;
    //     return view('blog.show', $data);
    // }
}