<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Column extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable=[
        'name','name2'
    ];
}
