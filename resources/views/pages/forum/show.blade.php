<x-app-layout>
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <a href="{{ route('forum.index') }}" class="text-rose-600 hover:text-rose-700">← Back to Forum</a>
        <article class="soft-card mt-4">
            <div class="flex items-start justify-between gap-3">
                <div>
                    <h1 class="text-3xl font-extrabold text-rose-700">{{ $thread->title }}</h1>
                    @if($thread->category)
                        <div class="mt-1 inline-flex items-center rounded-full px-3 py-1 text-xs font-medium bg-rose-50 text-rose-700 ring-1 ring-rose-100">{{ $thread->category->name }}</div>
                    @endif
                </div>
                @auth
                    @can('update', $thread)
                    <a href="{{ route('forum.edit', $thread->slug) }}" class="text-rose-600 hover:text-rose-700">Edit</a>
                    @endcan
                    @can('delete', $thread)
                    <form action="{{ route('forum.destroy', $thread->slug) }}" method="POST" onsubmit="return confirm('Delete this thread?');">
                        @csrf
                        @method('DELETE')
                        <button class="text-rose-600 hover:text-rose-700">Delete</button>
                    </form>
                    @endcan
                @endauth
            </div>
            <div class="mt-2 text-sm text-rose-900/60">Started {{ $thread->created_at->diffForHumans() }} by {{ $thread->user->name ?? ($thread->guest_name ?? 'Guest') }}</div>
            <div class="prose prose-rose max-w-none mt-4">
                {!! nl2br(e($thread->body)) !!}
            </div>
        </article>

        <section class="mt-8 space-y-4">
            <h2 class="text-xl font-semibold text-rose-800">Replies</h2>
            @forelse ($thread->posts as $post)
                <div class="soft-card">
                    <div class="text-sm text-rose-900/60 mb-2">{{ $post->user->name ?? ($post->guest_name ?? 'Guest') }} • {{ $post->created_at->diffForHumans() }}</div>
                    <div class="prose prose-rose max-w-none">{!! nl2br(e($post->body)) !!}</div>
                    @auth
                        @can('delete', $post)
                        <form action="{{ route('forum.post.destroy', [$thread->slug, $post->id]) }}" method="POST" class="mt-3" onsubmit="return confirm('Delete this reply?');">
                            @csrf
                            @method('DELETE')
                            <button class="text-rose-600 hover:text-rose-700 text-sm">Delete</button>
                        </form>
                        @endcan
                    @endauth
                </div>
            @empty
                <div class="soft-card text-rose-900/70">No replies yet.</div>
            @endforelse
        </section>

        <section class="mt-8">
            <div class="soft-card">
                <form action="{{ route('forum.post', $thread->slug) }}" method="POST" class="space-y-4">
                    @csrf
                    @guest
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-rose-900 mb-1">Your name</label>
                            <input type="text" name="guest_name" class="w-full rounded-2xl border-rose-200 focus:border-rose-400 focus:ring-rose-300" placeholder="John Doe">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-rose-900 mb-1">Your email</label>
                            <input type="email" name="guest_email" class="w-full rounded-2xl border-rose-200 focus:border-rose-400 focus:ring-rose-300" placeholder="you@example.com">
                        </div>
                    </div>
                    @endguest
                    <div>
                        <label class="block text-sm font-medium text-rose-900 mb-1">Your reply</label>
                        <textarea name="body" rows="4" class="w-full rounded-2xl border-rose-200 focus:border-rose-400 focus:ring-rose-300" placeholder="Write something kind and helpful…" required></textarea>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="inline-flex items-center rounded-full bg-rose-500 text-white px-5 py-2.5 shadow-soft hover:bg-rose-600 transition">Post reply</button>
                    </div>
                </form>
            </div>
        </section>
        
    </div>
</x-app-layout>


