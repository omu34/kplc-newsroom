<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {  return view('pages.home');});
Route::get('/single-blog', function () {return view('pages.single-blog');});
Route::get('/single-gallery', function () {return view('pages.single-gallery');});
Route::get('/category', function () {return view('pages.category');});
Route::get('/latest-news', function () {return view('pages.single-news');});
Route::get('/latest-gallery', function () {return view('pages.single-gallery');});
Route::get('/latest-videos', function () {return view('pages.single-videos');});
Route::get('/featured-news', function () {return view('pages.single-featured-news');});
Route::get('/show-posts', function () {return view('pages.show-post');});

