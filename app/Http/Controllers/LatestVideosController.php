<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LVideos;

class LatestVideosController extends Controller
{
    public function showVideos()
    {
        // $videos = LVideos::all();

        $videos = LVideos::orderBy('created_at', 'asc')->paginate(4);
        // return view('blog.index', compact('blogs'));

        return view('livewire.latest-videos', compact('videos'  ));
    }
}
