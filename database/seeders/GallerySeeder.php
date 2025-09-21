<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $galleries = [
            [
                'title' => 'Hurghada Marina View',
                'collection' => 'hurghada_attractions',
                'file_path' => 'galleries/hurghada_marina_view.jpg',
                'thumbnail_path' => 'galleries/thumbnails/hurghada_marina_view_thumb.jpg',
                'width' => 1920,
                'height' => 1080,
                'filesize' => 2457600,
                'mime_type' => 'image/jpeg',
                'meta' => json_encode([
                    'description' => 'Beautiful view of Hurghada Marina with boats and crystal clear waters',
                    'location' => 'Hurghada Marina, Red Sea',
                    'photographer' => 'Hurghada Tourism Board',
                    'tags' => ['marina', 'boats', 'red sea', 'hurghada', 'tourism']
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Red Sea Coral Reefs',
                'collection' => 'underwater_world',
                'file_path' => 'galleries/red_sea_coral_reefs.jpg',
                'thumbnail_path' => 'galleries/thumbnails/red_sea_coral_reefs_thumb.jpg',
                'width' => 1920,
                'height' => 1080,
                'filesize' => 3120000,
                'mime_type' => 'image/jpeg',
                'meta' => json_encode([
                    'description' => 'Vibrant coral reefs in the Red Sea near Hurghada',
                    'location' => 'Red Sea, Hurghada',
                    'photographer' => 'Marine Photography Team',
                    'tags' => ['coral', 'reef', 'underwater', 'marine life', 'diving']
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Hurghada Desert Safari',
                'collection' => 'desert_adventures',
                'file_path' => 'galleries/hurghada_desert_safari.jpg',
                'thumbnail_path' => 'galleries/thumbnails/hurghada_desert_safari_thumb.jpg',
                'width' => 1920,
                'height' => 1080,
                'filesize' => 2890000,
                'mime_type' => 'image/jpeg',
                'meta' => json_encode([
                    'description' => 'Desert safari adventure in the Hurghada desert',
                    'location' => 'Hurghada Desert, Egypt',
                    'photographer' => 'Desert Adventures Co.',
                    'tags' => ['desert', 'safari', 'adventure', 'sand dunes', 'camel']
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Hurghada Old Town',
                'collection' => 'cultural_heritage',
                'file_path' => 'galleries/hurghada_old_town.jpg',
                'thumbnail_path' => 'galleries/thumbnails/hurghada_old_town_thumb.jpg',
                'width' => 1920,
                'height' => 1080,
                'filesize' => 2670000,
                'mime_type' => 'image/jpeg',
                'meta' => json_encode([
                    'description' => 'Traditional architecture and local culture in Hurghada Old Town',
                    'location' => 'Hurghada Old Town, Egypt',
                    'photographer' => 'Cultural Heritage Society',
                    'tags' => ['old town', 'culture', 'architecture', 'traditional', 'local']
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Hurghada Beach Resort',
                'collection' => 'resorts_hotels',
                'file_path' => 'galleries/hurghada_beach_resort.jpg',
                'thumbnail_path' => 'galleries/thumbnails/hurghada_beach_resort_thumb.jpg',
                'width' => 1920,
                'height' => 1080,
                'filesize' => 2980000,
                'mime_type' => 'image/jpeg',
                'meta' => json_encode([
                    'description' => 'Luxury beach resort with stunning Red Sea views',
                    'location' => 'Hurghada Beach, Red Sea',
                    'photographer' => 'Resort Photography',
                    'tags' => ['resort', 'beach', 'luxury', 'hotel', 'vacation']
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Hurghada Nightlife',
                'collection' => 'entertainment',
                'file_path' => 'galleries/hurghada_nightlife.jpg',
                'thumbnail_path' => 'galleries/thumbnails/hurghada_nightlife_thumb.jpg',
                'width' => 1920,
                'height' => 1080,
                'filesize' => 2340000,
                'mime_type' => 'image/jpeg',
                'meta' => json_encode([
                    'description' => 'Vibrant nightlife scene in Hurghada with restaurants and bars',
                    'location' => 'Hurghada Downtown, Egypt',
                    'photographer' => 'Nightlife Photography',
                    'tags' => ['nightlife', 'restaurants', 'bars', 'entertainment', 'dining']
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Hurghada Souk Market',
                'collection' => 'shopping',
                'file_path' => 'galleries/hurghada_souk_market.jpg',
                'thumbnail_path' => 'galleries/thumbnails/hurghada_souk_market_thumb.jpg',
                'width' => 1920,
                'height' => 1080,
                'filesize' => 2560000,
                'mime_type' => 'image/jpeg',
                'meta' => json_encode([
                    'description' => 'Traditional souk market with local crafts and souvenirs',
                    'location' => 'Hurghada Souk, Egypt',
                    'photographer' => 'Market Photography',
                    'tags' => ['souk', 'market', 'shopping', 'crafts', 'souvenirs']
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Hurghada Sunset',
                'collection' => 'nature_scenery',
                'file_path' => 'galleries/hurghada_sunset.jpg',
                'thumbnail_path' => 'galleries/thumbnails/hurghada_sunset_thumb.jpg',
                'width' => 1920,
                'height' => 1080,
                'filesize' => 2780000,
                'mime_type' => 'image/jpeg',
                'meta' => json_encode([
                    'description' => 'Breathtaking sunset over the Red Sea in Hurghada',
                    'location' => 'Hurghada Beach, Red Sea',
                    'photographer' => 'Nature Photography',
                    'tags' => ['sunset', 'red sea', 'nature', 'beautiful', 'scenic']
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Hurghada Diving Center',
                'collection' => 'water_sports',
                'file_path' => 'galleries/hurghada_diving_center.jpg',
                'thumbnail_path' => 'galleries/thumbnails/hurghada_diving_center_thumb.jpg',
                'width' => 1920,
                'height' => 1080,
                'filesize' => 2670000,
                'mime_type' => 'image/jpeg',
                'meta' => json_encode([
                    'description' => 'Professional diving center offering underwater adventures',
                    'location' => 'Hurghada Diving Center, Red Sea',
                    'photographer' => 'Diving Photography',
                    'tags' => ['diving', 'water sports', 'adventure', 'underwater', 'training']
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Hurghada Airport',
                'collection' => 'transportation',
                'file_path' => 'galleries/hurghada_airport.jpg',
                'thumbnail_path' => 'galleries/thumbnails/hurghada_airport_thumb.jpg',
                'width' => 1920,
                'height' => 1080,
                'filesize' => 2450000,
                'mime_type' => 'image/jpeg',
                'meta' => json_encode([
                    'description' => 'Hurghada International Airport - Gateway to the Red Sea',
                    'location' => 'Hurghada International Airport, Egypt',
                    'photographer' => 'Aviation Photography',
                    'tags' => ['airport', 'transportation', 'international', 'gateway', 'travel']
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        DB::table('galleries')->insert($galleries);
    }
}
