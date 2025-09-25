<x-app-layout>
<div class="max-w-3xl mx-auto p-6">
  <h1 class="text-3xl font-semibold text-pink-600">{{ $event->title }}</h1>
  <p class="mt-2 text-pink-900/70">{{ $event->description }}</p>
  <div class="mt-6 space-y-4">
    <livewire:favorites-toggle :model-type="\App\Models\Event::class" :model-id="$event->id" />
    <livewire:comments :model-type="\App\Models\Event::class" :model-id="$event->id" />
  </div>
</div>
</x-app-layout>
