<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

        $data['password'] = Hash::make($data['password']);

        User::create($data);

        $request->session()->flash('success','Pendaftaran Berhasil');
        
        return redirect('/register');
        
       
    }
}
