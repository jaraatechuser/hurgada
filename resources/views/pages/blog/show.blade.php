<x-app-layout>
<div class="max-w-3xl mx-auto p-6">
  <h1 class="text-3xl font-semibold text-pink-600">{{ $blog->title }}</h1>
  <br/>
  <div class="prose max-w-none">
    {!! nl2br(e($blog->content)) !!}
  </div>
</div>
</x-app-layout>
