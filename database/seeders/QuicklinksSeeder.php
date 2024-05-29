<?php

namespace Database\Seeders;

use App\Nova\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\QuickLinks as NovaQuickLinks;

class QuicklinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $quickLinks = [
            ['main_page_name31' => 'QuickLinks', 'url' => 'https://Quicklinks', 'image' => 'images/badge.svg'],
            ['main_page_name32' => 'DashBoard', 'url' => 'https://Dashboard', 'image' =>'images/badge.svg'],
            ['main_page_name33' => 'Messages', 'url' => 'https://messages', 'image' => 'images/badge.svg'],
            ['main_page_name36' => 'Notifications', 'url' => 'https://notifications', 'image' => 'images/badge.svg'],


        ];

        foreach ($quickLinks as $link) {
            NovaQuickLinks::create($link);
        }

}}
