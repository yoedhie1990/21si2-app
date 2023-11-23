<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        
        $data =  $request->validate([
            'name'=>'required',
            'email'=> ['unique:users,email'],
            'password'=> 'required'
        ]);
        User::create($data);

        $request->session()->flash('success','Pendaftaran Berhasil');
        
        return redirect('/register');
        
       
    }
}
