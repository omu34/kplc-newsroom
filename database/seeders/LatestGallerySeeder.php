<?php

namespace Database\Seeders;

use App\Models\LatestGallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LatestGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mainPageNames = [
            'main_page_name23' => 'Latest Gallery',
            'day' => 'Mar 16, 2020',
            'main_page_name25' => '345 Views',
            'main_page_name81' => 'The  Summit on Clean Cooking in Africa 2024 (Paris, France)',
            'main_page_name59' => 'Test',
            'main_page_name60' => 'Show Me More',
            'main_page_image89'=>'images/1.jpg',
            'main_page_image90'=>'images/blog.svg',
            'main_page_content'=>'latest gallery pages'
        ];

        $mainPageData = $mainPageNames;

        $mainPageData['main_page_content'] = "Sample content for the main page";

        LatestGallery::create($mainPageData);
    }
}
