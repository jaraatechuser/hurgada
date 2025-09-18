@props(['trigger' => 'Open', 'title' => null])
<div x-data="{ open: false }">
  <button @click="open=true" class="inline-flex items-center rounded-full px-4 py-2 bg-pink-500 text-white hover:bg-pink-600">{{  }}</button>
  <div x-show="open" x-transition class="fixed inset-0 z-50 flex items-center justify-center">
    <div @click="open=false" class="absolute inset-0 bg-black/30"></div>
    <div class="relative bg-white rounded-2xl shadow-xl p-6 w-full max-w-lg mx-4">
      <div class="flex items-center justify-between">
        <h3 class="text-pink-700 font-semibold">{{  }}</h3>
        <button @click="open=false" class="text-pink-500 hover:text-pink-700">&times;</button>
      </div>
      <div class="mt-4">{{  }}</div>
    </div>
  </div>
</div>
