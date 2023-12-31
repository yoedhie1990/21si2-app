<?php

use App\Models\Post;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/tes', function () {
    return "Hello UPH ";
});

Route::get('/about ', function () {
    return view('about',[
        "nama" => "Yudhistira",
        "alamat" => "Jalan Satria"
    ]);
});

Route::get('/blog ',[PostController::class,'index']);

// Route::get('/blog ', function () {
//     return view('posts',[
//         "posts" => Post::all()
//     ]);
// });

Route::get('/blog/{id}',[PostController::class, 'show']);
Route::get('/login ',[UserController::class,'index']);
Route::get('/register ',[UserController::class,'register']);
Route::post('/register ',[UserController::class,'store']);
Route::get('/admin/dashboard ',[AdminController::class,'index']);
Route::get('/admin/posts ',[AdminController::class,'daftar_posts']);
Route::get('/admin/posts/tambah ',[AdminController::class,'tambah_posts']);