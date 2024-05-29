<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LVideos;

class LastestVideosController extends Controller
{
    public function showVideos()
    {
        $videos = LVideos::all();

        return view('livewire.latest-videos', compact('videos'  ));
    }
}
