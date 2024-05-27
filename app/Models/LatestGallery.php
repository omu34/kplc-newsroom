<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class LatestGallery extends Model
{
    use HasFactory,HasApiTokens;

    protected $fillable = [
        'main_page_id',
        'main_page_name23',
        'main_page_name24',
        'main_page_name25',
        'main_page_name81',
        'main_page_name59',
        'main_page_name60'
    ];

    // Define the relationship with HeaderNavigation
    public function headerNavigation()
    {
        return $this->belongsTo(HeaderNavigation::class, 'main_page_id');
    }
}
