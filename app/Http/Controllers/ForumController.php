<?php

namespace App\Http\Controllers;

use App\Models\ForumPost;
use App\Models\ForumThread;
use App\Models\ForumCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ForumController extends Controller
{
    public function index(Request $request): View
    {
        $query = ForumThread::query()->with(['category'])->withCount('posts');

        if ($search = $request->string('q')->toString()) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('body', 'like', "%{$search}%");
            });
        }

        if ($cat = $request->string('category')->toString()) {
            $query->whereHas('category', function ($q) use ($cat) {
                $q->where('slug', $cat);
            });
        }

        $sort = $request->string('sort')->toString();
        if ($sort === 'popular') {
            $query->orderByDesc('posts_count');
        } else {
            $query->latest();
        }

        $threads = $query->paginate(12)->withQueryString();
        $categories = ForumCategory::orderBy('name')->get();

        return view('pages.forum.index', compact('threads','categories'));
    }

    public function show(string $slug): View
    {
        $thread = ForumThread::query()
            ->where('slug', $slug)
            ->with(['user', 'posts.user'])
            ->firstOrFail();

        return view('pages.forum.show', compact('thread'));
    }

    public function storeThread(Request $request): RedirectResponse
    {
        $this->authorize('create', ForumThread::class);

        $validated = $request->validate([
            'forum_category_id' => ['nullable', 'exists:forum_categories,id'],
            'title' => ['required', 'string', 'max:150'],
            'body' => ['required', 'string'],
            'guest_name' => ['nullable', 'string', 'max:100'],
            'guest_email' => ['nullable', 'email', 'max:200'],
        ]);

        $slugBase = Str::slug($validated['title']);
        $slug = $slugBase;
        $i = 1;
        while (ForumThread::where('slug', $slug)->exists()) {
            $slug = $slugBase.'-'.$i++;
        }

        $thread = ForumThread::create([
            'user_id' => optional($request->user())->id,
            'forum_category_id' => $validated['forum_category_id'] ?? null,
            'guest_name' => $request->user() ? null : ($validated['guest_name'] ?? null),
            'guest_email' => $request->user() ? null : ($validated['guest_email'] ?? null),
            'title' => $validated['title'],
            'slug' => $slug,
            'body' => $validated['body'],
        ]);

        return redirect()->route('forum.show', $thread->slug)
            ->with('status', 'Thread created');
    }

    public function storePost(Request $request, string $slug): RedirectResponse
    {
        $thread = ForumThread::where('slug', $slug)->firstOrFail();
        $this->authorize('create', ForumPost::class);

        $validated = $request->validate([
            'body' => ['required', 'string'],
            'guest_name' => ['nullable', 'string', 'max:100'],
            'guest_email' => ['nullable', 'email', 'max:200'],
        ]);

        ForumPost::create([
            'forum_thread_id' => $thread->id,
            'user_id' => optional($request->user())->id,
            'guest_name' => $request->user() ? null : ($validated['guest_name'] ?? null),
            'guest_email' => $request->user() ? null : ($validated['guest_email'] ?? null),
            'body' => $validated['body'],
        ]);

        return back()->with('status', 'Reply posted');
    }

    public function createThread(): View
    {
        $this->authorize('create', ForumThread::class);
        $categories = ForumCategory::orderBy('name')->get();
        return view('pages.forum.create', compact('categories'));
    }

    public function editThread(string $slug): View
    {
        $thread = ForumThread::where('slug', $slug)->firstOrFail();
        $this->authorize('update', $thread);
        $categories = ForumCategory::orderBy('name')->get();
        return view('pages.forum.edit', compact('thread','categories'));
    }

    public function updateThread(Request $request, string $slug): RedirectResponse
    {
        $thread = ForumThread::where('slug', $slug)->firstOrFail();
        $this->authorize('update', $thread);
        $validated = $request->validate([
            'forum_category_id' => ['nullable', 'exists:forum_categories,id'],
            'title' => ['required','string','max:150'],
            'body' => ['required','string'],
        ]);
        $thread->update($validated);
        return redirect()->route('forum.show', $thread->slug)->with('status','Thread updated');
    }

    public function destroyThread(string $slug): RedirectResponse
    {
        $thread = ForumThread::where('slug', $slug)->firstOrFail();
        $this->authorize('delete', $thread);
        $thread->delete();
        return redirect()->route('forum.index')->with('status','Thread deleted');
    }

    public function destroyPost(string $slug, int $postId): RedirectResponse
    {
        $thread = ForumThread::where('slug', $slug)->firstOrFail();
        $post = ForumPost::where('forum_thread_id',$thread->id)->where('id',$postId)->firstOrFail();
        $this->authorize('delete', $post);
        $post->delete();
        return back()->with('status','Reply deleted');
    }
}


