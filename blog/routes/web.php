<?php

use App\Http\Controllers\postcontroller;
use App\Models\post;
use Illuminate\Support\Facades\Route; 


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

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Muhammad Ramadana",
        "email" => "danarama154@gmail.com",
        "image" => "Rama3.jpg"
]);
});



Route::get('/post',[postcontroller::class, 'index']);

//halaman single post
Route::get('/post/{slug}', [postcontroller::class,'show']);