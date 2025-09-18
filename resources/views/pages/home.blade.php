<x-app-layout>
<div class="max-w-6xl mx-auto p-6">
  <div class="relative overflow-hidden rounded-3xl shadow-soft pastel-bg">
    <div class="text-center py-24">
      <h1 class="text-4xl md:text-6xl font-extrabold text-pink-600">Hurghada</h1>
      <p class="mt-4 text-lg text-pink-800/70">Sun, sea, and pastel dreams ✨</p>
    </div>
    <div class="pointer-events-none">
      <div class="hero-bubble w-40 h-40 -left-10 top-10"></div>
      <div class="hero-bubble w-56 h-56 right-10 -bottom-10"></div>
      <div class="hero-bubble w-24 h-24 left-1/2 top-6"></div>
    </div>
  </div>
  <div class="mt-10 grid md:grid-cols-3 gap-6">
    <a href="{{ route('attractions.index') }}" class="block p-6 bg-white/80 rounded-2xl shadow hover:shadow-lg transition">Attractions</a>
    <a href="{{ route('events.index') }}" class="block p-6 bg-white/80 rounded-2xl shadow hover:shadow-lg transition">Events</a>
    <a href="{{ route('blog.index') }}" class="block p-6 bg-white/80 rounded-2xl shadow hover:shadow-lg transition">Blog</a>
  </div>
</div>
</x-app-layout>
