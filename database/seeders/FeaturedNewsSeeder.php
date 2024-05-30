<?php

namespace Database\Seeders;

use App\Models\FeaturedNews;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeaturedNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mainPageNames = [
            'main_page_name12' => 'Featured',
            'day' => 'Mar 16, 2020',
            'main_page_name17' => '345 Views',
            'main_page_name18' => 'test',
            'main_page_name60' => 'Show More',
            'main_page_name29' => 'The  Summit on Clean Cooking in Africa 2024 (Paris, France)',
            'main_page_image83'=>'images/test-1.jpg',
            'main_page_image85'=>'images/video.svg',
            'main_page_content'=>'featured pages'
        ];

        $mainPageData = $mainPageNames;

        $mainPageData['main_page_content'] = "Sample content for the main page";

        FeaturedNews::create($mainPageData);
    }
}
