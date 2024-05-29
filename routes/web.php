<?php

use App\Http\Controllers\FeaturedNewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HeaderNavigationController;
use App\Http\Controllers\LatestGalleryController;
use App\Http\Controllers\LatestNewsController;
use App\Models\FeaturedNews;

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

Route::get('/single-blog', function () {
    return view('pages.single-blog');
});

Route::get('/single-gallery', function () {
    return view('pages.single-gallery');
});

Route::get('/category', function () {
    return view('pages.category');
});


Route::get('/footer', [FooterController::class, 'index']);
Route::get('/header', [HeaderNavigationController::class, 'index']);
Route::get('/blogs', [FeaturedNewsController::class, 'showFeatures']);
Route::get('/news', [LatestNewsController::class, 'showFeatures']);
Route::get('/gallery', [LatestGalleryController::class, 'showFeatures']);


