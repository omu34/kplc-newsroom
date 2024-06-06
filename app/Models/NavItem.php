<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class NavItem extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
        'name',
        'link',
        'name2',
        'link2'
    ];
}
