<?php

namespace App\Http\Controllers;

use App\Models\LNews;
use Illuminate\Http\Request;

class LatestNewsController extends Controller
{
    public function showVideos()
    {
        $news = LNews::all();

        return view('livewire.latest-news', compact('news'  ));
    }
}
