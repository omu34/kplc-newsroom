<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

<<<<<<< HEAD
Route::get('/single-blog', function () {
    return view('pages.single-blog');
});

Route::get('/single-gallery', function () {
    return view('pages.single-gallery');
});

Route::get('/category', function () {
    return view('pages.category');
});
=======
   Route::get('/single-blog', function () {
        return view('single-blog');
    });

    Route::get('/single-gallery', function () {
        return view('single-gallery');
    });


















>>>>>>> kplc_newsroom_berna
