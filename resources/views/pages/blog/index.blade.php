<x-app-layout>
<div class="max-w-6xl mx-auto p-6">
  <h1 class="text-3xl font-semibold text-pink-600">Blog</h1>
  <div class="space-y-6 mt-6">
    @foreach($posts as $post)
      <div class="p-4 bg-white rounded-xl shadow">
        <div class="flex items-start justify-between gap-3">
          <a href="{{ route('blog.show', $post) }}" class="block">
            <div class="font-medium">{{ $post->title }}</div>
            <div class="text-sm text-pink-900/60">{{ $post->excerpt }}</div>
          </a>
          <livewire:favorites-toggle :model-type="\App\Models\Blog::class" :model-id="$post->id" />
        </div>
      </div>
    @endforeach
  </div>
  <div class="mt-6">{{ $posts->links() }}</div>
</div>
</x-app-layout>
