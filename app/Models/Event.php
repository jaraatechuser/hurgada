<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	/** @use HasFactory<\\Database\\Factories\\EventFactory> */
	use HasFactory;

	protected $fillable = [
		'title', 'slug', 'description', 'starts_at', 'ends_at', 'location', 'latitude', 'longitude', 'category', 'popularity', 'is_featured', 'ticket_url',
	];

	protected $casts = [
		'is_featured' => 'boolean',
		'starts_at' => 'datetime',
		'ends_at' => 'datetime',
		'latitude' => 'decimal:7',
		'longitude' => 'decimal:7',
	];

	protected static function booted(): void
	{
		static::creating(function (Event $model) {
			if (empty($model->slug) && !empty($model->title)) {
				$model->slug = str($model->title)->slug()->toString();
			}
		});
	}
}
