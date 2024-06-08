<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            'tag1' => 'Column 1',
            'tag2' => 'Column 2',
            'tag_content'=>'tag pages'
        ];

        $tagData = $tags;

        $tagData['tag_content'] = "Sample content for the main page";

        Tag::create($tagData);
    }
}
