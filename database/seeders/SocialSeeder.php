<?php

namespace Database\Seeders;

use App\Models\Social;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Nova\Social as ModelsSocial;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $socials = [
            ['name' => 'Facebook', 'url' => 'https://facebook.com', 'image_path' => 'images/badge.svg'],
            ['name' => 'YouTube', 'url' => 'https://youtube.com', 'image_path' => 'images/badge.svg'],
            ['name' => 'Instagram', 'url' => 'https://instagram.com', 'image_path' => 'images/badge.svg'],
            ['name' => 'LinkedIn', 'url' => 'https://linkedin.com', 'image_path' => 'images/badge.svg'],
            ['name' => 'WhatsApp', 'url' => 'https://whatsApp.com', 'image_path' => 'images/badge.svg'],
            ['name' => 'x(Twitter)', 'url' => 'https://twitter.com', 'image_path' => 'images/badge.svg'],
            ['name' => 'TikTok', 'url' => 'https://tiktok.com', 'image_path' => 'images/badge.svg'],
            ['name' => 'Flickr', 'url' => 'https://snapchat.com', 'image_path' => 'images/badge.svg'],

        ];

        foreach ($socials as $social) {
            Social::create($social);
        }
    }
}
