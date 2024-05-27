<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Footer extends Model
{
    use HasFactory, HasApiTokens;

    protected $fillable=[
        'main_page_name30',
        'main_page_name31',
        'main_page_name32',
        'main_page_name33',
        'main_page_name34',
        'main_page_name35',
        'main_page_name36',
        'main_page_name37',
        'main_page_name38',
        'main_page_name39',
        'main_page_name40',
        'main_page_name41',
        'main_page_name42',
        'main_page_name43',
        'main_page_name44',
        'main_page_name45',
        'main_page_name46',
        'main_page_name47',
        'main_page_name48',
        'main_page_name49',
        'main_page_name50',
        'main_page_name51',
        'main_page_name52',
        'main_page_name53',
        'main_page_name54',
        'main_page_name55',
        'main_page_name56',
        'main_page_name57',
        'main_page_name58',
        'main_page_name71',
        'main_page_name72'
    ];

    public function headerNavigation()
    {
        return $this->belongsTo(HeaderNavigation::class);
    }
}
