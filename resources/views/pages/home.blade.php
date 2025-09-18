<x-app-layout>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
  <!-- Animated Hero Section -->
  <section class="relative overflow-hidden rounded-3xl shadow-soft pastel-bg">
    <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=1600&auto=format&fit=crop" alt="Hurghada beach" class="absolute inset-0 w-full h-full object-cover opacity-40">
    <div class="relative z-10 text-center py-20 md:py-28 px-6">
      <span class="inline-flex items-center px-4 py-1.5 rounded-full text-sm font-medium bg-white/70 text-rose-600 shadow-soft">
        Sweet escape to the Red Sea
      </span>
      <h1 class="mt-6 text-4xl md:text-6xl font-extrabold tracking-tight text-rose-600 drop-shadow-sm">
        Hurghada: sun-kissed & sparkling
      </h1>
      <p class="mt-4 md:mt-6 text-base md:text-lg text-rose-800/80 max-w-2xl mx-auto">
        Beaches, coral reefs, and pastel sunsets. Plan your dreamy getaway today ✨
      </p>
      <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-3">
        <a href="{{ route('attractions.index') }}" class="inline-flex items-center justify-center rounded-full bg-rose-500 text-white px-6 py-3 font-semibold shadow-soft hover:bg-rose-600 transition">Explore Attractions</a>
        <a href="{{ route('gallery.index') }}" class="inline-flex items-center justify-center rounded-full bg-white/80 text-rose-600 px-6 py-3 font-semibold shadow hover:shadow-lg transition">View Gallery</a>
      </div>
    </div>
    <div class="pointer-events-none">
      <div class="hero-bubble w-40 h-40 -left-10 top-10"></div>
      <div class="hero-bubble w-56 h-56 right-10 -bottom-10"></div>
      <div class="hero-bubble w-24 h-24 left-1/2 top-6"></div>
    </div>
  </section>

  <!-- Quick links cards -->
  <div class="mt-10 grid md:grid-cols-3 gap-4 md:gap-6">
    <a href="{{ route('attractions.index') }}" class="block p-6 bg-white/90 rounded-2xl shadow hover:shadow-lg transition">
      <div class="text-lg font-semibold text-rose-600">Attractions</div>
      <div class="text-rose-900/70 text-sm mt-1">Top beaches, reefs, and adventures</div>
    </a>
    <a href="{{ route('events.index') }}" class="block p-6 bg-white/90 rounded-2xl shadow hover:shadow-lg transition">
      <div class="text-lg font-semibold text-rose-600">Events</div>
      <div class="text-rose-900/70 text-sm mt-1">Nightlife, festivals, and tours</div>
    </a>
    <a href="{{ route('blog.index') }}" class="block p-6 bg-white/90 rounded-2xl shadow hover:shadow-lg transition">
      <div class="text-lg font-semibold text-rose-600">Blog</div>
      <div class="text-rose-900/70 text-sm mt-1">Tips, guides, and stories</div>
    </a>
  </div>

  <!-- Instagram-style Photo Carousel -->
  <section class="mt-10">
    <div class="swiper hurghada-carousel rounded-3xl shadow">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=1600&auto=format&fit=crop" 
               class="w-full h-48 md:h-56 object-cover rounded-2xl" 
               alt="Hurghada Beach 1">
        </div>
        <div class="swiper-slide">
          <img src="https://media-cdn.tripadvisor.com/media/photo-s/2e/3f/df/80/hotel-over-view.jpg?q=80&w=1600&auto=format&fit=crop" 
               class="w-full h-48 md:h-56 object-cover rounded-2xl" 
               alt="Hurghada Hotel View">
        </div>
        <div class="swiper-slide">
          <img src="https://jakadatoursegypt.com/wp-content/uploads/2020/12/a-wonderful-view-of-one-of-the-beaches-of-hurghada.jpg?q=80&w=1600&auto=format&fit=crop" 
               class="w-full h-48 md:h-56 object-cover rounded-2xl" 
               alt="Hurghada Beach 2">
        </div>
        <div class="swiper-slide">
          <img src="https://images.unsplash.com/photo-1511765224389-37f0e77cf0eb?q=80&w=1600&auto=format&fit=crop" 
               class="w-full h-48 md:h-56 object-cover rounded-2xl" 
               alt="Hurghada Beach 3">
        </div>
      </div>
      
      <!-- Navigation buttons -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      
      <!-- Pagination dots -->
      <div class="swiper-pagination"></div>
    </div>
  </section>

  <style>
  .hurghada-carousel {
    padding: 16px;
  }
  
  .hurghada-carousel .swiper-button-next,
  .hurghada-carousel .swiper-button-prev {
    color: #f43f5e; /* rose-500 */
    background: rgba(255, 255, 255, 0.9);
    border-radius: 50%;
    width: 44px;
    height: 44px;
    margin-top: -22px;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
  }
  
  .hurghada-carousel .swiper-button-next:after,
  .hurghada-carousel .swiper-button-prev:after {
    font-size: 18px;
    font-weight: bold;
  }
  
  .hurghada-carousel .swiper-pagination-bullet {
    background: #fecdd3; /* rose-300 */
    opacity: 1;
    width: 10px;
    height: 10px;
  }
  
  .hurghada-carousel .swiper-pagination-bullet-active {
    background: #f43f5e; /* rose-500 */
  }
  
  .hurghada-carousel .swiper-slide {
    display: flex;
    justify-content: center;
  }
  </style>

  <script>
  document.addEventListener('DOMContentLoaded', function() {
    const swiper = new Swiper('.hurghada-carousel', {
      // Basic settings
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      },
      
      // Responsive breakpoints
      breakpoints: {
        320: {
          slidesPerView: 1,
          spaceBetween: 16,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 24,
        },
      },
      
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      
      // Pagination dots
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        bulletClass: 'swiper-pagination-bullet',
        bulletActiveClass: 'swiper-pagination-bullet-active',
      },
      
      // Effects
      effect: 'slide',
      speed: 600,
      
      // Accessibility
      a11y: {
        enabled: true,
        prevSlideMessage: 'Previous slide',
        nextSlideMessage: 'Next slide',
        firstSlideMessage: 'This is the first slide',
        lastSlideMessage: 'This is the last slide',
      },
    });
  });
  </script>

  <!-- Interactive Map -->
  <section class="mt-12">
    <h2 class="text-2xl font-semibold text-rose-700">Find your vibe in Hurghada</h2>
    <div class="mt-4 grid md:grid-cols-3 gap-6">
      <div class="md:col-span-2">
        <div id="map" class="h-72 md:h-96 w-full rounded-3xl shadow-soft overflow-hidden" x-data="{ map:null }" x-init="(async () => {
          const L = await window.hurghada.loadLeaflet();
          this.map = L.map('map', { scrollWheelZoom: false }).setView([27.2579, 33.8116], 12);
          L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', { maxZoom: 19, attribution: '&copy; OpenStreetMap' }).addTo(this.map);
          const spots = [
            { name: 'Old Vic Beach', lat: 27.2157, lon: 33.8406, c: '#fecdd3' },
            { name: 'Marina Hurghada', lat: 27.2152, lon: 33.8436, c: '#fbcfe8' },
            { name: 'Giftun Island', lat: 27.2350, lon: 33.9530, c: '#e9d5ff' }
          ];
          spots.forEach(s => L.circleMarker([s.lat, s.lon], { radius: 10, color: s.c, weight: 2, fillColor: s.c, fillOpacity: 0.6 }).addTo(this.map).bindPopup(s.name));
        })()"></div>
      </div>
      <div class="space-y-3">
        <div class="p-4 bg-white/90 rounded-2xl shadow">
          <div class="text-sm text-rose-500 font-semibold">Tip</div>
          <div class="text-rose-900/80 text-sm">Tap markers to see cute pastel pins of must‑see spots.</div>
        </div>
        <div class="p-4 bg-white/90 rounded-2xl shadow">
          <div class="text-sm text-rose-500 font-semibold">Weather now</div>
          <div x-data="{ data:null, async init(){ this.data = await window.hurghada.weather(27.2579,33.8116) } }" x-init="init()" class="text-rose-900/80 text-sm">
            <template x-if="data">
              <div>
                <span x-text="Math.round(data.current.temperature_2m)"></span>°C · <span x-text="data.current.relative_humidity_2m"></span>% humidity
              </div>
            </template>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials / Quotes -->
  <section class="mt-12">
    <div class="grid md:grid-cols-2 gap-6">
      <div class="p-6 bg-pink-50 rounded-2xl shadow">"Hurghada is pure magic! 🌴✨"</div>
      <div class="p-6 bg-purple-50 rounded-2xl shadow">"Sunsets that steal your heart! 🌅"</div>
      <div class="p-6 bg-rose-50 rounded-2xl shadow md:col-span-2">"Crystal waters and coral dreams. I’m in love! 💖"</div>
    </div>
  </section>
</div>
</x-app-layout>
