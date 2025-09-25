<?php

namespace Database\Seeders;

use App\Models\ForumCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ForumCategorySeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['name' => 'General Talk', 'description' => 'Friendly chats and introductions'],
            ['name' => 'Travel Tips', 'description' => 'Ask and share Hurghada advice'],
            ['name' => 'Diving & Reefs', 'description' => 'Underwater experiences and gear'],
            ['name' => 'Food & Nightlife', 'description' => 'Best spots to eat and dance'],
        ];

        foreach ($items as $item) {
            ForumCategory::firstOrCreate(
                ['slug' => Str::slug($item['name'])],
                ['name' => $item['name'], 'description' => $item['description']]
            );
        }
    }
}


