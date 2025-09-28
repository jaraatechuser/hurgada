<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-pink-50 via-white to-purple-50">
        <!-- Hero Section -->
        <div class="relative overflow-hidden bg-gradient-to-r from-pink-100 to-purple-100 py-16">
            <div class="absolute inset-0 bg-white/20"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h1 class="text-4xl md:text-5xl font-bold text-pink-600 mb-4">
                        <span class="inline-block transform hover:scale-105 transition-transform duration-300">
                            🍽️
                        </span>
                        {{ $restaurant->name }}
                    </h1>
                    <p class="text-lg md:text-xl text-pink-700 max-w-3xl mx-auto leading-relaxed">
                        {{ $restaurant->cuisine_type }} • {{ $restaurant->price_range }}
                    </p>
                </div>
            </div>
        </div>

        <!-- Restaurant Details -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <!-- Restaurant Image -->
                    <div class="relative h-64 md:h-96 rounded-2xl overflow-hidden mb-8 shadow-lg">
                        <img 
                            src="{{ $restaurant->image_url }}" 
                            alt="{{ $restaurant->name }}"
                            class="w-full h-full object-cover"
                            loading="lazy"
                        >
                        <div class="absolute top-4 right-4">
                            @if($restaurant->is_featured)
                                <span class="bg-gradient-to-r from-pink-500 to-purple-500 text-white px-3 py-1 rounded-full text-xs font-semibold shadow-lg">
                                    ⭐ Featured
                                </span>
                            @endif
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">About {{ $restaurant->name }}</h2>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            {{ $restaurant->description }}
                        </p>
                        
                        @if($restaurant->atmosphere)
                            <div class="mb-6">
                                <h3 class="text-lg font-semibold text-gray-800 mb-2">Atmosphere</h3>
                                <p class="text-gray-600">{{ $restaurant->atmosphere }}</p>
                            </div>
                        @endif

                        <!-- Specialties -->
                        @if($restaurant->specialties && count($restaurant->specialties) > 0)
                            <div class="mb-6">
                                <h3 class="text-lg font-semibold text-gray-800 mb-3">Signature Dishes</h3>
                                <div class="flex flex-wrap gap-2">
                                    @foreach($restaurant->specialties as $specialty)
                                        <span class="bg-pink-100 text-pink-700 px-3 py-1 rounded-full text-sm font-medium">
                                            {{ $specialty }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>

                    <!-- Comments Section -->
                    <div class="bg-white rounded-2xl shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6">Reviews & Comments</h2>
                        <livewire:comments :model-type="\App\Models\Restaurant::class" :model-id="$restaurant->id" />
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <!-- Restaurant Info Card -->
                    <div class="bg-white rounded-2xl shadow-lg p-6 mb-8 sticky top-8">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-gray-800">Restaurant Info</h3>
                            <livewire:favorites-toggle :model-type="\App\Models\Restaurant::class" :model-id="$restaurant->id" />
                        </div>

                        <!-- Rating -->
                        <div class="flex items-center mb-4">
                            <div class="flex items-center space-x-1 mr-2">
                                @for($i = 0; $i < 5; $i++)
                                    <span class="text-yellow-400 text-lg {{ $i < floor($restaurant->rating) ? '' : 'opacity-30' }}">★</span>
                                @endfor
                            </div>
                            <span class="text-lg font-semibold text-gray-700">{{ $restaurant->rating }}</span>
                        </div>

                        <!-- Address -->
                        <div class="mb-4">
                            <h4 class="font-semibold text-gray-800 mb-2">📍 Address</h4>
                            <p class="text-gray-600 text-sm">{{ $restaurant->address }}</p>
                        </div>

                        <!-- Opening Hours -->
                        @if($restaurant->opening_hours)
                            <div class="mb-4">
                                <h4 class="font-semibold text-gray-800 mb-2">🕒 Opening Hours</h4>
                                <div class="text-sm text-gray-600">
                                    @foreach($restaurant->opening_hours as $day => $hours)
                                        <div class="flex justify-between">
                                            <span class="font-medium">{{ $day }}:</span>
                                            <span>{{ $hours }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <!-- Contact Info -->
                        <div class="mb-6">
                            @if($restaurant->phone)
                                <div class="mb-2">
                                    <h4 class="font-semibold text-gray-800 mb-1">📞 Phone</h4>
                                    <a href="tel:{{ $restaurant->phone }}" class="text-pink-600 hover:text-pink-700 text-sm">
                                        {{ $restaurant->phone }}
                                    </a>
                                </div>
                            @endif

                            @if($restaurant->website)
                                <div>
                                    <h4 class="font-semibold text-gray-800 mb-1">🌐 Website</h4>
                                    <a href="{{ $restaurant->website }}" target="_blank" class="text-pink-600 hover:text-pink-700 text-sm break-all">
                                        {{ $restaurant->website }}
                                    </a>
                                </div>
                            @endif
                        </div>

                        <!-- Action Buttons -->
                        <div class="space-y-3">
                            @if($restaurant->website)
                                <a href="{{ $restaurant->website }}" 
                                   target="_blank"
                                   class="w-full bg-gradient-to-r from-pink-500 to-purple-500 text-white py-3 px-4 rounded-lg text-center font-medium hover:from-pink-600 hover:to-purple-600 transition-all duration-300 transform hover:scale-105 block">
                                    Visit Website
                                </a>
                            @endif
                            
                            @if($restaurant->phone)
                                <a href="tel:{{ $restaurant->phone }}" 
                                   class="w-full bg-white border-2 border-pink-300 text-pink-600 py-3 px-4 rounded-lg text-center font-medium hover:bg-pink-50 transition-colors duration-300 block">
                                    Call Restaurant
                                </a>
                            @endif
                        </div>
                    </div>

                    <!-- Back to Restaurants -->
                    <div class="bg-white rounded-2xl shadow-lg p-6">
                        <a href="{{ route('restaurants.index') }}" 
                           class="flex items-center text-pink-600 hover:text-pink-700 font-medium">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            Back to Restaurants
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
