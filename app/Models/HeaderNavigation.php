<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class HeaderNavigation extends Model
{
    use HasFactory, HasApiTokens;

    protected $fillable = [
        'main_page_name1', 'main_page_name2', 'main_page_name3', 'main_page_name4',
        'main_page_name5', 'main_page_name6', 'main_page_name7', 'main_page_name8',
        'main_page_name9', 'main_page_name10', 'main_page_name11', 'main_page_name12',
        'main_page_name19', 'main_page_image82', 'main_page_image83'
    ];

    public function latestVideos()
    {
        return $this->hasMany(LatestVideos::class);
    }

    public function latestNews()
    {
        return $this->hasMany(LatestNews::class, 'main_page_id');
    }

    public function latestGalleries()
    {
        return $this->hasMany(LatestGallery::class, 'main_page_id');
    }

    public function banners()
    {
        return $this->hasMany(Banner::class, 'main_page_id');
    }

    public function breadcrumbs()
    {
        return $this->hasMany(Breadcrumb::class, 'main_page_id');
    }
    public function tags()
    {
        return $this->hasMany(Tags::class, 'main_page_id');
    }
    public function footers()
    {
        return $this->hasMany(Footer::class, 'main_page_id');
    }
}
