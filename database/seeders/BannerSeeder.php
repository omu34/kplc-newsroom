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
            'main_page_name15' => 'Share This',
            'main_page_name16' => 'Mar 16, 2020',
            'main_page_name17' => '345 Views',
            'main_page_name18' => 'test',
            'main_page_name19' => 'Your Company',
            'main_page_name20' => 'Lorem ipsum dolor sit amet consectetur adipisicing',
            'main_page_image84' => 'storage/app/public/test-1.jpg',
        ];

        $mainPageData = $mainPageNames;

        $mainPageData['main_page_content'] = "Sample content for the main page";

        Banner::create($mainPageData);
    }
}
