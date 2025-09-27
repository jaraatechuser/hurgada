<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use App\Models\Event;
use App\Models\Blog;
use App\Models\ForumThread;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        // Static pages
        $staticPages = [
            ['url' => url('/'), 'priority' => '1.0', 'changefreq' => 'daily'],
            ['url' => url('/about'), 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['url' => url('/contact'), 'priority' => '0.7', 'changefreq' => 'monthly'],
            ['url' => url('/gallery'), 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['url' => url('/attractions'), 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['url' => url('/events'), 'priority' => '0.9', 'changefreq' => 'daily'],
            ['url' => url('/blog'), 'priority' => '0.8', 'changefreq' => 'daily'],
            ['url' => url('/forum'), 'priority' => '0.7', 'changefreq' => 'daily'],
            ['url' => url('/privacy-policy'), 'priority' => '0.3', 'changefreq' => 'yearly'],
            ['url' => url('/terms-of-use'), 'priority' => '0.3', 'changefreq' => 'yearly'],
        ];

        foreach ($staticPages as $page) {
            $sitemap .= $this->generateUrlTag($page['url'], now()->format('Y-m-d'), $page['changefreq'], $page['priority']);
        }

        // Attractions
        $attractions = Attraction::where('is_featured', true)->get();
        foreach ($attractions as $attraction) {
            $sitemap .= $this->generateUrlTag(
                url("/attractions/{$attraction->slug}"),
                $attraction->updated_at->format('Y-m-d'),
                'weekly',
                '0.8'
            );
        }

        // Events
        $events = Event::where('is_featured', true)->get();
        foreach ($events as $event) {
            $sitemap .= $this->generateUrlTag(
                url("/events/{$event->slug}"),
                $event->updated_at->format('Y-m-d'),
                'daily',
                '0.8'
            );
        }

        // Blog posts
        $blogs = Blog::where('status', 'published')->get();
        foreach ($blogs as $blog) {
            $sitemap .= $this->generateUrlTag(
                url("/blog/{$blog->slug}"),
                $blog->updated_at->format('Y-m-d'),
                'weekly',
                '0.7'
            );
        }

        // Forum threads
        $threads = ForumThread::latest()->limit(100)->get();
        foreach ($threads as $thread) {
            $sitemap .= $this->generateUrlTag(
                url("/forum/{$thread->slug}"),
                $thread->updated_at->format('Y-m-d'),
                'daily',
                '0.6'
            );
        }

        $sitemap .= '</urlset>';

        return response($sitemap, 200, [
            'Content-Type' => 'application/xml'
        ]);
    }

    private function generateUrlTag(string $url, string $lastmod, string $changefreq, string $priority): string
    {
        return "
    <url>
        <loc>{$url}</loc>
        <lastmod>{$lastmod}</lastmod>
        <changefreq>{$changefreq}</changefreq>
        <priority>{$priority}</priority>
    </url>";
    }
}
