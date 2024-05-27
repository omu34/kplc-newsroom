<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Banner extends Model
{
    use HasFactory,HasApiTokens;

    protected $fillable = [
        'main_page_id',
        'main_page_names13',
        'main_page_names14',
        'main_page_names15',
        'main_page_names16',
        'main_page_names17',
        'main_page_names18',
        'main_page_names19',
        'main_page_names20',
        'main_page_names21',
        'main_page_names22',
        'main_page_image84'
    ];

    // Define the relationship with HeaderNavigation
    public function headerNavigation()
    {
        return $this->belongsTo(HeaderNavigation::class, 'main_page_id');
    }

}
