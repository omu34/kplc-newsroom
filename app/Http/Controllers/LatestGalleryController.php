<?php

namespace App\Http\Controllers;

use App\Models\LGallery;
use Illuminate\Http\Request;

class LatestGalleryController extends Controller
{
    public function showGallaries()
    {
        // $galleries = LGallery::all();
        $gallaries = LGallery::orderBy('created_at', 'asc')->paginate(4);
        return view('livewire.latest-gallery', compact('gallaries'  ));
    }
}
