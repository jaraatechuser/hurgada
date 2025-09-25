<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Event;
use App\Models\Favorite;
use App\Models\ForumPost;
use App\Models\ForumThread;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request): View
    {
        $user = Auth::user();

        $favorites = Favorite::with('favoritable')
            ->where('user_id', $user->id)
            ->latest()
            ->take(8)
            ->get();

        // Gather recent comments (on attractions/events/blogs)
        $modelComments = Comment::with('commentable')
            ->where('user_id', $user->id)
            ->latest()
            ->take(10)
            ->get()
            ->map(function (Comment $c) {
                $target = $c->commentable;
                $url = '#';
                $label = 'Comment';
                if ($target instanceof Attraction) {
                    $url = route('attractions.show', $target);
                    $label = 'Attraction comment';
                } elseif ($target instanceof Event) {
                    $url = route('events.show', $target);
                    $label = 'Event comment';
                } elseif ($target instanceof Blog) {
                    $url = route('blog.show', $target);
                    $label = 'Blog comment';
                }
                return [
                    'type' => 'comment',
                    'label' => $label,
                    'content' => $c->content,
                    'created_at' => $c->created_at,
                    'url' => $url,
                ];
            });

        // Gather recent forum replies
        $forumReplies = ForumPost::with('thread')
            ->where('user_id', $user->id)
            ->latest()
            ->take(10)
            ->get()
            ->map(function (ForumPost $p) {
                $thread = $p->thread;
                $url = $thread ? route('forum.show', $thread->slug) : route('forum.index');
                return [
                    'type' => 'forum',
                    'label' => 'Forum reply',
                    'content' => $p->body,
                    'created_at' => $p->created_at,
                    'url' => $url,
                ];
            });

        $recentComments = $modelComments
            ->merge($forumReplies)
            ->sortByDesc('created_at')
            ->take(6)
            ->values();

        $upcomingEvents = Event::query()
            ->where('starts_at', '>=', now())
            ->orderBy('starts_at')
            ->take(6)
            ->get();

        $suggestedAttractions = Attraction::query()
            ->orderByDesc('popularity')
            ->take(6)
            ->get();

        $suggestedBlogs = Blog::query()
            ->orderByDesc('published_at')
            ->take(6)
            ->get();

        // Moodboard: pick a curated set of images from public galleries
        $moodboardImages = collect(glob(public_path('galleries/thumbnails/*.jpg')))
            ->take(8)
            ->map(function (string $path) {
                $relative = str_replace(public_path() . '/', '', $path);
                return '/' . $relative;
            });

        return view('dashboard', compact(
            'user',
            'favorites',
            'recentComments',
            'upcomingEvents',
            'suggestedAttractions',
            'suggestedBlogs',
            'moodboardImages'
        ));
    }
}


