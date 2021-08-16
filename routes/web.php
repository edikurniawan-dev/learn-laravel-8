<?php

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

$appName = "Laravel 8";
Route::view('/', 'home');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/post/first-post', function () {
    return view('post.first-post');
});