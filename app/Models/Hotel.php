<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Hotel extends Model
{
	/** @use HasFactory<\\Database\\Factories\\HotelFactory> */
	use HasFactory;

	protected $fillable = [
		'name', 'slug', 'category', 'description', 'address', 'latitude', 'longitude',
		'rating', 'popularity', 'is_featured', 'price_range', 'amenities', 'website', 'phone',
		'stars', 'check_in_time', 'check_out_time', 'image_url'
	];

	protected $casts = [
		'is_featured' => 'boolean',
		'amenities' => 'array',
		'latitude' => 'decimal:7',
		'longitude' => 'decimal:7',
		'rating' => 'decimal:2',
		'stars' => 'integer',
	];

	public function comments(): MorphMany
	{
		return $this->morphMany(Comment::class, 'commentable')->latest();
	}

	protected static function booted(): void
	{
		static::creating(function (Hotel $model) {
			if (empty($model->slug) && !empty($model->name)) {
				$model->slug = str( $model->name )->slug()->toString();
			}
		});
	}
}