<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class BasicBanner extends Model
{
    use HasFactory, HasApiTokens;

    protected $fillable = [
        'title',
        'image',
        'basic_banner_content'
        ];

    public function headerNavigation()
    {
        return $this->belongsTo(HeaderNavigation::class, 'main_page_id');
    }
}
