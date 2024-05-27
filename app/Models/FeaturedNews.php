<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class FeaturedNews extends Model
{
    use HasFactory,HasApiTokens;
    protected $fillable = [
        'main_page_name16',
        'main_page_name17',
        'main_page_name18',
        'main_page_name29'
    ];
    
    public function headerNavigation()
    {
        return $this->belongsTo(HeaderNavigation::class, 'main_page_id');
    }
}
