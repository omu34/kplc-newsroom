<?php

namespace Database\Seeders;

use App\Nova\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\QuickLink as ModelsQuickLink;

class QuickLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $quickLinks = [
            // ['footer3' => 'QuickLinks', 'url' => 'https://Quicklinks', 'image' => 'images/badge.svg'],
            ['name' => 'DashBoard', 'url' => 'https://Dashboard', 'image' =>'images/badge.svg'],
            ['name' => 'Messages', 'url' => 'https://messages', 'image' => 'images/badge.svg'],
            ['name' => 'Notifications', 'url' => 'https://notifications', 'image' => 'images/badge.svg'],


        ];

        foreach ($quickLinks as $link) {
            ModelsQuickLink::create($link);
        }

}}
