<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Banner extends Model
{
    use HasFactory,HasApiTokens;

    protected $fillable = [
        'banner_content','image_path',
    ];

    public function headerNavigation()
    {
        return $this->belongsTo(HeaderNavigation::class, 'main_page_id');
    }

}
