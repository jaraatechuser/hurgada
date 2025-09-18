<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
	public function definition(): array
	{
		$title = fake()->catchPhrase().' Festival';
		$start = fake()->dateTimeBetween('-1 month', '+2 months');
		$end = (clone $start)->modify('+'.fake()->numberBetween(2, 48).' hours');
		return [
			'title' => $title,
			'slug' => str($title)->slug(),
			'description' => fake()->paragraphs(2, true),
			'starts_at' => $start,
			'ends_at' => $end,
			'location' => fake()->streetAddress(),
			'latitude' => fake()->randomFloat(7, 26.9, 27.5),
			'longitude' => fake()->randomFloat(7, 33.6, 34.0),
			'category' => fake()->randomElement(['Music','Diving','Nightlife','Food','Culture']),
			'popularity' => fake()->numberBetween(0, 1000),
			'is_featured' => fake()->boolean(20),
			'ticket_url' => fake()->url(),
		];
	}
}
