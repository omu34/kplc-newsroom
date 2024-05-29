<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;


    protected $fillable=[
        'day',
       'views',
        'description',
        'likes',
        'image_path',
        'video_path'

    ];


    protected $casts = [
        'day' => 'date',
    ];


    public function featuredNews()
    {
        return $this->belongsTo(FeaturedNews::class);
    }

    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }
}
