<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LGallery extends Model
{
    use HasFactory;

    protected $fillable=[
        'day',
       'views',
       'link',
        'description',
        'likes',
        'image_path',
        'video_path'

    ];


    protected $casts = [
        'day' => 'date',
    ];
}
