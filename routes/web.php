<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AttractionController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\SitemapController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('/terms-of-use', [PageController::class, 'termsOfUse'])->name('terms.use');

// SEO Routes
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

// Forum
Route::get('/forum', [ForumController::class, 'index'])->name('forum.index');
Route::get('/forum/create', [ForumController::class, 'createThread'])->name('forum.create');
Route::post('/forum', [ForumController::class, 'storeThread'])->name('forum.store');
Route::get('/forum/{slug}', [ForumController::class, 'show'])->name('forum.show');
Route::post('/forum/{slug}', [ForumController::class, 'storePost'])->name('forum.post');
Route::middleware('auth')->group(function () {
    Route::get('/forum/{slug}/edit', [ForumController::class, 'editThread'])->name('forum.edit');
    Route::patch('/forum/{slug}', [ForumController::class, 'updateThread'])->name('forum.update');
    Route::delete('/forum/{slug}', [ForumController::class, 'destroyThread'])->name('forum.destroy');
    Route::delete('/forum/{slug}/posts/{postId}', [ForumController::class, 'destroyPost'])->name('forum.post.destroy');
});

Route::resource('attractions', AttractionController::class)->only(['index','show']);
Route::resource('events', EventController::class)->only(['index','show']);
Route::resource('blog', BlogController::class)->only(['index','show']);
Route::resource('hotels', HotelsController::class)->only(['index','show']);

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Fallback route for 404 errors
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
