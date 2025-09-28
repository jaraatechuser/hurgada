<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = [
            [
                'name' => 'El Halaka Fish Restaurant',
                'cuisine_type' => 'Seafood',
                'description' => 'Renowned for its fresh seafood and stunning sea views. Signature dishes include grilled prawns and calamari, served in a traditional Egyptian setting with panoramic Red Sea views.',
                'address' => 'Hurghada Marina, Hurghada, Red Sea Governorate',
                'latitude' => 27.2574,
                'longitude' => 33.8129,
                'rating' => 4.5,
                'popularity' => 95,
                'is_featured' => true,
                'price_range' => '$$$',
                'specialties' => ['Grilled Prawns', 'Calamari', 'Red Sea Fish', 'Seafood Tagine'],
                'website' => 'https://elhalaka.com',
                'phone' => '+20 65 344 1234',
                'opening_hours' => [
                    'Monday' => '12:00 PM - 11:00 PM',
                    'Tuesday' => '12:00 PM - 11:00 PM',
                    'Wednesday' => '12:00 PM - 11:00 PM',
                    'Thursday' => '12:00 PM - 11:00 PM',
                    'Friday' => '12:00 PM - 12:00 AM',
                    'Saturday' => '12:00 PM - 12:00 AM',
                    'Sunday' => '12:00 PM - 11:00 PM'
                ],
                'image_url' => 'https://images.pexels.com/photos/1267320/pexels-photo-1267320.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop',
                'atmosphere' => 'Traditional Egyptian seafood restaurant with stunning marina views and authentic Red Sea atmosphere.'
            ],
            [
                'name' => 'The Grill Restaurant at The Oberoi',
                'cuisine_type' => 'International Fine Dining',
                'description' => 'Offers a luxurious dining experience with impeccable service and sophisticated ambiance. Features premium steaks, fresh seafood, and an extensive wine selection.',
                'address' => 'The Oberoi Beach Resort, Sahl Hasheesh, Hurghada',
                'latitude' => 27.2000,
                'longitude' => 33.8500,
                'rating' => 4.8,
                'popularity' => 98,
                'is_featured' => true,
                'price_range' => '$$$$',
                'specialties' => ['Wagyu Steak', 'Lobster Thermidor', 'Truffle Pasta', 'Champagne Selection'],
                'website' => 'https://oberoihotels.com',
                'phone' => '+20 65 344 5678',
                'opening_hours' => [
                    'Monday' => '7:00 PM - 11:00 PM',
                    'Tuesday' => '7:00 PM - 11:00 PM',
                    'Wednesday' => '7:00 PM - 11:00 PM',
                    'Thursday' => '7:00 PM - 11:00 PM',
                    'Friday' => '7:00 PM - 12:00 AM',
                    'Saturday' => '7:00 PM - 12:00 AM',
                    'Sunday' => '7:00 PM - 11:00 PM'
                ],
                'image_url' => 'https://images.pexels.com/photos/1414235/pexels-photo-1414235.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop',
                'atmosphere' => 'Elegant fine dining with ocean views, sophisticated decor, and world-class service.'
            ],
            [
                'name' => 'Felfela Restaurant',
                'cuisine_type' => 'Traditional Egyptian',
                'description' => 'Serves authentic Egyptian cuisine including koshari, falafel, and stuffed pigeon. A local favorite known for its traditional recipes and warm hospitality.',
                'address' => 'Sheraton Road, Hurghada, Red Sea Governorate',
                'latitude' => 27.2500,
                'longitude' => 33.8000,
                'rating' => 4.3,
                'popularity' => 88,
                'is_featured' => false,
                'price_range' => '$$',
                'specialties' => ['Koshari', 'Falafel', 'Stuffed Pigeon', 'Molokhia', 'Ful Medames'],
                'website' => null,
                'phone' => '+20 65 344 9012',
                'opening_hours' => [
                    'Monday' => '10:00 AM - 11:00 PM',
                    'Tuesday' => '10:00 AM - 11:00 PM',
                    'Wednesday' => '10:00 AM - 11:00 PM',
                    'Thursday' => '10:00 AM - 11:00 PM',
                    'Friday' => '10:00 AM - 12:00 AM',
                    'Saturday' => '10:00 AM - 12:00 AM',
                    'Sunday' => '10:00 AM - 11:00 PM'
                ],
                'image_url' => 'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80',
                'atmosphere' => 'Cozy traditional Egyptian restaurant with authentic decor and friendly local atmosphere.'
            ],
            [
                'name' => 'Little Buddha Hurghada',
                'cuisine_type' => 'Asian Fusion',
                'description' => 'A chic spot offering Asian fusion cuisine with popular items like sushi, dim sum, and creative cocktails. Modern atmosphere with stunning interior design.',
                'address' => 'Hurghada Marina, Hurghada, Red Sea Governorate',
                'latitude' => 27.2600,
                'longitude' => 33.8200,
                'rating' => 4.4,
                'popularity' => 85,
                'is_featured' => false,
                'price_range' => '$$$',
                'specialties' => ['Sushi Rolls', 'Dim Sum', 'Pad Thai', 'Asian Cocktails', 'Duck Confit'],
                'website' => 'https://littlebuddha-hurghada.com',
                'phone' => '+20 65 344 3456',
                'opening_hours' => [
                    'Monday' => '6:00 PM - 1:00 AM',
                    'Tuesday' => '6:00 PM - 1:00 AM',
                    'Wednesday' => '6:00 PM - 1:00 AM',
                    'Thursday' => '6:00 PM - 1:00 AM',
                    'Friday' => '6:00 PM - 2:00 AM',
                    'Saturday' => '6:00 PM - 2:00 AM',
                    'Sunday' => '6:00 PM - 1:00 AM'
                ],
                'image_url' => 'https://media-cdn.tripadvisor.com/media/attractions-splice-spp-720x480/10/45/3e/83.jpg?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80',
                'atmosphere' => 'Modern Asian fusion restaurant with contemporary design, ambient lighting, and trendy vibe.'
            ],
            [
                'name' => 'Starfish Restaurant',
                'cuisine_type' => 'Seafood & Mediterranean',
                'description' => 'Known for its relaxed ambiance and fresh seafood, including lobster and fish tagine. Perfect for a casual dining experience with sea views.',
                'address' => 'Beach Road, Hurghada, Red Sea Governorate',
                'latitude' => 27.2400,
                'longitude' => 33.7900,
                'rating' => 4.2,
                'popularity' => 82,
                'is_featured' => false,
                'price_range' => '$$',
                'specialties' => ['Lobster', 'Fish Tagine', 'Grilled Octopus', 'Seafood Paella', 'Mediterranean Salad'],
                'website' => null,
                'phone' => '+20 65 344 7890',
                'opening_hours' => [
                    'Monday' => '12:00 PM - 10:00 PM',
                    'Tuesday' => '12:00 PM - 10:00 PM',
                    'Wednesday' => '12:00 PM - 10:00 PM',
                    'Thursday' => '12:00 PM - 10:00 PM',
                    'Friday' => '12:00 PM - 11:00 PM',
                    'Saturday' => '12:00 PM - 11:00 PM',
                    'Sunday' => '12:00 PM - 10:00 PM'
                ],
                'image_url' => 'https://images.unsplash.com/photo-1551218808-94e220e084d2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80',
                'atmosphere' => 'Relaxed beachfront restaurant with casual dining, sea breeze, and friendly service.'
            ],
            [
                'name' => 'Papas Beach Club & Restaurant',
                'cuisine_type' => 'International & Pizza',
                'description' => 'Ideal for a laid-back dining experience with sea views, offering wood-fired pizzas, fresh cocktails, and beach club atmosphere.',
                'address' => 'Makadi Bay, Hurghada, Red Sea Governorate',
                'latitude' => 27.1800,
                'longitude' => 33.9000,
                'rating' => 4.1,
                'popularity' => 80,
                'is_featured' => false,
                'price_range' => '$$',
                'specialties' => ['Wood-fired Pizza', 'Beach Cocktails', 'Fresh Salads', 'Grilled Meats', 'Ice Cream'],
                'website' => 'https://papasbeachclub.com',
                'phone' => '+20 65 344 2345',
                'opening_hours' => [
                    'Monday' => '10:00 AM - 12:00 AM',
                    'Tuesday' => '10:00 AM - 12:00 AM',
                    'Wednesday' => '10:00 AM - 12:00 AM',
                    'Thursday' => '10:00 AM - 12:00 AM',
                    'Friday' => '10:00 AM - 1:00 AM',
                    'Saturday' => '10:00 AM - 1:00 AM',
                    'Sunday' => '10:00 AM - 12:00 AM'
                ],
                'image_url' => 'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80',
                'atmosphere' => 'Beach club vibe with relaxed dining, sea views, and fun atmosphere perfect for families.'
            ],
            [
                'name' => 'The Smokery',
                'cuisine_type' => 'European & Smoked Foods',
                'description' => 'Located at the Marriott Beach Resort, famous for smoked salmon, gourmet European dishes, and elegant dining experience.',
                'address' => 'Marriott Beach Resort, Hurghada, Red Sea Governorate',
                'latitude' => 27.2300,
                'longitude' => 33.7800,
                'rating' => 4.6,
                'popularity' => 90,
                'is_featured' => true,
                'price_range' => '$$$',
                'specialties' => ['Smoked Salmon', 'Beef Wellington', 'Truffle Risotto', 'Wine Selection', 'Artisan Cheeses'],
                'website' => 'https://marriott.com',
                'phone' => '+20 65 344 6789',
                'opening_hours' => [
                    'Monday' => '7:00 PM - 11:00 PM',
                    'Tuesday' => '7:00 PM - 11:00 PM',
                    'Wednesday' => '7:00 PM - 11:00 PM',
                    'Thursday' => '7:00 PM - 11:00 PM',
                    'Friday' => '7:00 PM - 12:00 AM',
                    'Saturday' => '7:00 PM - 12:00 AM',
                    'Sunday' => '7:00 PM - 11:00 PM'
                ],
                'image_url' => 'https://images.unsplash.com/photo-1544148103-0773bf10d330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80',
                'atmosphere' => 'Sophisticated European dining with elegant decor, professional service, and resort ambiance.'
            ],
            [
                'name' => 'Ali Baba Restaurant',
                'cuisine_type' => 'Middle Eastern',
                'description' => 'Offers generous portions and authentic Middle Eastern flavors. Known for its mezze platters, grilled meats, and traditional hospitality.',
                'address' => 'Old Town, Hurghada, Red Sea Governorate',
                'latitude' => 27.2200,
                'longitude' => 33.7700,
                'rating' => 4.0,
                'popularity' => 75,
                'is_featured' => false,
                'price_range' => '$$',
                'specialties' => ['Mezze Platter', 'Grilled Lamb', 'Hummus', 'Baba Ganoush', 'Shawarma'],
                'website' => null,
                'phone' => '+20 65 344 4567',
                'opening_hours' => [
                    'Monday' => '11:00 AM - 11:00 PM',
                    'Tuesday' => '11:00 AM - 11:00 PM',
                    'Wednesday' => '11:00 AM - 11:00 PM',
                    'Thursday' => '11:00 AM - 11:00 PM',
                    'Friday' => '11:00 AM - 12:00 AM',
                    'Saturday' => '11:00 AM - 12:00 AM',
                    'Sunday' => '11:00 AM - 11:00 PM'
                ],
                'image_url' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2b/f5/aa/48/come-join-the-fun-at.jpg?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80',
                'atmosphere' => 'Traditional Middle Eastern restaurant with authentic decor and warm, welcoming atmosphere.'
            ],
            [
                'name' => 'La Casa Nostra',
                'cuisine_type' => 'Italian',
                'description' => 'A cozy setting for Italian cuisine, featuring delicious pasta, risotto, and wood-fired pizzas. Authentic Italian recipes with fresh ingredients.',
                'address' => 'Sheraton Road, Hurghada, Red Sea Governorate',
                'latitude' => 27.2450,
                'longitude' => 33.7950,
                'rating' => 4.3,
                'popularity' => 83,
                'is_featured' => false,
                'price_range' => '$$',
                'specialties' => ['Wood-fired Pizza', 'Homemade Pasta', 'Risotto', 'Tiramisu', 'Italian Wine'],
                'website' => 'https://lacasanostra-hurghada.com',
                'phone' => '+20 65 344 8901',
                'opening_hours' => [
                    'Monday' => '12:00 PM - 11:00 PM',
                    'Tuesday' => '12:00 PM - 11:00 PM',
                    'Wednesday' => '12:00 PM - 11:00 PM',
                    'Thursday' => '12:00 PM - 11:00 PM',
                    'Friday' => '12:00 PM - 12:00 AM',
                    'Saturday' => '12:00 PM - 12:00 AM',
                    'Sunday' => '12:00 PM - 11:00 PM'
                ],
                'image_url' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/11/cf/ac/bc/outdoor3.jpg?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80',
                'atmosphere' => 'Cozy Italian trattoria with warm lighting, rustic decor, and authentic Italian ambiance.'
            ],
            [
                'name' => 'El Bahr Seafood Restaurant',
                'cuisine_type' => 'Greek & Seafood',
                'description' => 'Serves freshly caught seafood in a Greek-style taverna setting with indoor and outdoor seating. Known for its octopus and grilled fish.',
                'address' => 'Hurghada Marina, Hurghada, Red Sea Governorate',
                'latitude' => 27.2550,
                'longitude' => 33.8150,
                'rating' => 4.2,
                'popularity' => 78,
                'is_featured' => false,
                'price_range' => '$$',
                'specialties' => ['Grilled Octopus', 'Greek Salad', 'Fresh Fish', 'Tzatziki', 'Ouzo'],
                'website' => null,
                'phone' => '+20 65 344 5678',
                'opening_hours' => [
                    'Monday' => '12:00 PM - 10:00 PM',
                    'Tuesday' => '12:00 PM - 10:00 PM',
                    'Wednesday' => '12:00 PM - 10:00 PM',
                    'Thursday' => '12:00 PM - 10:00 PM',
                    'Friday' => '12:00 PM - 11:00 PM',
                    'Saturday' => '12:00 PM - 11:00 PM',
                    'Sunday' => '12:00 PM - 10:00 PM'
                ],
                'image_url' => 'https://images.unsplash.com/photo-1559339352-11d035aa65de?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80',
                'atmosphere' => 'Greek taverna style with blue and white decor, sea views, and relaxed Mediterranean vibe.'
            ],
            [
                'name' => 'The Heaven',
                'cuisine_type' => 'Mediterranean & European',
                'description' => 'Located in the New Marina, offering Mediterranean and European cuisine with waterfront views and elegant dining experience.',
                'address' => 'New Marina, Hurghada, Red Sea Governorate',
                'latitude' => 27.2700,
                'longitude' => 33.8300,
                'rating' => 4.4,
                'popularity' => 86,
                'is_featured' => false,
                'price_range' => '$$$',
                'specialties' => ['Mediterranean Platter', 'Grilled Sea Bass', 'Pasta Carbonara', 'Chocolate Soufflé', 'Wine Pairing'],
                'website' => 'https://theheaven-hurghada.com',
                'phone' => '+20 65 344 1234',
                'opening_hours' => [
                    'Monday' => '6:00 PM - 11:00 PM',
                    'Tuesday' => '6:00 PM - 11:00 PM',
                    'Wednesday' => '6:00 PM - 11:00 PM',
                    'Thursday' => '6:00 PM - 11:00 PM',
                    'Friday' => '6:00 PM - 12:00 AM',
                    'Saturday' => '6:00 PM - 12:00 AM',
                    'Sunday' => '6:00 PM - 11:00 PM'
                ],
                'image_url' => 'https://images.pexels.com/photos/1267320/pexels-photo-1267320.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop',
                'atmosphere' => 'Elegant waterfront dining with marina views, sophisticated decor, and romantic ambiance.'
            ],
            [
                'name' => 'Moby Dick',
                'cuisine_type' => 'International & Egyptian',
                'description' => 'A family-friendly restaurant offering a mix of international and Egyptian cuisine, known for its welcoming atmosphere and diverse menu.',
                'address' => 'Beach Road, Hurghada, Red Sea Governorate',
                'latitude' => 27.2350,
                'longitude' => 33.7850,
                'rating' => 4.0,
                'popularity' => 72,
                'is_featured' => false,
                'price_range' => '$$',
                'specialties' => ['Mixed Grill', 'Fish & Chips', 'Egyptian Kebab', 'Fresh Juices', 'Ice Cream'],
                'website' => null,
                'phone' => '+20 65 344 3456',
                'opening_hours' => [
                    'Monday' => '10:00 AM - 11:00 PM',
                    'Tuesday' => '10:00 AM - 11:00 PM',
                    'Wednesday' => '10:00 AM - 11:00 PM',
                    'Thursday' => '10:00 AM - 11:00 PM',
                    'Friday' => '10:00 AM - 12:00 AM',
                    'Saturday' => '10:00 AM - 12:00 AM',
                    'Sunday' => '10:00 AM - 11:00 PM'
                ],
                'image_url' => 'https://blogs.realestate.gov.eg/wp-content/uploads/2024/09/Moby-Dick-Hurghada-Egypt7.png?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop',
                'atmosphere' => 'Family-friendly restaurant with casual dining, kids menu, and welcoming atmosphere.'
            ],
            [
                'name' => 'El Mina',
                'cuisine_type' => 'Traditional Egyptian',
                'description' => 'A hidden gem serving traditional Egyptian dishes at local prices. Authentic flavors and recipes passed down through generations.',
                'address' => 'Old Town, Hurghada, Red Sea Governorate',
                'latitude' => 27.2150,
                'longitude' => 33.7650,
                'rating' => 4.1,
                'popularity' => 70,
                'is_featured' => false,
                'price_range' => '$',
                'specialties' => ['Ful Medames', 'Taameya', 'Koshari', 'Molokhia', 'Egyptian Tea'],
                'website' => null,
                'phone' => '+20 65 344 7890',
                'opening_hours' => [
                    'Monday' => '8:00 AM - 10:00 PM',
                    'Tuesday' => '8:00 AM - 10:00 PM',
                    'Wednesday' => '8:00 AM - 10:00 PM',
                    'Thursday' => '8:00 AM - 10:00 PM',
                    'Friday' => '8:00 AM - 11:00 PM',
                    'Saturday' => '8:00 AM - 11:00 PM',
                    'Sunday' => '8:00 AM - 10:00 PM'
                ],
                'image_url' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2a/7e/7a/0f/caption.jpg?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop',
                'atmosphere' => 'Local Egyptian eatery with authentic atmosphere, traditional decor, and friendly local service.'
            ],
            [
                'name' => 'Gad Restaurant',
                'cuisine_type' => 'Egyptian Fast Food',
                'description' => 'A popular chain in Egypt offering koshari, falafel, grilled meats, and fresh juices. Quick service and authentic Egyptian street food.',
                'address' => 'Sheraton Road, Hurghada, Red Sea Governorate',
                'latitude' => 27.2400,
                'longitude' => 33.7900,
                'rating' => 3.9,
                'popularity' => 68,
                'is_featured' => false,
                'price_range' => '$',
                'specialties' => ['Koshari', 'Falafel', 'Grilled Chicken', 'Fresh Juices', 'Egyptian Bread'],
                'website' => 'https://gad-restaurant.com',
                'phone' => '+20 65 344 2345',
                'opening_hours' => [
                    'Monday' => '24 Hours',
                    'Tuesday' => '24 Hours',
                    'Wednesday' => '24 Hours',
                    'Thursday' => '24 Hours',
                    'Friday' => '24 Hours',
                    'Saturday' => '24 Hours',
                    'Sunday' => '24 Hours'
                ],
                'image_url' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/04/45/ec/7c/entrance-to-take-away.jpg?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop',
                'atmosphere' => 'Fast-food style Egyptian restaurant with quick service, casual dining, and authentic local flavors.'
            ]
        ];

        foreach ($restaurants as $restaurantData) {
            Restaurant::create($restaurantData);
        }
    }
}