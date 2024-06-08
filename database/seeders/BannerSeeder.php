<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

       $banners = [
            'banner_content' => 'KPLC Newsroom',
            // ' image' => 'images/test-1.jpg',
        ];

        $bannerData = $banners;

        $bannerData['banner_content'] = "Sample content for the main page";

        Banner::create($bannerData);
    }
}
