<?php
namespace App\Http\Controllers;

use App\Models\Column;
use Illuminate\Http\Request;
use App\Models\Socials;
use App\Models\QuickLinks;
use App\Models\Currency;
use App\Models\NavItem;

class FooterController extends Controller
{
    public function showFooter()
    {
        $socials = Socials::all();
        $quickLinks = QuickLinks::all();
        $currencys = Currency::all();
        $columns =Column::all();
        $navs =NavItem ::all();

        return view('livewire.footer', compact('socials', 'quickLinks', 'currencys','navs','columns'));
    }



}





