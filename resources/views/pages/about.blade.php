<x-app-layout>
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16 space-y-20">

  <!-- Hero -->
  <div class="relative rounded-3xl overflow-hidden shadow-lg ring-1 ring-rose-100">
    <div class="absolute inset-0 bg-gradient-to-tr from-rose-200/50 via-pink-100/40 to-cyan-100/50"></div>
    <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=2000&auto=format&fit=crop" alt="Hurghada Beach" class="w-full h-[360px] sm:h-[520px] object-cover" loading="lazy" decoding="async">
    <div class="absolute inset-0 bg-white/40 backdrop-blur-[2px]"></div>
    <!-- Decorative blobs -->
    <div class="pointer-events-none absolute -left-10 -top-10 h-40 w-40 rounded-full bg-rose-300/30 blur-3xl"></div>
    <div class="pointer-events-none absolute -right-8 -bottom-12 h-52 w-52 rounded-full bg-cyan-300/30 blur-3xl"></div>
    <div class="absolute inset-0 flex items-center justify-center text-center px-6">
      <div>
        <span class="inline-block mb-3 text-xs sm:text-sm px-3 py-1 rounded-full bg-rose-100/90 text-rose-700 font-semibold shadow-sm">Red Sea • Egypt</span>
        <h1 class="text-4xl sm:text-6xl font-black tracking-tight text-rose-500 drop-shadow-sm leading-tight">
          Discover Hurgada 💖
        </h1>
        <p class="mt-3 sm:mt-4 text-base sm:text-lg text-rose-800/80 max-w-2xl mx-auto">
          Turquoise waters, golden beaches, dreamy sunsets — every hour is golden hour ✨
        </p>
        <div class="mt-6 flex flex-wrap items-center justify-center gap-3">
          <a href="{{ route('gallery.index') }}" class="inline-flex items-center px-5 py-2.5 rounded-full bg-rose-500 text-white font-semibold shadow-md hover:bg-rose-600 hover:shadow-lg transition">Explore Beaches 🏖️</a>
          <a href="#plan-day" class="inline-flex items-center px-5 py-2.5 rounded-full bg-white/80 text-rose-600 font-semibold shadow hover:shadow-md transition ring-1 ring-rose-200">Plan your day ✨</a>
        </div>
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

  <!-- Quick stats strip -->
  <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
    <div class="rounded-2xl bg-white shadow-sm ring-1 ring-rose-100 p-4 text-center">
      <p class="text-xs uppercase tracking-wide text-rose-600">Sunshine</p>
      <p class="text-xl font-bold text-rose-700">300+ days</p>
    </div>
    <div class="rounded-2xl bg-white shadow-sm ring-1 ring-rose-100 p-4 text-center">
      <p class="text-xs uppercase tracking-wide text-rose-600">Water</p>
      <p class="text-xl font-bold text-rose-700">Crystal clear</p>
    </div>
    <div class="rounded-2xl bg-white shadow-sm ring-1 ring-rose-100 p-4 text-center">
      <p class="text-xs uppercase tracking-wide text-rose-600">Vibe</p>
      <p class="text-xl font-bold text-rose-700">Chill & chic</p>
    </div>
    <div class="rounded-2xl bg-white shadow-sm ring-1 ring-rose-100 p-4 text-center">
      <p class="text-xs uppercase tracking-wide text-rose-600">Budget</p>
      <p class="text-xl font-bold text-rose-700">$ – $$</p>
    </div>
  </div>

  <!-- Why you'll love it -->
  <div class="max-w-5xl mx-auto">
    <h2 class="text-2xl sm:text-3xl font-semibold text-rose-500 text-center mb-6">Why you’ll love Hurgada</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
      <div class="rounded-2xl bg-rose-50 text-rose-900/90 p-4 shadow-sm ring-1 ring-rose-100">
        <p class="font-semibold">Beach girl energy 💅</p>
        <p class="text-sm mt-1">Soft sands, calm waves, and totally Instagrammable palettes.</p>
      </div>
      <div class="rounded-2xl bg-rose-50 text-rose-900/90 p-4 shadow-sm ring-1 ring-rose-100">
        <p class="font-semibold">Reef romance 🐠</p>
        <p class="text-sm mt-1">Snorkel above neon corals and spot playful fish friends.</p>
      </div>
      <div class="rounded-2xl bg-rose-50 text-rose-900/90 p-4 shadow-sm ring-1 ring-rose-100">
        <p class="font-semibold">Golden hours 🌅</p>
        <p class="text-sm mt-1">Sunset boat rides and marina strolls that glow.</p>
      </div>
      <div class="rounded-2xl bg-rose-50 text-rose-900/90 p-4 shadow-sm ring-1 ring-rose-100">
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
      <div class="group rounded-3xl overflow-hidden bg-white shadow-md hover:shadow-lg transition-all duration-300 ring-1 ring-rose-100">
        <div class="relative overflow-hidden aspect-[4/3]">
          <img src="https://images.unsplash.com/photo-1501973801540-537f08ccae7b?q=80&w=1600&auto=format&fit=crop" alt="Sunset Beach" class="absolute inset-0 h-full w-full object-cover transform group-hover:scale-[1.05] transition duration-500" loading="lazy" decoding="async">
          <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-black/0 to-black/0"></div>
          <span class="absolute left-3 bottom-3 inline-flex items-center px-3 py-1 text-xs font-semibold rounded-full bg-white/90 text-rose-600 shadow">Sunset Beach</span>
        </div>
        <div class="p-4">
          <p class="text-rose-700 font-medium">Sunset Beach</p>
          <p class="text-rose-900/70 text-sm">Golden skies, soft waves, and that perfect glow-up light 🌅</p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="group rounded-3xl overflow-hidden bg-white shadow-md hover:shadow-lg transition-all duration-300 ring-1 ring-rose-100 sm:translate-y-4">
        <div class="relative overflow-hidden aspect-[4/3]">
          <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?q=80&w=1600&auto=format&fit=crop" alt="Giftun Island snorkeling" class="absolute inset-0 h-full w-full object-cover transform group-hover:scale-[1.05] transition duration-500" loading="lazy" decoding="async">
          <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-black/0 to-black/0"></div>
          <span class="absolute left-3 bottom-3 inline-flex items-center px-3 py-1 text-xs font-semibold rounded-full bg-white/90 text-rose-600 shadow">Giftun Island</span>
        </div>
        <div class="p-4">
          <p class="text-rose-700 font-medium">Giftun Island</p>
          <p class="text-rose-900/70 text-sm">Snorkel in crystal-clear waters and live your mermaid moment 🐠</p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="group rounded-3xl overflow-hidden bg-white shadow-md hover:shadow-lg transition-all duration-300 ring-1 ring-rose-100">
        <div class="relative overflow-hidden aspect-[4/3]">
          <img src="https://images.unsplash.com/photo-1548940740-204726a19be3?q=80&w=1600&auto=format&fit=crop" alt="Marina & Cafes" class="absolute inset-0 h-full w-full object-cover transform group-hover:scale-[1.05] transition duration-500" loading="lazy" decoding="async">
          <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-black/0 to-black/0"></div>
          <span class="absolute left-3 bottom-3 inline-flex items-center px-3 py-1 text-xs font-semibold rounded-full bg-white/90 text-rose-600 shadow">Marina & Cafes</span>
        </div>
        <div class="p-4">
          <p class="text-rose-700 font-medium">Marina & Cafes</p>
          <p class="text-rose-900/70 text-sm">Cute spots for selfies, mocktails, and pastel sunsets ☕</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Fun Facts / Vibes -->
  <div class="max-w-5xl mx-auto">
    <h2 class="text-2xl sm:text-3xl font-semibold text-rose-500 text-center mb-6">Hurgada Vibes • Fun Facts</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
      <div class="rounded-2xl bg-white p-5 shadow-sm ring-1 ring-rose-100">
        <p class="text-2xl">🌸</p>
        <p class="mt-2 text-sm text-rose-700/90">Best time to visit</p>
        <p class="font-semibold text-rose-900">October – April</p>
      </div>
      <div class="rounded-2xl bg-white p-5 shadow-sm ring-1 ring-rose-100">
        <p class="text-2xl">🏄‍♀️</p>
        <p class="mt-2 text-sm text-rose-700/90">Popular water sports</p>
        <p class="font-semibold text-rose-900">Snorkeling • Diving • Kite surfing</p>
      </div>
      <div class="rounded-2xl bg-white p-5 shadow-sm ring-1 ring-rose-100">
        <p class="text-2xl">🍹</p>
        <p class="mt-2 text-sm text-rose-700/90">Nightlife</p>
        <p class="font-semibold text-rose-900">Chill lounges & beach bars</p>
      </div>
    </div>
  </div>

  <!-- Plan your perfect day -->
  <div id="plan-day" class="max-w-5xl mx-auto">
    <h2 class="text-2xl sm:text-3xl font-semibold text-rose-500 text-center mb-6">Plan your perfect day</h2>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
      <div class="rounded-2xl bg-white p-5 shadow-md ring-1 ring-rose-100">
        <p class="text-xs font-semibold text-rose-600">Morning ☀️</p>
        <p class="mt-1 text-rose-900/80 text-sm">Beachfront breakfast + early snorkel at Giftun while the water is glassy.</p>
      </div>
      <div class="rounded-2xl bg-white p-5 shadow-md ring-1 ring-rose-100">
        <p class="text-xs font-semibold text-rose-600">Afternoon 🌊</p>
        <p class="mt-1 text-rose-900/80 text-sm">Lazy sunbathing, fresh juices, and a pastel maxi-dress moment by the marina.</p>
      </div>
      <div class="rounded-2xl bg-white p-5 shadow-md ring-1 ring-rose-100">
        <p class="text-xs font-semibold text-rose-600">Evening 🌅</p>
        <p class="mt-1 text-rose-900/80 text-sm">Sunset cruise, dinner by the sea, and stargazing to close the day.</p>
      </div>
    </div>
  </div>

  <!-- Good to know / quick facts -->
  <div class="max-w-5xl mx-auto">
    <h2 class="text-2xl sm:text-3xl font-semibold text-rose-500 text-center mb-6">Good to know</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
      <div class="rounded-2xl bg-rose-50 p-4 shadow-sm ring-1 ring-rose-100">
        <p class="text-sm text-rose-700">Best months</p>
        <p class="text-lg font-semibold text-rose-900">Oct – Apr</p>
      </div>
      <div class="rounded-2xl bg-rose-50 p-4 shadow-sm ring-1 ring-rose-100">
        <p class="text-sm text-rose-700">Water temp</p>
        <p class="text-lg font-semibold text-rose-900">22–28°C</p>
      </div>
      <div class="rounded-2xl bg-rose-50 p-4 shadow-sm ring-1 ring-rose-100">
        <p class="text-sm text-rose-700">Budget</p>
        <p class="text-lg font-semibold text-rose-900">$ – $$</p>
      </div>
      <div class="rounded-2xl bg-rose-50 p-4 shadow-sm ring-1 ring-rose-100">
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
    <a href="{{ route('gallery.index') }}" class="inline-flex items-center mt-6 px-6 py-3 rounded-full bg-rose-500 text-white font-semibold shadow-md hover:bg-rose-600 hover:shadow-lg transition">
      Explore Hurgada’s Beaches 🏖️
    </a>
  </div>

</section>
</x-app-layout>
