<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Socials;
use App\Nova\Socials as NovaSocials;

class SocialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $socials = [
            ['main_page_name34' => 'Facebook', 'url' => 'https://facebook.com', 'image' => null],
            ['main_page_name37' => 'YouTube', 'url' => 'https://youtube.com', 'image' => null],
            ['main_page_name35' => 'Instagram', 'url' => 'https://instagram.com', 'image' => null],
            ['main_page_name36' => 'LinkedIn', 'url' => 'https://linkedin.com', 'image' => null],
            ['main_page_name38' => 'WhatsApp', 'url' => 'https://whatsApp.com', 'image' => null],
            ['main_page_name39' => 'x(Twitter)', 'url' => 'https://twitter.com', 'image' => null],
            ['main_page_name40' => 'TikTok', 'url' => 'https://tiktok.com', 'image' => null],
            ['main_page_name41' => 'Flickr', 'url' => 'https://snapchat.com', 'image' => null],
           
        ];

        foreach ($socials as $social) {
            NovaSocials::create($social);
        }
    }
}
