<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class FeaturedNews extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
        'day',
        'views',
        'featured',
        'description',
        'likes',
        'link',
        'file',

    ];

    protected $casts = [
        'day' => 'date',
    ];

    public function files()
    {
        if (!$this->exists) {
            return collect();
        }

        return $this->morphMany(File::class, 'fileable');
    }
}
