<x-app-layout>
<div class="max-w-3xl mx-auto p-6">
  <h1 class="text-3xl font-semibold text-pink-600">{{ $blog->title }}</h1>
  <br/>
  <div class="prose max-w-none">
    {!! nl2br(e($blog->content)) !!}
  </div>
  <br/>
  <div class="space-y-4">
    <livewire:favorites-toggle :model-type="\App\Models\Blog::class" :model-id="$blog->id" />
    <livewire:comments :model-type="\App\Models\Blog::class" :model-id="$blog->id" />
  </div>
</div>
</x-app-layout>
