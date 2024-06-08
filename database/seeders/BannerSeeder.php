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
            // ' image_path' => 'images/test-1.jpg',
        ];

        $banner = $banners;

        $banner['banner_content'] = "News Room";

        Banner::create($banner);
    }
}
