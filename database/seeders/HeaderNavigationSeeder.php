<?php

namespace Database\Seeders;

use App\Models\HeaderNavigation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeaderNavigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mainPageNames = [
            'main_page_name1' => 'Product',
            'main_page_name2' => 'Features',
            'main_page_name3' => 'Marketplace',
            'main_page_name4' => 'Company',
            'main_page_name5' => 'Alternative Energy',
            'main_page_name6' => 'Public',
            'main_page_name7' => 'Stock Market',
            // 'main_page_name8' => '',
            // 'main_page_name9' => '',
            // 'main_page_name10' => '',
            // 'main_page_name12' => '',
            'main_page_name19' => 'Company',
            'main_page_image82' => 'storage/app/public/logo.svg',//relative path'public/storage',
            'main_page_image83' => 'storage/app/public/logo.svg',
            'main_page_content'=>'pages'
        ];

        $mainPageData = $mainPageNames;

        $mainPageData['main_page_content'] = "Sample content for the main page";

        HeaderNavigation::create($mainPageData);
    }
}
