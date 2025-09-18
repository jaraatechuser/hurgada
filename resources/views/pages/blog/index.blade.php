<x-app-layout>
<div class="max-w-6xl mx-auto p-6">
  <h1 class="text-3xl font-semibold text-pink-600">Blog</h1>
  <div class="space-y-6 mt-6">
    @foreach($posts as $post)
      <a href="{{ route('blog.show', $post) }}" class="block p-4 bg-white rounded-xl shadow">
        <div class="font-medium">{{ $post->title }}</div>
        <div class="text-sm text-pink-900/60">{{ $post->excerpt }}</div>
      </a>
    @endforeach
  </div>
  <div class="mt-6">{{ $posts->links() }}</div>
</div>
</x-app-layout>
