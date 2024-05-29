<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LVideos extends Model
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
}
