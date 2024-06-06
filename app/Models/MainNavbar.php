<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainNavbar extends Model
{
    use HasFactory;


    protected $fillable=[
        'name',
        'link'
    ];

    public function headerNavigations()
    {
        return $this->belongsTo(HeaderNavigation::class);
    }
}






