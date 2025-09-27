<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'Hurghada Egypt - Red Sea Paradise | Attractions, Events & Tourism Guide')</title>
        
        <!-- Meta Description -->
        <meta name="description" content="@yield('description', 'Discover Hurghada, Egypt\'s premier Red Sea destination. Explore world-class diving, stunning beaches, desert safaris, luxury resorts, and vibrant nightlife. Your complete guide to attractions, events, and unforgettable experiences in Hurghada.')">
        
        <!-- Meta Keywords -->
        <meta name="keywords" content="Hurghada, Egypt, Red Sea, diving, snorkeling, beach resort, desert safari, tourism, attractions, events, vacation, holiday, coral reefs, marine life, luxury hotels, nightlife, shopping, Hurghada airport, El Gouna, Makadi Bay, Sahl Hasheesh, Old Town, Marina, Souk">
        
        <!-- Author -->
        <meta name="author" content="Hurghada Tourism Guide">
        
        <!-- Robots -->
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
        
        <!-- Canonical URL -->
        <link rel="canonical" href="@yield('canonical', url()->current())">
        
        <!-- Open Graph Meta Tags -->
        <meta property="og:type" content="website">
        <meta property="og:title" content="@yield('og_title', 'Hurghada Egypt - Red Sea Paradise | Tourism Guide')">
        <meta property="og:description" content="@yield('og_description', 'Discover Hurghada, Egypt\'s premier Red Sea destination. Explore world-class diving, stunning beaches, desert safaris, and luxury resorts.')">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:site_name" content="Hurghada Tourism Guide">
        <meta property="og:image" content="@yield('og_image', asset('galleries/hurghada_beach_resort.jpg'))">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta property="og:image:alt" content="Beautiful Hurghada beach resort view">
        <meta property="og:locale" content="en_US">
        
        <!-- Twitter Card Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="@yield('twitter_title', 'Hurghada Egypt - Red Sea Paradise')">
        <meta name="twitter:description" content="@yield('twitter_description', 'Discover Hurghada\'s world-class diving, stunning beaches, desert safaris, and luxury resorts.')">
        <meta name="twitter:image" content="@yield('twitter_image', asset('galleries/hurghada_beach_resort.jpg'))">
        <meta name="twitter:image:alt" content="Beautiful Hurghada beach resort view">
        
        <!-- Additional SEO Meta Tags -->
        <meta name="geo.region" content="EG-RED">
        <meta name="geo.placename" content="Hurghada, Red Sea, Egypt">
        <meta name="geo.position" content="27.2574;33.8129">
        <meta name="ICBM" content="27.2574, 33.8129">
        
        <!-- Theme Color -->
        <meta name="theme-color" content="#1e40af">
        <meta name="msapplication-TileColor" content="#1e40af">
        
        <!-- Language and Region -->
        <meta name="language" content="English">
        <meta name="revisit-after" content="7 days">
        
        <!-- Mobile App Meta Tags -->
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <meta name="apple-mobile-web-app-title" content="Hurghada Guide">
        
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon.ico') }}">
        
        <!-- JSON-LD Structured Data -->
        @hasSection('structured_data')
            @yield('structured_data')
        @else
        <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'TouristDestination',
            'name' => 'Hurghada',
            'description' => 'Hurghada is a beautiful resort town on the Red Sea coast of Egypt, known for its world-class diving, stunning beaches, and luxury resorts.',
            'url' => url('/'),
            'image' => asset('galleries/hurghada_beach_resort.jpg'),
            'geo' => [
                '@type' => 'GeoCoordinates',
                'latitude' => '27.2574',
                'longitude' => '33.8129'
            ],
            'address' => [
                '@type' => 'PostalAddress',
                'addressLocality' => 'Hurghada',
                'addressRegion' => 'Red Sea',
                'addressCountry' => 'Egypt'
            ],
            'touristType' => ['Diving', 'Beach', 'Desert Safari', 'Cultural', 'Adventure'],
            'amenityFeature' => [
                [
                    '@type' => 'LocationFeatureSpecification',
                    'name' => 'Diving Centers',
                    'value' => true
                ],
                [
                    '@type' => 'LocationFeatureSpecification', 
                    'name' => 'Beach Access',
                    'value' => true
                ],
                [
                    '@type' => 'LocationFeatureSpecification',
                    'name' => 'Luxury Resorts',
                    'value' => true
                ],
                [
                    '@type' => 'LocationFeatureSpecification',
                    'name' => 'Desert Safari Tours',
                    'value' => true
                ]
            ],
            'sameAs' => [
                'https://www.facebook.com/hurghada',
                'https://www.instagram.com/hurghada'
            ]
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
        </script>
        @endif

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Poppins:300,400,500,600,700&family=Dancing+Script:400,500,600,700&family=Playfair+Display:400,500,600,700&family=Crimson+Text:400,600&display=swap" rel="stylesheet" />

        <!-- Swiper CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
            (function(m,e,t,r,i,k,a){
                m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
                m[i].l=1*new Date();
                for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
                k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
            })(window, document,'script','https://mc.yandex.ru/metrika/tag.js?id=104292498', 'ym');

            ym(104292498, 'init', {ssr:true, webvisor:true, clickmap:true, ecommerce:"dataLayer", accurateTrackBounce:true, trackLinks:true});
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/104292498" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->


        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-MQ4M89B4');</script>
        <!-- End Google Tag Manager -->


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    </head>
    <body class="font-sans antialiased feminine-italic">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MQ4M89B4"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <!-- Footer -->
            <x-footer />
        </div>
    </body>
</html>
