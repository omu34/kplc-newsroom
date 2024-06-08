<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Tags extends Model
{
    use HasFactory,HasApiTokens;

    protected $fillable = [

        'tag1',
        'tag2'
    ];

    // Define the relationship with HeaderNavigation
    public function headerNavigation()
    {
        return $this->belongsTo(HeaderNavigation::class, 'main_page_id');
    }
}
