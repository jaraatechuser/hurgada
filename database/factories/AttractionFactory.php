<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Attraction>
 */
class AttractionFactory extends Factory
{
	public function definition(): array
	{
		$categories = ['Beaches','Diving','Nightlife','Shopping','Restaurants'];
		$name = fake()->unique()->streetName().' Beach';
		return [
			'name' => $name,
			'slug' => str($name)->slug(),
			'category' => fake()->randomElement($categories),
			'description' => fake()->paragraphs(2, true),
			'address' => fake()->address(),
			'latitude' => fake()->randomFloat(7, 26.9, 27.5),
			'longitude' => fake()->randomFloat(7, 33.6, 34.0),
			'rating' => fake()->randomFloat(2, 3.5, 5.0),
			'popularity' => fake()->numberBetween(0, 1000),
			'is_featured' => fake()->boolean(20),
			'price_range' => fake()->randomElement(['$', '$$', '$$$']),
			'open_hours' => [
				'mon' => '9:00-18:00', 'tue' => '9:00-18:00', 'wed' => '9:00-18:00',
				'thu' => '9:00-18:00', 'fri' => '9:00-18:00', 'sat' => '9:00-18:00', 'sun' => '10:00-16:00'
			],
			'website' => fake()->url(),
			'phone' => fake()->phoneNumber(),
		];
	}
}
