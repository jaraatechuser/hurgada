<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class BlogSeeder extends Seeder
{
    public function run()
    {
        $articles = [
            [
                'title' => 'Hurghada Beaches',
                'content' => "Hurghada’s beaches stretch along the Red Sea with soft golden sand and calm turquoise waters. Resorts offer private sections while public beaches welcome families and travelers who enjoy a lively atmosphere.\n\nVisitors come here for swimming, snorkeling, and endless sunshine. The coastline is also a hub for water sports, making it one of the most attractive seaside destinations in Egypt.",
            ],
            [
                'title' => 'Arabic Culture and Traditions',
                'content' => "Arabic culture is deeply rooted in traditions of hospitality, music, and art. In Egypt, these traditions are passed from one generation to another, creating a strong sense of identity and belonging.\n\nFestivals, family gatherings, and daily rituals reflect values of respect and generosity. Travelers often find that being welcomed into an Arabic home is as memorable as the sites they visit.",
            ],
            [
                'title' => 'Arabic Architecture Wonders',
                'content' => "Arabic architecture blends functionality with beauty, characterized by domes, arches, minarets, and geometric patterns. Mosques and palaces reveal careful attention to harmony and balance.\n\nCourtyards and water fountains are common features, providing both cooling and tranquility. This architectural style continues to inspire modern designs across the Arab world.",
            ],
            [
                'title' => 'Arabic Music Festivals',
                'content' => "Arabic music festivals bring together traditional instruments like the oud and darbuka with modern performers. They celebrate centuries-old rhythms while introducing new styles to global audiences.\n\nIn Egypt, these festivals often take place under open skies, filling the air with energy, dance, and a sense of community.",
            ],
            [
                'title' => 'Traditional Arabic Dances',
                'content' => "Arabic dances are colorful expressions of joy, often performed at weddings, festivals, and cultural events. Belly dancing is the most famous, but folk dances also play an important role in community life.\n\nWith their rhythmic movements and vibrant costumes, these dances tell stories and connect audiences to heritage in a lively way.",
            ],
            [
                'title' => 'Red Sea Adventures',
                'content' => "The Red Sea is a paradise for adventurers, offering scuba diving, sailing, and windsurfing. Its warm waters are home to vibrant marine life that fascinates travelers.\n\nMany visitors combine sea adventures with desert safaris, experiencing both the water’s richness and the golden silence of the Eastern Desert.",
            ],
            [
                'title' => 'Snorkeling Spots in Hurghada',
                'content' => "Hurghada is world-famous for snorkeling, with reefs accessible right off the coast. The Giftun Islands and Makadi Bay are among the most popular spots.\n\nSnorkelers are rewarded with colorful coral gardens and fish that thrive in shallow waters, making it an easy yet unforgettable adventure.",
            ],
            [
                'title' => 'Red Sea Fishes and Marine Life',
                'content' => "The Red Sea shelters an extraordinary variety of fish, from angelfish and parrotfish to dolphins and sea turtles. Many species are unique to this region, making it a biological treasure.\n\nDivers and snorkelers often describe the marine life as entering another world filled with color and movement.",
            ],
            [
                'title' => 'Hurghada Nightlife',
                'content' => "As the sun sets, Hurghada lights up with nightlife along its marinas and beaches. Clubs, cafes, and open-air venues offer music and dancing.\n\nVisitors can enjoy quiet seaside lounges or vibrant party scenes, depending on their mood, making Hurghada as lively at night as it is by day.",
            ],
            [
                'title' => 'Desert Safari Experiences',
                'content' => "Hurghada is not just about the sea—its desert offers unforgettable safari adventures. Jeep tours and camel rides bring travelers deep into sandy landscapes.\n\nEvenings often include Bedouin meals and traditional tea, followed by stargazing in skies unspoiled by city lights.",
            ],
            [
                'title' => 'Local Cuisine in Hurghada',
                'content' => "Hurghada’s cuisine reflects both the sea and Arabic traditions. Freshly grilled fish, spicy rice, and mezze are staples of local dining.\n\nMarkets and seaside restaurants serve dishes rich in flavor, allowing visitors to taste both authenticity and creativity in every meal.",
            ],
            [
                'title' => 'Diving in the Red Sea',
                'content' => "Diving in the Red Sea is a world-class experience thanks to its visibility and biodiversity. Sites like Abu Ramada and Fanadir attract divers from all over the world.\n\nWreck dives and coral walls create variety for beginners and professionals alike, each dive revealing something new.",
            ],
            [
                'title' => 'Historical Sites in Egypt',
                'content' => "Egypt’s historical sites are unmatched, from pyramids and temples to Islamic mosques and Coptic churches. Each monument reflects centuries of cultural evolution.\n\nHurghada often serves as a base for excursions to Luxor or Cairo, where travelers explore the country’s ancient treasures.",
            ],
            [
                'title' => 'Arabic Calligraphy',
                'content' => "Arabic calligraphy is both art and language, transforming letters into beautiful patterns. It decorates mosques, manuscripts, and textiles with meaning and elegance.\n\nThe flowing lines symbolize spirituality and creativity, linking the written word with cultural expression.",
            ],
            [
                'title' => 'Hurghada Resorts and Hotels',
                'content' => "Resorts in Hurghada range from budget-friendly stays to luxurious five-star hotels. Many offer private beaches, spas, and direct access to marine excursions.\n\nThey are designed to combine comfort with adventure, making every stay both relaxing and exciting.",
            ],
            [
                'title' => 'Cultural Events in Red Sea',
                'content' => "The Red Sea region hosts festivals, fairs, and concerts that highlight local traditions. Performances feature music, dance, and art that celebrate community life.\n\nTourists often join these events, enjoying a blend of entertainment and cultural immersion.",
            ],
            [
                'title' => 'Music and Dance Performances',
                'content' => "Evenings in Hurghada often feature shows combining Arabic music with traditional dances. The rhythm of drums and the sound of the oud create a captivating atmosphere.\n\nThese performances connect audiences to the heart of Egyptian culture, leaving lasting impressions.",
            ],
            [
                'title' => 'Sea Life Photography',
                'content' => "The Red Sea is a paradise for photographers who love underwater life. Its clear waters allow vivid images of corals, fish, and marine mammals.\n\nEvery dive presents a chance to capture scenes that feel like natural works of art.",
            ],
            [
                'title' => 'Marine Conservation in Red Sea',
                'content' => "Conservation projects aim to protect the Red Sea’s fragile coral reefs and biodiversity. Divers are encouraged to follow eco-friendly practices.\n\nPreserving this environment ensures that its beauty and richness can be enjoyed by future generations.",
            ],
            [
                'title' => 'Hurghada Excursions',
                'content' => "Excursions from Hurghada include island trips, snorkeling tours, and visits to nearby towns. Glass-bottom boats offer views of reefs without getting wet.\n\nEach excursion adds a layer of discovery, from the sea’s mysteries to desert traditions.",
            ],
            [
                'title' => 'Traditional Markets and Bazaars',
                'content' => "Markets in Hurghada are full of spices, crafts, and textiles that reflect local artistry. Walking through them is both a shopping trip and cultural experience.\n\nBargaining is common, and visitors often leave with souvenirs and stories to tell.",
            ],
            [
                'title' => 'Sunset Cruises',
                'content' => "Sunset cruises offer breathtaking views as the Red Sea reflects the golden sky. Travelers enjoy calm waters and cool breezes during the evening sail.\n\nIt is a peaceful and romantic way to experience the beauty of Hurghada’s coast.",
            ],
            [
                'title' => 'Coral Reef Exploration',
                'content' => "Hurghada’s coral reefs are among the richest ecosystems in the world. Divers and snorkelers marvel at colorful formations and the marine species that live there.\n\nExploring these reefs feels like stepping into another universe filled with life and wonder.",
            ],
            [
                'title' => 'Water Sports Activities',
                'content' => "Hurghada is one of Egypt’s top spots for water sports. Windsurfing, kitesurfing, and parasailing are popular thanks to the region’s steady winds and calm seas.\n\nBoth beginners and experts find conditions that challenge and inspire them.",
            ],
            [
                'title' => 'Local Festivals and Fairs',
                'content' => "Local festivals celebrate Egypt’s heritage with music, food, and dancing. They bring together both tourists and residents in colorful gatherings.\n\nThese events offer a glimpse into community traditions while creating joyful experiences for all.",
            ],
        ];

        foreach ($articles as $article) {
            DB::table('blogs')->insert([
                'user_id' => 1,
                'title' => $article['title'],
                'slug' => Str::slug($article['title']),
                'excerpt' => Str::limit($article['content'], 160),
                'content' => $article['content'],
                'status' => 'published',
                'views' => rand(50, 500),
                'tags' => json_encode(explode(' ', strtolower($article['title']))),
                'published_at' => Carbon::now()->subDays(rand(0, 30)),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
