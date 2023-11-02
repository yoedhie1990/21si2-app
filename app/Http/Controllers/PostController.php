<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts',[
            "posts" => Post::all()
        ]);
    }

    public function show($id){
        return view('post',[
            "post" => Post::find($id)
        ]);
    }
}
