<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\FeaturedNews;
use App\Models\LVideos;
use Illuminate\Http\Request;
Use Carbon\CarbonTimeZone;

class FeaturedNewsController extends Controller
{
    public function showFeature()
    {
        $blogs = Blog::all();
        $latestvideos = LVideos::all();


        return view('livewire.featured-news', compact('blogs','latestvideos'  ));
    }

}
