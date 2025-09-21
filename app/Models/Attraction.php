<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Attraction extends Model
{
	/** @use HasFactory<\\Database\\Factories\\AttractionFactory> */
	use HasFactory;

	protected $fillable = [
		'name', 'slug', 'category', 'description', 'address', 'latitude', 'longitude',
		'rating', 'popularity', 'is_featured', 'price_range', 'open_hours', 'website', 'phone',
	];

	protected $casts = [
		'is_featured' => 'boolean',
		'open_hours' => 'array',
		'latitude' => 'decimal:7',
		'longitude' => 'decimal:7',
		'rating' => 'decimal:2',
	];

	public function comments(): MorphMany
	{
		return $this->morphMany(Comment::class, 'commentable')->latest();
	}

	protected static function booted(): void
	{
		static::creating(function (Attraction $model) {
			if (empty($model->slug) && !empty($model->name)) {
				$model->slug = str( $model->name )->slug()->toString();
			}
		});
	}
}
