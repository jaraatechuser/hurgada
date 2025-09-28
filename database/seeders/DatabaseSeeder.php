<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Attraction;
use App\Models\Event;
use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
	public function run(): void
	{
		$user = User::firstOrCreate(
			['email' => 'demo@hurghada.test'],
			['name' => 'Demo User', 'password' => Hash::make('password')]
		);

		Attraction::factory()->count(24)->create();
		Event::factory()->count(12)->create();

		$this->call(BlogSeeder::class);
		$this->call(HotelSeeder::class);
	}
}
