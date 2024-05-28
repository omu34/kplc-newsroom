<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class LatestNews extends Model
{
    use HasFactory,HasApiTokens;
    use HasFactory;

    protected $fillable = [
        'main_page_id',
        'main_page_name60',
        'main_page_name61',
        'main_page_name62',
        'main_page_name63',
        'main_page_name64',
        'main_page_name65',
        'main_page_image91',
        'main_page_image92'
    ];

    public function headerNavigation()
    {
        return $this->belongsTo(HeaderNavigation::class, 'main_page_id');
    }
}
