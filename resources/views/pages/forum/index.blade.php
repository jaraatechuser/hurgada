<x-app-layout>
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4 mb-6">
            <div>
                <h1 class="text-3xl font-extrabold text-rose-700 tracking-tight">Forum</h1>
                <form method="GET" action="{{ route('forum.index') }}" class="mt-3 flex flex-col sm:flex-row gap-3">
                    <div class="flex-1">
                        <input type="text" name="q" value="{{ request('q') }}" placeholder="Search threads" class="w-full rounded-2xl border-rose-200 focus:border-rose-400 focus:ring-rose-300" />
                    </div>
                    <div>
                        <select name="category" class="rounded-2xl border-rose-200 focus:border-rose-400 focus:ring-rose-300">
                            <option value="">All categories</option>
                            @foreach(($categories ?? []) as $category)
                                <option value="{{ $category->slug }}" @selected(request('category')===$category->slug)>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <select name="sort" class="rounded-2xl border-rose-200 focus:border-rose-400 focus:ring-rose-300">
                            <option value="new" @selected(request('sort')!=='popular')>Newest</option>
                            <option value="popular" @selected(request('sort')==='popular')>Most replies</option>
                        </select>
                    </div>
                    <div>
                        <button class="inline-flex items-center rounded-full bg-rose-500 text-white px-5 py-2.5 shadow-soft hover:bg-rose-600 transition">Apply</button>
                    </div>
                </form>
            </div>
            <div>
                <a href="{{ route('forum.create') }}" class="inline-flex items-center rounded-full bg-rose-500 text-white px-5 py-2.5 shadow-soft hover:bg-rose-600 transition">New Thread</a>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4">
            @forelse ($threads as $thread)
                <a href="{{ route('forum.show', $thread->slug) }}" class="soft-card block hover:shadow-lg transition">
                    <div class="flex items-start justify-between gap-4">
                        <div>
                            <h2 class="text-xl font-semibold text-rose-800">{{ $thread->title }}</h2>
                            @if($thread->category)
                                <div class="mt-1 inline-flex items-center rounded-full px-3 py-1 text-xs font-medium bg-rose-50 text-rose-700 ring-1 ring-rose-100">{{ $thread->category->name }}</div>
                            @endif
                            <p class="mt-1 text-rose-900/70 line-clamp-2">{{ Str::limit(strip_tags($thread->body), 160) }}</p>
                            <div class="mt-2 text-sm text-rose-900/60">{{ $thread->created_at->diffForHumans() }}</div>
                        </div>
                        <div class="shrink-0 text-center">
                            <div class="text-2xl font-bold text-rose-600">{{ $thread->posts_count }}</div>
                            <div class="text-xs text-rose-900/60">replies</div>
                        </div>
                    </div>
                </a>
            @empty
                <div class="soft-card text-center text-rose-900/70">No threads yet. Be the first to start a conversation!</div>
            @endforelse
        </div>

        <div class="mt-6">{{ $threads->links() }}</div>
    </div>
</x-app-layout>


