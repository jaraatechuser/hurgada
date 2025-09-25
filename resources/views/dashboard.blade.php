<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="font-semibold text-2xl text-rose-700 dark:text-rose-300 leading-tight">
                    {{ __('Welcome,') }} {{ $user->name }} 🌸
                </h2>
                <p class="text-sm text-rose-500 dark:text-rose-300/80">A little oasis to plan your Red Sea dreams.</p>
            </div>
            <a href="{{ route('profile.edit') }}" class="inline-flex items-center rounded-full bg-rose-500 text-white px-4 py-2 text-sm hover:bg-rose-600 transition">
                ✨ {{ __('Edit profile') }}
            </a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="col-span-1 md:col-span-2 space-y-6">
                    <div class="bg-white dark:bg-gray-800/60 backdrop-blur shadow-sm rounded-2xl p-6 border border-rose-100 dark:border-rose-900/50">
                        <h3 class="text-rose-600 dark:text-rose-300 font-semibold mb-4">{{ __('Your favorites') }}</h3>
                        @if($favorites->isEmpty())
                            <p class="text-sm text-rose-400">{{ __('No favorites yet. Explore attractions, events, and blogs to add some!') }}</p>
                        @else
                            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4">
                                @foreach($favorites as $fav)
                                    @php($model = $fav->favoritable)
                                    <a href="{{ isset($model->slug) ? url((class_basename($model)::lower()) . '/' . $model->slug) : '#' }}" class="block rounded-xl border border-rose-100 dark:border-rose-900/50 p-4 hover:shadow-md transition">
                                        <div class="text-xs uppercase tracking-wide text-rose-400">{{ class_basename($model) }}</div>
                                        <div class="mt-1 font-medium text-gray-800 dark:text-gray-100 line-clamp-2">
                                            {{ $model->title ?? $model->name ?? __('Favorite') }}
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        @endif
                    </div>

                    <div class="bg-white dark:bg-gray-800/60 backdrop-blur shadow-sm rounded-2xl p-6 border border-rose-100 dark:border-rose-900/50">
                        <h3 class="text-rose-600 dark:text-rose-300 font-semibold mb-4">{{ __('Your recent comments') }}</h3>
                        @if($recentComments->isEmpty())
                            <p class="text-sm text-rose-400">{{ __('You have not commented yet.') }}</p>
                        @else
                            <ul class="space-y-3">
                                @foreach($recentComments as $comment)
                                    <li class="p-4 rounded-xl border border-rose-100 dark:border-rose-900/50">
                                        <div class="text-xs text-rose-400">{{ $comment->created_at->diffForHumans() }}</div>
                                        <div class="mt-1 text-gray-800 dark:text-gray-100">{{ $comment->content }}</div>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="bg-gradient-to-br from-rose-50 to-pink-50 dark:from-rose-900/30 dark:to-pink-900/20 rounded-2xl p-6 border border-rose-100 dark:border-rose-900/50">
                        <h3 class="text-rose-700 dark:text-rose-300 font-semibold mb-3">{{ __('Upcoming events') }}</h3>
                        @if($upcomingEvents->isEmpty())
                            <p class="text-sm text-rose-400">{{ __('No events on the horizon just yet.') }}</p>
                        @else
                            <ul class="space-y-3">
                                @foreach($upcomingEvents as $event)
                                    <li>
                                        <a href="{{ route('events.show', $event) }}" class="block p-3 rounded-xl hover:bg-rose-50 dark:hover:bg-rose-900/20 transition">
                                            <div class="font-medium text-gray-800 dark:text-gray-100">{{ $event->title }}</div>
                                            <div class="text-xs text-rose-500">{{ $event->starts_at->format('M d, Y H:i') }} · {{ $event->location }}</div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                    <div class="bg-white dark:bg-gray-800/60 rounded-2xl p-6 border border-rose-100 dark:border-rose-900/50">
                        <h3 class="text-rose-700 dark:text-rose-300 font-semibold mb-3">{{ __('Suggestions for you') }}</h3>
                        <div class="space-y-4">
                            <div>
                                <div class="text-xs uppercase tracking-wide text-rose-400">{{ __('Attractions') }}</div>
                                <div class="mt-2 flex flex-wrap gap-2">
                                    @foreach($suggestedAttractions as $a)
                                        <a class="px-3 py-1 rounded-full bg-rose-100 text-rose-700 dark:bg-rose-900/30 dark:text-rose-200 text-xs hover:bg-rose-200" href="{{ route('attractions.show', $a) }}">{{ $a->name }}</a>
                                    @endforeach
                                </div>
                            </div>
                            <div>
                                <div class="text-xs uppercase tracking-wide text-rose-400">{{ __('Latest blogs') }}</div>
                                <div class="mt-2 space-y-2">
                                    @foreach($suggestedBlogs as $b)
                                        <a class="block text-sm text-rose-700 dark:text-rose-300 hover:underline" href="{{ route('blog.show', $b) }}">{{ $b->title }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800/60 rounded-2xl p-6 border border-rose-100 dark:border-rose-900/50">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-rose-700 dark:text-rose-300 font-semibold">{{ __('Hurghada Moodboard') }}</h3>
                    <span class="text-xs text-rose-400">{{ __('Sunrises, sunsets, desert & sea vibes') }}</span>
                </div>
                @if($moodboardImages->isEmpty())
                    <p class="text-sm text-rose-400">{{ __('No images found yet.') }}</p>
                @else
                    <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-8 gap-3">
                        @foreach($moodboardImages as $img)
                            <div class="aspect-square overflow-hidden rounded-xl ring-1 ring-rose-100 dark:ring-rose-900/50">
                                <img src="{{ $img }}" alt="mood" class="w-full h-full object-cover hover:scale-105 transition" />
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
