<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TopNavbar;
use App\Nova\MainNavbar;

class HeaderNavigationController extends Controller
{
    public function showHeader()
    {

        $topnavbars = TopNavbar::all();
        $mainnavbars = MainNavbar::all();

        return view('livewire.header-navigation', compact('topnavbars','mainnavbars'));
    }
}
