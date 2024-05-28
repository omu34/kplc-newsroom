<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class BasicBanner extends Model
{
    use HasFactory, HasApiTokens;

    protected $fillable = [
        'header_navigation_id',
        'main_page_name13',
        'main_page_name15',
        'main_page_image84',
        'main_page_content'
        ];

    public function headerNavigation()
    {
        return $this->belongsTo(HeaderNavigation::class, 'main_page_id');
    }
}
