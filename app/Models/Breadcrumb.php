<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Breadcrumb extends Model
{
    use HasFactory,HasApiTokens;

    protected $fillable = [
        'breadcrumb1',
        'breadcrumb2',
        'breadcrumb_content'
    ];

    // Define the relationship with HeaderNavigation
    public function headerNavigation()
    {
        return $this->belongsTo(HeaderNavigation::class, 'main_page_id');
    }
}
