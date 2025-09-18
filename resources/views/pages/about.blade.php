<x-app-layout>
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 space-y-16">

  <!-- Hero -->
  <div class="relative rounded-2xl overflow-hidden shadow-md">
    <div class="absolute inset-0 bg-gradient-to-tr from-pink-200/40 via-rose-100/30 to-cyan-100/40"></div>
    <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=2000&auto=format&fit=crop" alt="Hurghada Beach" class="w-full h-[320px] sm:h-[420px] object-cover">
    <div class="absolute inset-0 bg-white/40 backdrop-blur-[2px]"></div>
    <div class="absolute inset-0 flex items-center justify-center text-center px-6">
      <div>
        <span class="inline-block mb-3 text-xs sm:text-sm px-3 py-1 rounded-full bg-rose-100 text-rose-700 font-semibold shadow-sm">Red Sea • Egypt</span>
        <h1 class="text-4xl sm:text-6xl font-extrabold tracking-tight text-rose-500 drop-shadow-sm leading-tight">
          Discover Hurgada 💖
        </h1>
        <p class="mt-3 sm:mt-4 text-base sm:text-lg text-rose-700/80 max-w-2xl mx-auto">
          A paradise of turquoise waters, golden beaches, and dreamy sunsets — where flip-flops are a lifestyle and every hour is golden hour ✨
        </p>
      </div>
    </div>
  </div>

  <!-- Overview -->
  <div class="max-w-3xl mx-auto text-center space-y-5">
    <p class="text-rose-900/80">
      Nestled on the Red Sea coast of Egypt 🌍, Hurgada is the dreamy blend of
      crystal-blue waters, soft sands, and carefree coastal vibes. Think sun-kissed mornings,
      pastel sunsets, and starry nights by the marina.
    </p>
    <p class="text-rose-900/80">
      The vibe? Relaxed, sunny, and a little sparkly — perfect for lazy beach days,
      coral-reef adventures, and cute café stops between selfies 🌴☀️🏖️.
    </p>
    <p class="text-rose-900/80">
      Famous for its silky beaches, vibrant reefs, and splashy water sports, Hurgada is your
      go-to for snorkeling, island hopping, and breezy boat rides — all with a side of glam.
    </p>
  </div>

  <!-- Why you'll love it -->
  <div class="max-w-5xl mx-auto">
    <h2 class="text-2xl sm:text-3xl font-semibold text-rose-500 text-center mb-6">Why you’ll love Hurgada</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
      <div class="rounded-2xl bg-rose-50 text-rose-900/90 p-4 shadow-sm">
        <p class="font-semibold">Beach girl energy 💅</p>
        <p class="text-sm mt-1">Soft sands, calm waves, and totally Instagrammable palettes.</p>
      </div>
      <div class="rounded-2xl bg-rose-50 text-rose-900/90 p-4 shadow-sm">
        <p class="font-semibold">Reef romance 🐠</p>
        <p class="text-sm mt-1">Snorkel above neon corals and spot playful fish friends.</p>
      </div>
      <div class="rounded-2xl bg-rose-50 text-rose-900/90 p-4 shadow-sm">
        <p class="font-semibold">Golden hours 🌅</p>
        <p class="text-sm mt-1">Sunset boat rides and marina strolls that glow.</p>
      </div>
      <div class="rounded-2xl bg-rose-50 text-rose-900/90 p-4 shadow-sm">
        <p class="font-semibold">Easy-breezy vibes 🍹</p>
        <p class="text-sm mt-1">Chill lounges, beach bars, and cute cafés to unwind.</p>
      </div>
    </div>
    <div class="flex flex-wrap justify-center gap-2 mt-5">
      <span class="px-3 py-1 rounded-full text-xs font-semibold bg-fuchsia-100 text-fuchsia-700">#turquoise-dreams</span>
      <span class="px-3 py-1 rounded-full text-xs font-semibold bg-pink-100 text-pink-700">#sunkissed</span>
      <span class="px-3 py-1 rounded-full text-xs font-semibold bg-rose-100 text-rose-700">#marina-moments</span>
      <span class="px-3 py-1 rounded-full text-xs font-semibold bg-cyan-100 text-cyan-700">#reef-life</span>
    </div>
  </div>

  <!-- Beaches & Activities -->
  <div class="space-y-6">
    <h2 class="text-2xl sm:text-3xl font-semibold text-rose-500 text-center">Beaches & Activities</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Card 1 -->
      <div class="group rounded-2xl overflow-hidden bg-white shadow-md hover:shadow-lg transition-shadow duration-300">
        <div class="relative overflow-hidden">
          <img src="https://images.unsplash.com/photo-1501973801540-537f08ccae7b?q=80&w=1600&auto=format&fit=crop" alt="Sunset Beach" class="h-56 w-full object-cover transform group-hover:scale-[1.05] transition duration-500">
        </div>
        <div class="p-4">
          <p class="text-rose-700 font-medium">Sunset Beach</p>
          <p class="text-rose-900/70 text-sm">Golden skies, soft waves, and that perfect glow-up light 🌅</p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="group rounded-2xl overflow-hidden bg-white shadow-md hover:shadow-lg transition-shadow duration-300">
        <div class="relative overflow-hidden">
          <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?q=80&w=1600&auto=format&fit=crop" alt="Giftun Island snorkeling" class="h-56 w-full object-cover transform group-hover:scale-[1.05] transition duration-500">
        </div>
        <div class="p-4">
          <p class="text-rose-700 font-medium">Giftun Island</p>
          <p class="text-rose-900/70 text-sm">Snorkel in crystal-clear waters and live your mermaid moment 🐠</p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="group rounded-2xl overflow-hidden bg-white shadow-md hover:shadow-lg transition-shadow duration-300">
        <div class="relative overflow-hidden">
          <img src="https://images.unsplash.com/photo-1548940740-204726a19be3?q=80&w=1600&auto=format&fit=crop" alt="Marina & Cafes" class="h-56 w-full object-cover transform group-hover:scale-[1.05] transition duration-500">
        </div>
        <div class="p-4">
          <p class="text-rose-700 font-medium">Marina & Cafes</p>
          <p class="text-rose-900/70 text-sm">Cute spots for selfies, mocktails, and pastel sunsets ☕</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Fun Facts / Vibes -->
  <div class="max-w-3xl mx-auto">
    <h2 class="text-2xl sm:text-3xl font-semibold text-rose-500 text-center mb-4">Hurgada Vibes • Fun Facts</h2>
    <ul class="space-y-3 text-rose-900/80">
      <li class="flex items-start gap-3">
        <span class="text-pink-500">🌸</span>
        <span><strong>Best time to visit:</strong> October – April</span>
      </li>
      <li class="flex items-start gap-3">
        <span class="text-pink-500">🏄‍♀️</span>
        <span><strong>Popular water sports:</strong> Snorkeling, diving, kite surfing</span>
      </li>
      <li class="flex items-start gap-3">
        <span class="text-pink-500">🍹</span>
        <span><strong>Nightlife:</strong> Chill lounges & beach bars</span>
      </li>
    </ul>
  </div>

  <!-- Plan your perfect day -->
  <div class="max-w-5xl mx-auto">
    <h2 class="text-2xl sm:text-3xl font-semibold text-rose-500 text-center mb-6">Plan your perfect day</h2>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
      <div class="rounded-2xl bg-white p-5 shadow-md">
        <p class="text-xs font-semibold text-rose-600">Morning ☀️</p>
        <p class="mt-1 text-rose-900/80 text-sm">Beachfront breakfast + early snorkel at Giftun while the water is glassy.</p>
      </div>
      <div class="rounded-2xl bg-white p-5 shadow-md">
        <p class="text-xs font-semibold text-rose-600">Afternoon 🌊</p>
        <p class="mt-1 text-rose-900/80 text-sm">Lazy sunbathing, fresh juices, and a pastel maxi-dress moment by the marina.</p>
      </div>
      <div class="rounded-2xl bg-white p-5 shadow-md">
        <p class="text-xs font-semibold text-rose-600">Evening 🌅</p>
        <p class="mt-1 text-rose-900/80 text-sm">Sunset cruise, dinner by the sea, and stargazing to close the day.</p>
      </div>
    </div>
  </div>

  <!-- Good to know / quick facts -->
  <div class="max-w-5xl mx-auto">
    <h2 class="text-2xl sm:text-3xl font-semibold text-rose-500 text-center mb-6">Good to know</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
      <div class="rounded-2xl bg-rose-50 p-4 shadow-sm">
        <p class="text-sm text-rose-700">Best months</p>
        <p class="text-lg font-semibold text-rose-900">Oct – Apr</p>
      </div>
      <div class="rounded-2xl bg-rose-50 p-4 shadow-sm">
        <p class="text-sm text-rose-700">Water temp</p>
        <p class="text-lg font-semibold text-rose-900">22–28°C</p>
      </div>
      <div class="rounded-2xl bg-rose-50 p-4 shadow-sm">
        <p class="text-sm text-rose-700">Budget</p>
        <p class="text-lg font-semibold text-rose-900">$ – $$</p>
      </div>
      <div class="rounded-2xl bg-rose-50 p-4 shadow-sm">
        <p class="text-sm text-rose-700">Safety</p>
        <p class="text-lg font-semibold text-rose-900">Tourist-friendly</p>
      </div>
    </div>
    <div class="mt-5 flex flex-wrap justify-center gap-2">
      <span class="px-3 py-1 rounded-full text-xs font-semibold bg-rose-100 text-rose-700">Flowy dresses</span>
      <span class="px-3 py-1 rounded-full text-xs font-semibold bg-cyan-100 text-cyan-700">Pastel swimsuits</span>
      <span class="px-3 py-1 rounded-full text-xs font-semibold bg-amber-100 text-amber-700">Sunhat & SPF</span>
      <span class="px-3 py-1 rounded-full text-xs font-semibold bg-fuchsia-100 text-fuchsia-700">Waterproof phone case</span>
    </div>
  </div>

  <!-- Closing / CTA -->
  <div class="text-center max-w-3xl mx-auto">
    <p class="text-rose-900/90 text-lg">
      Whether you’re chasing sunsets or adventures, Hurgada will steal your heart 💕
    </p>
    <a href="{{ route('gallery.index') }}" class="inline-flex items-center mt-6 px-6 py-3 rounded-full bg-rose-400 text-white font-semibold shadow-md hover:bg-rose-500 hover:shadow-lg transition">
      Explore Hurgada’s Beaches 🏖️
    </a>
  </div>

</section>
</x-app-layout>
