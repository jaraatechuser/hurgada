<?php

namespace Database\Factories;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hotel::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = ['Luxury Resort', 'Beach Resort', 'Boutique Hotel', 'Family Resort', 'Adults Only Resort', 'Aqua Park Resort'];
        $priceRanges = ['$$', '$$$', '$$$$'];
        $amenities = [
            'Beach Access', 'Swimming Pool', 'Spa & Wellness', 'Restaurant', 'Free WiFi', 
            'Fitness Center', 'Water Sports', 'Kids Club', 'Business Center', 'Concierge',
            'Airport Shuttle', 'Room Service', 'Laundry Service', 'Tour Desk'
        ];

        return [
            'name' => $this->faker->company() . ' Hotel & Resort',
            'category' => $this->faker->randomElement($categories),
            'description' => $this->faker->paragraphs(3, true),
            'address' => $this->faker->address(),
            'latitude' => $this->faker->latitude(27.0, 27.5),
            'longitude' => $this->faker->longitude(33.5, 34.0),
            'rating' => $this->faker->randomFloat(1, 3.0, 5.0),
            'popularity' => $this->faker->numberBetween(50, 100),
            'is_featured' => $this->faker->boolean(30),
            'price_range' => $this->faker->randomElement($priceRanges),
            'amenities' => $this->faker->randomElements($amenities, $this->faker->numberBetween(5, 10)),
            'website' => $this->faker->optional(0.7)->url(),
            'phone' => $this->faker->optional(0.8)->phoneNumber(),
            'stars' => $this->faker->numberBetween(3, 5),
            'check_in_time' => $this->faker->time('H:i'),
            'check_out_time' => $this->faker->time('H:i'),
            'image_url' => 'https://images.unsplash.com/photo-' . $this->faker->numberBetween(1500000000000, 1600000000000) . '?w=800&h=600&fit=crop',
        ];
    }
}