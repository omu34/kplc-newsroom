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
        'main_page_name13' => 'KPLC Newsroom',
        'main_page_content'=>'basic pages'
    ];

    $mainPageData = $mainPageNames;

    $mainPageData['main_page_content'] = "Sample content for the main page";

    BasicBanner::create($mainPageData);


    }
}
