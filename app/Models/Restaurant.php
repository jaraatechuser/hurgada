<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Restaurant extends Model
{
	/** @use HasFactory<\\Database\\Factories\\RestaurantFactory> */
	use HasFactory;

	protected $fillable = [
		'name', 'slug', 'cuisine_type', 'description', 'address', 'latitude', 'longitude',
		'rating', 'popularity', 'is_featured', 'price_range', 'specialties', 'website', 'phone',
		'opening_hours', 'image_url', 'atmosphere'
	];

	protected $casts = [
		'is_featured' => 'boolean',
		'specialties' => 'array',
		'latitude' => 'decimal:7',
		'longitude' => 'decimal:7',
		'rating' => 'decimal:2',
		'opening_hours' => 'array',
	];

	public function comments(): MorphMany
	{
		return $this->morphMany(Comment::class, 'commentable')->latest();
	}

	protected static function booted(): void
	{
		static::creating(function (Restaurant $model) {
			if (empty($model->slug) && !empty($model->name)) {
				$model->slug = str( $model->name )->slug()->toString();
			}
		});
	}
}
