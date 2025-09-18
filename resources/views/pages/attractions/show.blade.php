<x-app-layout>
<div class="max-w-3xl mx-auto p-6">
  <h1 class="text-3xl font-semibold text-pink-600">{{ $attraction->name ?? 'Attraction' }}</h1>
  <p class="mt-2 text-pink-900/70">{{ $attraction->description }}</p>
  <div class="mt-6 grid md:grid-cols-2 gap-6">
    <div>
      <div class="text-sm text-pink-900/60">Category: {{ $attraction->category }}</div>
      <div class="text-sm text-pink-900/60">Rating: {{ $attraction->rating }}</div>
      <div class="text-sm text-pink-900/60">Address: {{ $attraction->address }}</div>
      <div class="mt-4 p-4 bg-white rounded-xl shadow" x-data="weatherWidget({ lat: {{ $attraction->latitude ?? 'null' }}, lon: {{ $attraction->longitude ?? 'null' }} })">
        <div class="font-semibold text-pink-700">Current Weather</div>
        <template x-if="loading"><div class="text-sm">Loading...</div></template>
        <template x-if="!loading && data">
          <div class="text-sm text-pink-900/70">Temp: <span x-text="data.current.temperature_2m"></span>°C, Humidity: <span x-text="data.current.relative_humidity_2m"></span>%</div>
        </template>
      </div>
    </div>
    <div>
      <div id="map" class="h-64 rounded-xl overflow-hidden shadow" x-data="leafletMap(@js(['lat' => $attraction->latitude ?? 27.2579, 'lon' => $attraction->longitude ?? 33.8116, 'title' => $attraction->name]))"></div>
    </div>
  </div>
  <div class="mt-8 space-y-4">
    <livewire:favorites-toggle :model-type="\App\Models\Attraction::class" :model-id="$attraction->id" />
    <livewire:comments :model-type="\App\Models\Attraction::class" :model-id="$attraction->id" />
  </div>
</div>
</x-app-layout>

<script>
document.addEventListener('alpine:init', () => {
  Alpine.data('leafletMap', ({ lat, lon, title }) => ({
    async init() {
      const L = await window.hurghada.loadLeaflet();
      const map = L.map(this.$el).setView([lat || 27.2579, lon || 33.8116], 12);
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; OpenStreetMap contributors'
      }).addTo(map);
      if (lat && lon) {
        L.marker([lat, lon]).addTo(map).bindPopup(title).openPopup();
      }
    }
  }));

  Alpine.data('weatherWidget', ({ lat, lon }) => ({
    loading: true,
    data: null,
    async init() {
      if (!lat || !lon) { this.loading = false; return; }
      try {
        this.data = await window.hurghada.weather(lat, lon);
      } catch (e) {}
      this.loading = false;
    }
  }));
});
</script>
