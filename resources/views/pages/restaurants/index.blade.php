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
                        Best Restaurants in Hurghada
                    </h1>
                    <p class="text-lg md:text-xl text-pink-700 max-w-3xl mx-auto leading-relaxed">
                        Savor the flavors of the Red Sea coast. From fresh seafood to authentic Egyptian cuisine, 
                        discover the finest dining experiences in Hurghada.
                    </p>
                </div>
            </div>
        </div>

        <!-- Restaurants Grid -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($restaurants as $restaurant)
                    <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 overflow-hidden">
                        <!-- Restaurant Image -->
                        <div class="relative h-48 overflow-hidden">
                            <img 
                                src="{{ $restaurant->image_url }}" 
                                alt="{{ $restaurant->name }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                loading="lazy"
                            >
                            <div class="absolute top-4 right-4">
                                @if($restaurant->is_featured)
                                    <span class="bg-gradient-to-r from-pink-500 to-purple-500 text-white px-3 py-1 rounded-full text-xs font-semibold shadow-lg">
                                        ⭐ Featured
                                    </span>
                                @endif
                            </div>
                            <div class="absolute bottom-4 left-4">
                                <div class="flex items-center space-x-1">
                                    @for($i = 0; $i < 5; $i++)
                                        <span class="text-yellow-400 text-lg {{ $i < floor($restaurant->rating) ? '' : 'opacity-30' }}">★</span>
                                    @endfor
                                </div>
                            </div>
                        </div>

                        <!-- Restaurant Content -->
                        <div class="p-6">
                            <div class="flex items-start justify-between mb-3">
                                <div class="flex-1">
                                    <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-pink-600 transition-colors duration-300">
                                        {{ $restaurant->name }}
                                    </h3>
                                    <p class="text-sm text-pink-500 font-medium mb-2">{{ $restaurant->cuisine_type }}</p>
                                </div>
                                <livewire:favorites-toggle :model-type="\App\Models\Restaurant::class" :model-id="$restaurant->id" />
                            </div>

                            <p class="text-gray-600 text-sm leading-relaxed mb-4 line-clamp-3">
                                {{ Str::limit($restaurant->description, 120) }}
                            </p>

                            <!-- Rating and Price -->
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center space-x-2">
                                    <div class="flex items-center">
                                        <span class="text-yellow-400 mr-1">★</span>
                                        <span class="text-sm font-medium text-gray-700">{{ $restaurant->rating }}</span>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <span class="text-lg font-bold text-pink-600">{{ $restaurant->price_range }}</span>
                                </div>
                            </div>

                            <!-- Specialties -->
                            <div class="mb-4">
                                <div class="flex flex-wrap gap-1">
                                    @foreach(array_slice($restaurant->specialties ?? [], 0, 4) as $specialty)
                                        <span class="bg-pink-100 text-pink-700 px-2 py-1 rounded-full text-xs">
                                            {{ $specialty }}
                                        </span>
                                    @endforeach
                                    @if(count($restaurant->specialties ?? []) > 4)
                                        <span class="bg-gray-100 text-gray-600 px-2 py-1 rounded-full text-xs">
                                            +{{ count($restaurant->specialties) - 4 }} more
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex space-x-3">
                                <a href="{{ route('restaurants.show', $restaurant) }}" 
                                   class="flex-1 bg-gradient-to-r from-pink-500 to-purple-500 text-white py-2 px-4 rounded-lg text-center font-medium hover:from-pink-600 hover:to-purple-600 transition-all duration-300 transform hover:scale-105">
                                    View Details
                                </a>
                                @if($restaurant->website)
                                    <a href="{{ $restaurant->website }}" 
                                       target="_blank"
                                       class="bg-white border-2 border-pink-300 text-pink-600 py-2 px-4 rounded-lg font-medium hover:bg-pink-50 transition-colors duration-300">
                                        Website
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-12 flex justify-center">
                <div class="bg-white rounded-xl shadow-lg p-4">
                    {{ $restaurants->links() }}
                </div>
            </div>
        </div>

        <!-- Call to Action Section -->
        <div class="bg-gradient-to-r from-pink-100 to-purple-100 py-16">
            <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-pink-600 mb-4">Ready to Dine in Paradise?</h2>
                <p class="text-lg text-pink-700 mb-8">
                    Experience the culinary delights of Hurghada and discover why our restaurants are loved by locals and visitors alike.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact.index') }}" 
                       class="bg-gradient-to-r from-pink-500 to-purple-500 text-white py-3 px-8 rounded-lg font-semibold hover:from-pink-600 hover:to-purple-600 transition-all duration-300 transform hover:scale-105">
                        Get Dining Recommendations
                    </a>
                    <a href="{{ route('attractions.index') }}" 
                       class="bg-white border-2 border-pink-300 text-pink-600 py-3 px-8 rounded-lg font-semibold hover:bg-pink-50 transition-colors duration-300">
                        Explore More Attractions
                    </a>
                </div>
            </div>
        </div>
    </div>

    <style>
        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
</x-app-layout>
