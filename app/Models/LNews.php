<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LNews extends Model
{
    use HasFactory;

    protected $fillable = [
        'link',
        'day',
        'views',
        'link',
        'description',
        'likes',
        'video_path',
        'status',
    ];

    protected $casts = [
        'day' => 'date',
    ];
}
