<x-app-layout>
<div class="max-w-7xl mx-auto p-6">
  <div class="flex items-end justify-between gap-4">
    <div>
      <h1 class="text-3xl md:text-4xl font-semibold tracking-tight text-gray-900 dark:text-white">Photo Gallery</h1>
      <p class="mt-2 text-gray-600 dark:text-gray-300">Pinterest-style Masonry grid with a smooth lightbox.</p>
    </div>
    <div class="hidden sm:flex items-center gap-2 text-sm text-gray-500 dark:text-gray-400">
      <span class="inline-flex h-2 w-2 rounded-full bg-emerald-500"></span>
      <span>{{ count($images ?? []) }} photos</span>
    </div>
  </div>

  <div class="mt-6">
    <div class="gallery" data-masonry>
      <div class="gallery-sizer w-1/2 sm:w-1/3 lg:w-1/4"></div>
      @foreach(($images ?? []) as $image)
        <a
          class="gallery-item w-1/2 sm:w-1/3 lg:w-1/4 mb-4 block rounded-xl overflow-hidden bg-gray-200/60 dark:bg-gray-700/40 ring-1 ring-gray-200/60 dark:ring-white/10 hover:shadow-lg transition"
          href="{{ $image['src'] }}"
          data-lightbox="gallery"
          data-title="{{ $image['alt'] }}">
          <img
            src="{{ $image['thumb'] }}"
            alt="{{ $image['alt'] }}"
            loading="lazy"
            class="w-full h-auto hover:scale-[1.01] transition duration-300 ease-out">
        </a>
      @endforeach
    </div>
  </div>
</div>
</x-app-layout>
