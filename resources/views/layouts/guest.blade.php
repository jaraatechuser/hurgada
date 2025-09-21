<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Poppins:300,400,500,600,700&family=Dancing+Script:400,500,600,700&family=Playfair+Display:400,500,600,700&family=Crimson+Text:400,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased feminine-italic">
        <!-- Background with floating bubbles -->
        <div class="min-h-screen relative overflow-hidden pastel-bg">
            <!-- Floating decorative bubbles -->
            <div class="hero-bubble w-16 h-16 sm:w-32 sm:h-32 top-10 left-4 sm:left-10 animate-float"></div>
            <div class="hero-bubble w-12 h-12 sm:w-24 sm:h-24 top-1/3 right-4 sm:right-16 animate-float" style="animation-delay: -2s;"></div>
            <div class="hero-bubble w-20 h-20 sm:w-40 sm:h-40 bottom-20 left-1/4 animate-float" style="animation-delay: -4s;"></div>
            <div class="hero-bubble w-10 h-10 sm:w-20 sm:h-20 top-1/2 right-1/3 animate-float" style="animation-delay: -1s;"></div>
            
            <!-- Main content -->
            <div class="relative z-10 min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
                <!-- Logo section -->
                <div class="mb-6 sm:mb-8">
                    <a href="/" class="block transform hover:scale-105 transition-transform duration-300">
                        <div class="w-20 h-20 sm:w-24 sm:h-24 mx-auto bg-white/80 backdrop-blur-sm rounded-full shadow-soft flex items-center justify-center">
                            <x-application-logo class="w-12 h-12 sm:w-16 sm:h-16 fill-current text-rose-500" />
                        </div>
                        <h1 class="text-center mt-3 sm:mt-4 text-xl sm:text-2xl font-semibold text-rose-800 font-serif italic">
                            Welcome to Hurghada
                        </h1>
                    </a>
                </div>

                <!-- Auth form container -->
                <div class="w-full sm:max-w-md mx-4">
                    <div class="bg-white/90 backdrop-blur-sm shadow-soft rounded-3xl p-6 sm:p-8 border border-rose-100/50">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <x-footer />
    </body>
</html>
