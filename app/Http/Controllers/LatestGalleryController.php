<?php

namespace App\Http\Controllers;

use App\Models\LGallery;
use Illuminate\Http\Request;

class LatestGalleryController extends Controller
{
    public function showVideos()
    {
        $galleries = LGallery::all();

        return view('livewire.latest-gallery', compact('galleries'  ));
    }
}
