<?php

namespace App\Http\Controllers;

use App\Models\LNews;
use Illuminate\Http\Request;

class LatestNewsController extends Controller
{
    public function showNews()
    {
        // $news = LNews::all();
        $news = LNews::orderBy('created_at', 'asc')->paginate(4);
        return view('livewire.latest-news', compact('news'  ));
    }
}
