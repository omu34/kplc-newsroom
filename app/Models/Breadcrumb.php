<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Breadcrumb extends Model
{
    use HasFactory,HasApiTokens;
    
    protected $fillable = [
        'main_page_id',
        'main_page_names26',
        'main_page_names27',
        'main_page_names28'
    ];

    // Define the relationship with HeaderNavigation
    public function headerNavigation()
    {
        return $this->belongsTo(HeaderNavigation::class, 'main_page_id');
    }
}
