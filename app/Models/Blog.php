<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Blog extends Model
{
	/** @use HasFactory<\\Database\\Factories\\BlogFactory> */
	use HasFactory;

	protected $fillable = [
		'user_id','title','slug','excerpt','content','status','views','tags','published_at'
	];

	protected $casts = [
		'tags' => 'array',
		'published_at' => 'datetime',
	];

	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}

	public function comments(): MorphMany
	{
		return $this->morphMany(Comment::class, 'commentable')->latest();
	}

	protected static function booted(): void
	{
		static::creating(function (Blog $model) {
			if (empty($model->slug) && !empty($model->title)) {
				$model->slug = str($model->title)->slug()->toString();
			}
		});
	}
}
