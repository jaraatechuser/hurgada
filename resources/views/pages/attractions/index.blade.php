<x-app-layout>
<div class="max-w-6xl mx-auto p-6">
  <h1 class="text-3xl font-semibold text-pink-600">Attractions</h1>
  <div class="grid md:grid-cols-3 gap-6 mt-6">
    @foreach($attractions as $item)
      <a href="{{ route('attractions.show', $item) }}" class="p-4 bg-white rounded-xl shadow">
        <div class="font-medium">{{ $item->name ?? 'Attraction' }}</div>
        <div class="text-sm text-pink-900/60">{{ $item->category ?? '' }}</div>
      </a>
    @endforeach
  </div>
  <div class="mt-6">{{ $attractions->links() }}</div>
</div>
</x-app-layout>
