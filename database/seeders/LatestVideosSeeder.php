<?php

namespace Database\Seeders;

use App\Models\LatestVideos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LatestVideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mainPageNames = [
            'main_page_name11' => 'Latest Videos',
            'main_page_name60' => 'Show Me More',
            'main_page_name67' => 'Mar 16, 2020',
            'main_page_name68' => '345 Views',
            'main_page_name69' => 'The  Summit on Clean Cooking in Africa 2024 (Paris, France)',
            'main_page_name70' => 'Test',
            'main_page_image88'=>'images/1.jpg',
            'main_page_image87'=>'images/video.svg',
            'main_page_content'=>'latest videos pages'
        ];

        $mainPageData = $mainPageNames;

        $mainPageData['main_page_content'] = "Sample content for the main page";

        LatestVideos::create($mainPageData);
    }
}
