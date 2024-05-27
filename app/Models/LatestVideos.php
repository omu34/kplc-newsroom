<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LatestVideos extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_page_id',
        'main_page_name60',
        'main_page_name67',
        'main_page_name68',
        'main_page_name69',
        'main_page_name70',
        'main_page_name71'
    ];
    public function headerNavigation()
    {
        return $this->belongsTo(HeaderNavigation::class);
    }
}
