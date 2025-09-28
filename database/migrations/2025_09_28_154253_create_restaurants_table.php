<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('cuisine_type');
            $table->text('description');
            $table->string('address');
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->decimal('rating', 3, 2)->default(0);
            $table->integer('popularity')->default(0);
            $table->boolean('is_featured')->default(false);
            $table->string('price_range');
            $table->json('specialties')->nullable();
            $table->string('website')->nullable();
            $table->string('phone')->nullable();
            $table->json('opening_hours')->nullable();
            $table->string('image_url')->nullable();
            $table->string('atmosphere')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};
