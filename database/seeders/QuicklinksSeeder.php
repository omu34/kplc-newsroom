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

        $quicklinks = [
            ['main_page_name31' => 'Facebook', 'url' => 'https://Quicklinks', 'image' => null],
            ['main_page_name32' => 'YouTube', 'url' => 'https://Dashboard', 'image' => null],
            ['main_page_name33' => 'Instagram', 'url' => 'https://messages', 'image' => null],
            ['main_page_name36' => 'LinkedIn', 'url' => 'https://notifications', 'image' => null],


        ];

        foreach ($quicklinks as $quicklink) {
            NovaQuickLinks::create($quicklink);
        }

}}
