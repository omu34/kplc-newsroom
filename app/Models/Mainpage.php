<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainPage extends Model
{
    use HasFactory;

    protected $fillable = [

        'gallery_name',
        'featured',
        'button_text',
        'latest_news',
        'latest_videos',

    ];
}
