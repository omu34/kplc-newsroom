<?php

namespace Database\Seeders;

use App\Models\Breadcrumb;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BreadcrumbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mainPageNames = [
            'main_page_name26' => 'Home',
            'main_page_name27' => 'Main Page',
            'main_page_name28' => 'Single Page',
            'main_page_content'=>' breadcrumb pages'
        ];

        $mainPageData = $mainPageNames;

        $mainPageData['main_page_content'] = "Sample content for the main page";

        Breadcrumb::create($mainPageData);
    }
}
