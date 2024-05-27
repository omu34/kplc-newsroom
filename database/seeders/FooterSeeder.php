<?php

namespace Database\Seeders;

use App\Models\Footer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mainPageNames = [
            'main_page_name30' => 'Quick Links',
            'main_page_name31' => 'Dashboard',
            'main_page_name32' => 'Messages',
            'main_page_name33' => 'Notifications',
            'main_page_name34' => 'Facebook',
            'main_page_name35' => 'Instagram',
            'main_page_name36' => 'LinkedIn',
            'main_page_name37' => 'YouTube',
            'main_page_name38' => 'WhatsApp',
            'main_page_name39' => 'X(Twitter)',
            'main_page_name40' => 'TikTok',
            'main_page_name41' => 'Flickr',
            'main_page_name42' => 'Nav Item 1',
            'main_page_name43' => 'Nav Item 2',
            'main_page_name44' => 'Nav Item 3',
            'main_page_name45' => 'Nav Item 1',
            'main_page_name46' => 'Nav Item 2',
            'main_page_name47' => 'Nav Item 3',
            'main_page_name48' => 'USSD',
            'main_page_name49' => '*997#',
            'main_page_name50' => 'USSD',
            'main_page_name51' => '*997#',
            'main_page_name52' => 'USSD',
            'main_page_name53' => '*997#',
            'main_page_name54' => 'USSD',
            'main_page_name55' => '*997#',
            'main_page_name56' => 'USSD',
            'main_page_name57' => '*997#',
            'main_page_name58' => 'All Rights Reserved',
            'main_page_name71' => 'Column 1',
            'main_page_name72' => 'Column 2',
            'main_page_content'=>'footer pages'

        ];

            $mainPageData = $mainPageNames;

            $mainPageData['main_page_content'] = "Sample content for the main page";

            Footer::create($mainPageData);
    }
}
