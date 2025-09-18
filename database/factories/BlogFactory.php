<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
	public function definition(): array
	{
		$title = fake()->sentence(5);
		return [
			'user_id' => 1,
			'title' => $title,
			'slug' => str($title)->slug(),
			'excerpt' => fake()->sentences(2, true),
			'content' => fake()->paragraphs(5, true),
			'status' => 'published',
			'views' => fake()->numberBetween(0, 5000),
			'tags' => [fake()->word(), fake()->word()],
			'published_at' => now()->subDays(fake()->numberBetween(0, 30)),
		];
	}
}
