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

       $mainPageNames = [
            'main_page_name13' => 'KPLC Newsroom',
            'main_page_image84' => 'images/test-1.jpg',
        ];

        $mainPageData = $mainPageNames;

        $mainPageData['main_page_content'] = "Sample content for the main page";

        Banner::create($mainPageData);
    }
}
