<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function showExtraBlogs()
{
    $blogs = Blog::orderBy('created_at', 'asc')->skip(4)->take(PHP_INT_MAX)->get();
    return view('single-blog', compact('blogs'));
}
}
