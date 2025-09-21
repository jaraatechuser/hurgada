<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
use Carbon\Carbon;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            // Specific Events from Research
            [
                'title' => 'Stargate Full Moon Experience',
                'description' => 'An immersive experience celebrating the full moon with various activities, performances, and celestial observations in the beautiful Red Sea setting.',
                'starts_at' => Carbon::create(2025, 9, 7, 18, 0),
                'ends_at' => Carbon::create(2025, 9, 7, 23, 0),
                'location' => 'Hurghada Marina',
                'latitude' => 27.2574,
                'longitude' => 33.8129,
                'category' => 'Cultural',
                'popularity' => 85,
                'is_featured' => true,
                'ticket_url' => 'https://example.com/stargate-tickets'
            ],
            [
                'title' => 'Egypt Private Luxury Tour',
                'description' => 'A private luxury tour showcasing the best of Egypt\'s historical sites, cultural heritage, and natural beauty with personalized service.',
                'starts_at' => Carbon::create(2025, 9, 13, 16, 0),
                'ends_at' => Carbon::create(2025, 9, 13, 20, 0),
                'location' => 'Hurghada City Center',
                'latitude' => 27.2574,
                'longitude' => 33.8129,
                'category' => 'Tourism',
                'popularity' => 70,
                'is_featured' => false,
                'ticket_url' => 'https://example.com/luxury-tour'
            ],
            [
                'title' => '8th PediaForum',
                'description' => 'A forum focusing on pediatric healthcare advancements, featuring workshops, lectures, and networking opportunities for healthcare professionals.',
                'starts_at' => Carbon::create(2025, 9, 10, 9, 0),
                'ends_at' => Carbon::create(2025, 9, 13, 17, 0),
                'location' => 'Continental Hotel, Hurghada',
                'latitude' => 27.2574,
                'longitude' => 33.8129,
                'category' => 'Conference',
                'popularity' => 60,
                'is_featured' => false,
                'ticket_url' => 'https://example.com/pediaforum'
            ],
            [
                'title' => 'Red Sea Liveaboard Diving',
                'description' => 'A liveaboard diving experience exploring the Red Sea\'s diverse marine life and coral reefs with professional guides.',
                'starts_at' => Carbon::create(2025, 9, 12, 8, 0),
                'ends_at' => Carbon::create(2025, 9, 15, 18, 0),
                'location' => 'Hurghada Marina',
                'latitude' => 27.2574,
                'longitude' => 33.8129,
                'category' => 'Diving',
                'popularity' => 90,
                'is_featured' => true,
                'ticket_url' => 'https://example.com/liveaboard'
            ],
            [
                'title' => 'She Sets Sail',
                'description' => 'A sailing event designed for women, offering sailing lessons, excursions, and empowerment through water sports.',
                'starts_at' => Carbon::create(2025, 9, 20, 9, 0),
                'ends_at' => Carbon::create(2025, 9, 26, 17, 0),
                'location' => 'Hurghada Marina',
                'latitude' => 27.2574,
                'longitude' => 33.8129,
                'category' => 'Sailing',
                'popularity' => 75,
                'is_featured' => true,
                'ticket_url' => 'https://example.com/she-sets-sail'
            ],
            [
                'title' => 'Dolphin Safari Tour',
                'description' => 'A two-day safari tour offering participants the opportunity to observe and swim with dolphins in their natural habitat.',
                'starts_at' => Carbon::create(2025, 9, 25, 7, 0),
                'ends_at' => Carbon::create(2025, 9, 26, 18, 0),
                'location' => 'Red Sea Coast',
                'latitude' => 27.2574,
                'longitude' => 33.8129,
                'category' => 'Wildlife',
                'popularity' => 80,
                'is_featured' => false,
                'ticket_url' => 'https://example.com/dolphin-safari'
            ],
            [
                'title' => 'Mango Riders Surfing Week',
                'description' => 'A week-long surfing event focusing on water sports activities, suitable for both beginners and experienced surfers.',
                'starts_at' => Carbon::create(2025, 9, 7, 8, 0),
                'ends_at' => Carbon::create(2025, 9, 14, 18, 0),
                'location' => 'Surfmotion Beach, Hurghada',
                'latitude' => 27.2574,
                'longitude' => 33.8129,
                'category' => 'Surfing',
                'popularity' => 70,
                'is_featured' => false,
                'ticket_url' => 'https://example.com/mango-riders'
            ],
            [
                'title' => 'Autumn Party at Sindbad Club',
                'description' => 'An autumn party featuring live music, entertainment, local cuisine, and traditional Egyptian performances.',
                'starts_at' => Carbon::create(2025, 9, 19, 20, 0),
                'ends_at' => Carbon::create(2025, 9, 20, 2, 0),
                'location' => 'Sindbad Club, Hurghada',
                'latitude' => 27.2574,
                'longitude' => 33.8129,
                'category' => 'Entertainment',
                'popularity' => 65,
                'is_featured' => false,
                'ticket_url' => 'https://example.com/sindbad-party'
            ],
            [
                'title' => 'Topika 15th Anniversary Celebration',
                'description' => 'An event celebrating the 15th anniversary of Topika, featuring various activities, performances, and cultural showcases.',
                'starts_at' => Carbon::create(2025, 9, 29, 18, 0),
                'ends_at' => Carbon::create(2025, 10, 6, 22, 0),
                'location' => 'Hurghada City Center',
                'latitude' => 27.2574,
                'longitude' => 33.8129,
                'category' => 'Cultural',
                'popularity' => 85,
                'is_featured' => true,
                'ticket_url' => 'https://example.com/topika-anniversary'
            ],
            [
                'title' => 'Daily Boat Diving Tours',
                'description' => 'Daily boat diving tours catering to divers of all experience levels, exploring the beautiful Red Sea coral reefs.',
                'starts_at' => Carbon::create(2025, 9, 17, 8, 0),
                'ends_at' => Carbon::create(2025, 9, 24, 17, 0),
                'location' => 'Hurghada Marina',
                'latitude' => 27.2574,
                'longitude' => 33.8129,
                'category' => 'Diving',
                'popularity' => 75,
                'is_featured' => false,
                'ticket_url' => 'https://example.com/daily-diving'
            ],
            // Regular Activities and Attractions
            [
                'title' => 'Desert Safari Adventure',
                'description' => 'Experience the beauty of the Egyptian desert with quad biking, camel riding, and traditional Bedouin dinner under the stars.',
                'starts_at' => Carbon::create(2025, 10, 1, 14, 0),
                'ends_at' => Carbon::create(2025, 10, 1, 22, 0),
                'location' => 'Eastern Desert, Hurghada',
                'latitude' => 27.2574,
                'longitude' => 33.8129,
                'category' => 'Adventure',
                'popularity' => 90,
                'is_featured' => true,
                'ticket_url' => 'https://example.com/desert-safari'
            ],
            [
                'title' => 'Snorkeling Paradise Tour',
                'description' => 'Discover the underwater world of the Red Sea with guided snorkeling tours to the most beautiful coral reefs.',
                'starts_at' => Carbon::create(2025, 10, 5, 9, 0),
                'ends_at' => Carbon::create(2025, 10, 5, 16, 0),
                'location' => 'Giftun Island',
                'latitude' => 27.2574,
                'longitude' => 33.8129,
                'category' => 'Snorkeling',
                'popularity' => 85,
                'is_featured' => false,
                'ticket_url' => 'https://example.com/snorkeling-tour'
            ],
            [
                'title' => 'Hurghada Cultural Night',
                'description' => 'Immerse yourself in Egyptian culture with traditional music, dance performances, and authentic local cuisine.',
                'starts_at' => Carbon::create(2025, 10, 8, 19, 0),
                'ends_at' => Carbon::create(2025, 10, 8, 23, 0),
                'location' => 'Hurghada Cultural Center',
                'latitude' => 27.2574,
                'longitude' => 33.8129,
                'category' => 'Cultural',
                'popularity' => 70,
                'is_featured' => false,
                'ticket_url' => 'https://example.com/cultural-night'
            ],
            [
                'title' => 'Sunset Sailing Cruise',
                'description' => 'Enjoy a romantic sunset sailing cruise along the Red Sea coast with dinner and live entertainment.',
                'starts_at' => Carbon::create(2025, 10, 12, 17, 0),
                'ends_at' => Carbon::create(2025, 10, 12, 21, 0),
                'location' => 'Hurghada Marina',
                'latitude' => 27.2574,
                'longitude' => 33.8129,
                'category' => 'Sailing',
                'popularity' => 80,
                'is_featured' => true,
                'ticket_url' => 'https://example.com/sunset-cruise'
            ],
            [
                'title' => 'Fishing Adventure Trip',
                'description' => 'Join experienced fishermen for a deep-sea fishing adventure in the Red Sea waters.',
                'starts_at' => Carbon::create(2025, 10, 15, 6, 0),
                'ends_at' => Carbon::create(2025, 10, 15, 14, 0),
                'location' => 'Red Sea Fishing Grounds',
                'latitude' => 27.2574,
                'longitude' => 33.8129,
                'category' => 'Fishing',
                'popularity' => 65,
                'is_featured' => false,
                'ticket_url' => 'https://example.com/fishing-trip'
            ],
            [
                'title' => 'Hurghada Food Festival',
                'description' => 'Taste the best of Egyptian cuisine and international dishes at the annual Hurghada Food Festival.',
                'starts_at' => Carbon::create(2025, 10, 20, 12, 0),
                'ends_at' => Carbon::create(2025, 10, 22, 22, 0),
                'location' => 'Hurghada Marina Promenade',
                'latitude' => 27.2574,
                'longitude' => 33.8129,
                'category' => 'Food',
                'popularity' => 75,
                'is_featured' => false,
                'ticket_url' => 'https://example.com/food-festival'
            ],
            [
                'title' => 'Kite Surfing Championship',
                'description' => 'Watch professional kite surfers compete in the annual Red Sea Kite Surfing Championship.',
                'starts_at' => Carbon::create(2025, 10, 25, 10, 0),
                'ends_at' => Carbon::create(2025, 10, 27, 18, 0),
                'location' => 'Hurghada Beach',
                'latitude' => 27.2574,
                'longitude' => 33.8129,
                'category' => 'Sports',
                'popularity' => 85,
                'is_featured' => true,
                'ticket_url' => 'https://example.com/kite-surfing'
            ],
            [
                'title' => 'Bedouin Village Experience',
                'description' => 'Visit a traditional Bedouin village, learn about their culture, and enjoy authentic hospitality.',
                'starts_at' => Carbon::create(2025, 11, 2, 15, 0),
                'ends_at' => Carbon::create(2025, 11, 2, 21, 0),
                'location' => 'Bedouin Village, Desert',
                'latitude' => 27.2574,
                'longitude' => 33.8129,
                'category' => 'Cultural',
                'popularity' => 70,
                'is_featured' => false,
                'ticket_url' => 'https://example.com/bedouin-village'
            ],
            [
                'title' => 'Hurghada Marina Festival',
                'description' => 'Celebrate the beauty of Hurghada Marina with live music, water sports demonstrations, and local vendors.',
                'starts_at' => Carbon::create(2025, 11, 8, 16, 0),
                'ends_at' => Carbon::create(2025, 11, 10, 22, 0),
                'location' => 'Hurghada Marina',
                'latitude' => 27.2574,
                'longitude' => 33.8129,
                'category' => 'Festival',
                'popularity' => 80,
                'is_featured' => true,
                'ticket_url' => 'https://example.com/marina-festival'
            ],
            [
                'title' => 'Red Sea Photography Workshop',
                'description' => 'Learn underwater and landscape photography techniques in the stunning Red Sea environment.',
                'starts_at' => Carbon::create(2025, 11, 15, 9, 0),
                'ends_at' => Carbon::create(2025, 11, 17, 17, 0),
                'location' => 'Hurghada Photography Center',
                'latitude' => 27.2574,
                'longitude' => 33.8129,
                'category' => 'Workshop',
                'popularity' => 60,
                'is_featured' => false,
                'ticket_url' => 'https://example.com/photography-workshop'
            ]
        ];

        foreach ($events as $eventData) {
            Event::create($eventData);
        }
    }
}
