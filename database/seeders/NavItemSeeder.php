<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NavItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $navItems=[
            'main_page_name42' => 'Nav Item 1',
            'main_page_name43' => 'Nav Item 2',
           'main_page_name44' => 'Nav Item 3',
    ];

    $navItemData =  $navItems;
    foreach ($navItemData as $key => $value) {
        \App\Models\NavItem::create([
            'key' => $key,
            'value' => $value,
        ]);
    }
}
}
