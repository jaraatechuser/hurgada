<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-pink-50 via-white to-purple-50">
        <!-- Hero Section -->
        <div class="relative overflow-hidden bg-gradient-to-r from-pink-100 to-purple-100 py-16">
            <div class="absolute inset-0 bg-white/20"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div>
                        <div class="flex items-center space-x-2 mb-4">
                            @for($i = 0; $i < $hotel->stars; $i++)
                                <span class="text-yellow-400 text-2xl">★</span>
                            @endfor
                            <span class="text-pink-600 font-semibold">{{ $hotel->stars }}-Star Hotel</span>
                        </div>
                        <h1 class="text-4xl md:text-5xl font-bold text-pink-600 mb-4">
                            {{ $hotel->name }}
                        </h1>
                        <p class="text-lg text-pink-700 mb-6">{{ $hotel->category }}</p>
                        <div class="flex items-center space-x-4 mb-6">
                            <div class="flex items-center">
                                <span class="text-yellow-400 text-xl mr-2">★</span>
                                <span class="text-lg font-semibold text-gray-700">{{ $hotel->rating }}</span>
                                <span class="text-gray-500 ml-1">/ 5.0</span>
                            </div>
                            <div class="text-2xl font-bold text-pink-600">{{ $hotel->price_range }}</div>
                        </div>
                        <div class="flex space-x-4">
                            <livewire:favorites-toggle :model-type="\App\Models\Hotel::class" :model-id="$hotel->id" />
                            @if($hotel->website)
                                <a href="{{ $hotel->website }}" 
                                   target="_blank"
                                   class="bg-gradient-to-r from-pink-500 to-purple-500 text-white py-3 px-6 rounded-lg font-semibold hover:from-pink-600 hover:to-purple-600 transition-all duration-300 transform hover:scale-105">
                                    Visit Website
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="relative">
                        <img 
                            src="{{ $hotel->image_url }}" 
                            alt="{{ $hotel->name }}"
                            class="w-full h-80 object-cover rounded-2xl shadow-2xl"
                        >
                        @if($hotel->is_featured)
                            <div class="absolute top-4 right-4">
                                <span class="bg-gradient-to-r from-pink-500 to-purple-500 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg">
                                    ⭐ Featured Hotel
                                </span>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Hotel Details -->
                <div class="lg:col-span-2 space-y-8">
                    <!-- Description -->
                    <div class="bg-white rounded-2xl shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-pink-600 mb-4">About This Hotel</h2>
                        <p class="text-gray-700 leading-relaxed text-lg">{{ $hotel->description }}</p>
                    </div>

                    <!-- Amenities -->
                    <div class="bg-white rounded-2xl shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-pink-600 mb-6">Amenities & Services</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @foreach($hotel->amenities as $amenity)
                                <div class="flex items-center space-x-3 p-3 bg-pink-50 rounded-lg">
                                    <span class="text-pink-500 text-lg">✨</span>
                                    <span class="text-gray-700 font-medium">{{ $amenity }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Comments Section -->
                    <div class="bg-white rounded-2xl shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-pink-600 mb-6">Guest Reviews</h2>
                        <livewire:comments :model-type="\App\Models\Hotel::class" :model-id="$hotel->id" />
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="space-y-6">
                    <!-- Hotel Info Card -->
                    <div class="bg-white rounded-2xl shadow-lg p-6">
                        <h3 class="text-xl font-bold text-pink-600 mb-4">Hotel Information</h3>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <span class="text-pink-500 text-lg">📍</span>
                                <div>
                                    <p class="font-medium text-gray-800">Address</p>
                                    <p class="text-gray-600 text-sm">{{ $hotel->address }}</p>
                                </div>
                            </div>
                            
                            @if($hotel->phone)
                                <div class="flex items-center space-x-3">
                                    <span class="text-pink-500 text-lg">📞</span>
                                    <div>
                                        <p class="font-medium text-gray-800">Phone</p>
                                        <a href="tel:{{ $hotel->phone }}" class="text-pink-600 hover:text-pink-700 text-sm">
                                            {{ $hotel->phone }}
                                        </a>
                                    </div>
                                </div>
                            @endif

                            @if($hotel->check_in_time && $hotel->check_out_time)
                                <div class="flex items-start space-x-3">
                                    <span class="text-pink-500 text-lg">🕐</span>
                                    <div>
                                        <p class="font-medium text-gray-800">Check-in/out</p>
                                        <p class="text-gray-600 text-sm">
                                            Check-in: {{ \Carbon\Carbon::parse($hotel->check_in_time)->format('g:i A') }}<br>
                                            Check-out: {{ \Carbon\Carbon::parse($hotel->check_out_time)->format('g:i A') }}
                                        </p>
                                    </div>
                                </div>
                            @endif

                            <div class="flex items-center space-x-3">
                                <span class="text-pink-500 text-lg">⭐</span>
                                <div>
                                    <p class="font-medium text-gray-800">Rating</p>
                                    <div class="flex items-center space-x-1">
                                        <span class="text-yellow-400">★</span>
                                        <span class="text-gray-600 text-sm">{{ $hotel->rating }}/5.0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Map -->
                    @if($hotel->latitude && $hotel->longitude)
                        <div class="bg-white rounded-2xl shadow-lg p-6">
                            <h3 class="text-xl font-bold text-pink-600 mb-4">Location</h3>
                            <div id="map" class="h-64 rounded-xl overflow-hidden shadow" 
                                 x-data="leafletMap(@js(['lat' => $hotel->latitude, 'lon' => $hotel->longitude, 'title' => $hotel->name]))">
                            </div>
                        </div>
                    @endif

                    <!-- Weather Widget -->
                    @if($hotel->latitude && $hotel->longitude)
                        <div class="bg-white rounded-2xl shadow-lg p-6">
                            <h3 class="text-xl font-bold text-pink-600 mb-4">Current Weather</h3>
                            <div x-data="weatherWidget({ lat: {{ $hotel->latitude }}, lon: {{ $hotel->longitude }} })">
                                <template x-if="loading">
                                    <div class="text-center py-4">
                                        <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-pink-500 mx-auto"></div>
                                        <p class="text-gray-500 mt-2">Loading weather...</p>
                                    </div>
                                </template>
                                <template x-if="!loading && data">
                                    <div class="text-center">
                                        <div class="text-3xl font-bold text-pink-600 mb-2">
                                            <span x-text="data.current.temperature_2m"></span>°C
                                        </div>
                                        <div class="text-gray-600">
                                            <p>Humidity: <span x-text="data.current.relative_humidity_2m"></span>%</p>
                                            <p>Wind: <span x-text="data.current.wind_speed_10m"></span> km/h</p>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>
                    @endif

                    <!-- Related Hotels -->
                    <div class="bg-white rounded-2xl shadow-lg p-6">
                        <h3 class="text-xl font-bold text-pink-600 mb-4">Similar Hotels</h3>
                        <div class="space-y-4">
                            @php
                                $relatedHotels = \App\Models\Hotel::where('category', $hotel->category)
                                    ->where('id', '!=', $hotel->id)
                                    ->limit(3)
                                    ->get();
                            @endphp
                            @foreach($relatedHotels as $relatedHotel)
                                <a href="{{ route('hotels.show', $relatedHotel) }}" 
                                   class="block p-3 bg-pink-50 rounded-lg hover:bg-pink-100 transition-colors duration-300">
                                    <div class="flex items-center space-x-3">
                                        <img src="{{ $relatedHotel->image_url }}" 
                                             alt="{{ $relatedHotel->name }}"
                                             class="w-12 h-12 object-cover rounded-lg">
                                        <div class="flex-1">
                                            <h4 class="font-medium text-gray-800 text-sm">{{ $relatedHotel->name }}</h4>
                                            <div class="flex items-center space-x-1">
                                                @for($i = 0; $i < $relatedHotel->stars; $i++)
                                                    <span class="text-yellow-400 text-xs">★</span>
                                                @endfor
                                                <span class="text-gray-500 text-xs">{{ $relatedHotel->rating }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
</x-app-layout>
