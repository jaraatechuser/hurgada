<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Page Not Found - Hurghada</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Poppins:300,400,500,600,700&family=Dancing+Script:400,500,600,700&family=Playfair+Display:400,500,600,700&family=Crimson+Text:400,600&display=swap" rel="stylesheet" />
    
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        .floating-elements {
            position: relative;
            overflow: hidden;
        }
        
        .floating-elements::before,
        .floating-elements::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(251, 113, 133, 0.1), rgba(244, 114, 182, 0.1));
            animation: float 8s ease-in-out infinite;
        }
        
        .floating-elements::before {
            width: 200px;
            height: 200px;
            top: 10%;
            left: 10%;
            animation-delay: -2s;
        }
        
        .floating-elements::after {
            width: 150px;
            height: 150px;
            top: 60%;
            right: 15%;
            animation-delay: -4s;
        }
        
        @keyframes float {
            0%, 100% { 
                transform: translateY(0) translateX(0) rotate(0deg); 
                opacity: 0.3;
            }
            25% { 
                transform: translateY(-20px) translateX(10px) rotate(90deg); 
                opacity: 0.6;
            }
            50% { 
                transform: translateY(-10px) translateX(-15px) rotate(180deg); 
                opacity: 0.4;
            }
            75% { 
                transform: translateY(-30px) translateX(5px) rotate(270deg); 
                opacity: 0.7;
            }
        }
        
        .gentle-bounce {
            animation: gentleBounce 3s ease-in-out infinite;
        }
        
        @keyframes gentleBounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        .text-gradient {
            background: linear-gradient(135deg, #f43f5e, #ec4899, #be185d);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .soft-glow {
            box-shadow: 0 0 30px rgba(244, 114, 182, 0.2), 0 0 60px rgba(236, 72, 153, 0.1);
        }
        
        @media (max-width: 640px) {
            .floating-elements::before {
                width: 120px;
                height: 120px;
            }
            
            .floating-elements::after {
                width: 80px;
                height: 80px;
            }
        }
    </style>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gradient-to-br from-rose-50 via-pink-50 to-white dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">
        <!-- Navigation -->
        <nav class="bg-white/80 backdrop-blur-sm shadow-sm border-b border-rose-100 dark:bg-gray-800/80 dark:border-gray-700">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <div class="flex items-center">
                        <a href="{{ route('home') }}" class="text-2xl font-bold text-gradient font-serif italic">
                            Hurghada
                        </a>
                    </div>
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('home') }}" class="text-rose-600 hover:text-rose-700 font-medium transition-colors duration-200">
                            Home
                        </a>
                        <a href="{{ route('attractions.index') }}" class="text-rose-600 hover:text-rose-700 font-medium transition-colors duration-200">
                            Attractions
                        </a>
                        <a href="{{ route('gallery.index') }}" class="text-rose-600 hover:text-rose-700 font-medium transition-colors duration-200">
                            Gallery
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="floating-elements">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24">
                <div class="text-center">
                    <!-- 404 Number with Elegant Styling -->
                    <div class="mb-8">
                        <h1 class="text-8xl sm:text-9xl font-bold text-gradient font-serif italic gentle-bounce">
                            404
                        </h1>
                        <div class="w-24 h-1 bg-gradient-to-r from-rose-400 to-pink-500 mx-auto mt-4 rounded-full"></div>
                    </div>

                    <!-- Main Message -->
                    <div class="mb-12">
                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-800 dark:text-gray-100 mb-6 font-serif italic">
                            Oops! This page seems to have
                            <span class="text-gradient block mt-2">drifted away like a gentle breeze</span>
                        </h2>
                        <p class="text-lg sm:text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto leading-relaxed font-serif italic">
                            The page you're looking for might have been moved, deleted, or perhaps it's taking a little vacation in the beautiful waters of the Red Sea.
                        </p>
                    </div>

                    <!-- Decorative Elements -->
                    <div class="flex justify-center items-center space-x-4 mb-12">
                        <div class="w-2 h-2 bg-rose-300 rounded-full animate-pulse"></div>
                        <div class="w-3 h-3 bg-pink-300 rounded-full animate-pulse" style="animation-delay: 0.5s;"></div>
                        <div class="w-2 h-2 bg-rose-300 rounded-full animate-pulse" style="animation-delay: 1s;"></div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-16">
                        <a href="{{ route('home') }}" 
                           class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-rose-400 to-pink-500 hover:from-rose-500 hover:to-pink-600 text-white font-medium rounded-2xl shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 font-serif italic">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            Return Home
                        </a>
                        
                        <button onclick="history.back()" 
                                class="inline-flex items-center px-8 py-4 bg-white/80 backdrop-blur-sm border-2 border-rose-200 hover:border-rose-300 text-rose-600 hover:text-rose-700 font-medium rounded-2xl shadow-sm hover:shadow-md transform hover:scale-105 transition-all duration-300 font-serif italic">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            Go Back
                        </button>
                    </div>

                    <!-- Helpful Links -->
                    <div class="bg-white/60 backdrop-blur-sm rounded-3xl p-8 shadow-soft border border-rose-100/50 max-w-2xl mx-auto">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-100 mb-6 font-serif italic">
                            Perhaps you were looking for:
                        </h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <a href="{{ route('attractions.index') }}" 
                               class="flex items-center p-4 bg-rose-50 hover:bg-rose-100 rounded-2xl transition-colors duration-200 group">
                                <div class="w-10 h-10 bg-rose-200 rounded-full flex items-center justify-center mr-3 group-hover:bg-rose-300 transition-colors duration-200">
                                    <svg class="w-5 h-5 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-medium text-rose-800 group-hover:text-rose-900 font-serif italic">Attractions</div>
                                    <div class="text-sm text-rose-600">Discover beautiful places</div>
                                </div>
                            </a>
                            
                            <a href="{{ route('gallery.index') }}" 
                               class="flex items-center p-4 bg-pink-50 hover:bg-pink-100 rounded-2xl transition-colors duration-200 group">
                                <div class="w-10 h-10 bg-pink-200 rounded-full flex items-center justify-center mr-3 group-hover:bg-pink-300 transition-colors duration-200">
                                    <svg class="w-5 h-5 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-medium text-pink-800 group-hover:text-pink-900 font-serif italic">Gallery</div>
                                    <div class="text-sm text-pink-600">Beautiful photos</div>
                                </div>
                            </a>
                            
                            <a href="{{ route('events.index') }}" 
                               class="flex items-center p-4 bg-rose-50 hover:bg-rose-100 rounded-2xl transition-colors duration-200 group">
                                <div class="w-10 h-10 bg-rose-200 rounded-full flex items-center justify-center mr-3 group-hover:bg-rose-300 transition-colors duration-200">
                                    <svg class="w-5 h-5 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-medium text-rose-800 group-hover:text-rose-900 font-serif italic">Events</div>
                                    <div class="text-sm text-rose-600">Upcoming activities</div>
                                </div>
                            </a>
                            
                            <a href="{{ route('contact.index') }}" 
                               class="flex items-center p-4 bg-pink-50 hover:bg-pink-100 rounded-2xl transition-colors duration-200 group">
                                <div class="w-10 h-10 bg-pink-200 rounded-full flex items-center justify-center mr-3 group-hover:bg-pink-300 transition-colors duration-200">
                                    <svg class="w-5 h-5 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-medium text-pink-800 group-hover:text-pink-900 font-serif italic">Contact</div>
                                    <div class="text-sm text-pink-600">Get in touch</div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Decorative Quote -->
                    <div class="mt-16 max-w-3xl mx-auto">
                        <blockquote class="text-lg sm:text-xl text-gray-600 dark:text-gray-300 italic font-serif leading-relaxed">
                            "Every journey has its detours, but the destination remains beautiful. 
                            <span class="text-gradient font-semibold">Let's find your way back to paradise.</span>"
                        </blockquote>
                        <div class="flex justify-center mt-4">
                            <div class="w-16 h-px bg-gradient-to-r from-transparent via-rose-300 to-transparent"></div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-white/80 backdrop-blur-sm border-t border-rose-100 dark:bg-gray-800/80 dark:border-gray-700">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <div class="text-center">
                    <p class="text-gray-600 dark:text-gray-300 font-serif italic">
                        © {{ date('Y') }} Hurghada. Made with <span class="text-rose-500">♥</span> for travelers.
                    </p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
