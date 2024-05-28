<?php

namespace Database\Seeders;

use App\Models\BasicBanner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BasicBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mainPageNames = [
            'header_navigation_id' => 1,
            'main_page_name13' => 'KPLC NewsRoom',
            'main_page_image84' => 'images/test-1.jpg',
            'main_page_content' => 'This is a sample content for the banner.',
    ];

    $mainPageData = $mainPageNames;

    $mainPageData['main_page_content'] = "Sample content for the main page";

    BasicBanner::create($mainPageData);


    }
}
