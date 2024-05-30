<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LNews extends Model
{
    use HasFactory;

    protected $fillable=[
        'link',
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
