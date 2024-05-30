<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\FeaturedNews;
use App\Models\MainPage;
use Illuminate\Http\Request;
use Carbon\CarbonTimeZone;
use Livewire\WithPagination;

class FeaturedNewsController extends Controller
{

    use WithPagination;
    // public function showFeature()
    // {
    //     // $blogs = Blog::orderBy('created_at', 'asc')->select('id')->paginate(4);
    //     $blogs = Blog::orderBy('created_at', 'desc')->with('featured')->paginate(4);
    //     $blogDetails = $blogs;
    //     return view('livewire.featured-news', compact('blogs',));
    // }



    public function index()
    {
        $featuredNews = FeaturedNews::paginate(4); // or use any method to fetch your main pages
        return view('livewire.featured-news', compact('featuredNews'));
    }

    public function show($id)
    {
        $features = FeaturedNews::findOrFail($id);

        $blogs = Blog::where('main_page_id', $id)->get(); // Assuming blogs are related to main pages by `main_page_id`
        return view('single-blog', compact('features', 'blogs'));
    }
}
