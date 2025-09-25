<x-app-layout>
<div class="max-w-6xl mx-auto p-6">
  <h1 class="text-3xl font-semibold text-pink-600">Events</h1>
  <div class="grid md:grid-cols-3 gap-6 mt-6">
    @foreach($events as $event)
      <div class="p-4 bg-white rounded-xl shadow">
        <div class="flex items-start justify-between gap-3">
          <a href="{{ route('events.show', $event) }}" class="block">
            <div class="font-medium">{{ $event->title }}</div>
            <div class="text-sm text-pink-900/60">{{ optional($event->starts_at)->format('M d, Y') }}</div>
          </a>
          <livewire:favorites-toggle :model-type="\App\Models\Event::class" :model-id="$event->id" />
        </div>
      </div>
    @endforeach
  </div>
  <div class="mt-6">{{ $events->links() }}</div>
</div>
</x-app-layout>
