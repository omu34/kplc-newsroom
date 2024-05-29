<?php

namespace Database\Seeders;

use App\Models\LatestNews;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LatestNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mainPageNames = [
            'main_page_name60' => 'Show Me More',
            'main_page_name61' => 'Latest News',
            'day' => 'Mar 16, 2020',
                        'main_page_name63' => '345 Views',
            'main_page_name64' => 'The  Summit on Clean Cooking in Africa 2024 (Paris, France)',
            'main_page_name65' => 'Test',
            'main_page_image91'=>'images/1.jpg',
            'main_page_image92'=>'images/blog.svg',
            'main_page_content'=>'latest News page '
        ];

        $mainPageData = $mainPageNames;

        $mainPageData['main_page_content'] = "Sample content for the main page";

        LatestNews::create($mainPageData);
    }
}