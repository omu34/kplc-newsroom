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
        $latestNews = [
            // 'button_text' => 'Show Me More',
            'day' => 'Mar 16, 2020',
            'views' => '345 ',
            'description' => 'The  Summit on Clean Cooking in Africa 2024 (Paris, France)',
            'file'=>'images/1.jpg',
            'main_page_content'=>'latest News page '

        ];

        $latestNewsData= $latestNews;

        $latestNewsData['main_page_content'] = "Sample content for the main page";

        LatestNews::create($latestNewsData);
    }
}
