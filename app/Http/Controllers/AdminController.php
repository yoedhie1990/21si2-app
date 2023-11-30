<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class AdminController extends Controller
{
    public function index()
    {
        // die('tes');
        return view('admin.dashboard');
    }

    public function daftar_posts()
    {
        // dd(Post::all());
        // die('tes');
        return view('admin.post',[
            "posts" => Post::all()
        ]);
    }

    public function tambah_posts()
    {
        
        return view('admin.post-tambah',[
            "posts" => Post::all()
        ]);
    }
}
