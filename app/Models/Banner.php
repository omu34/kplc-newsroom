<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Banner extends Model
{
    use HasFactory,HasApiTokens;

    protected $fillable = [
        // 'main_page_names13',
        'main_page_image84'
    ];

    public function headerNavigation()
    {
        return $this->belongsTo(HeaderNavigation::class, 'main_page_id');
    }

}
