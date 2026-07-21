<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-R0FDCHEYS7"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-R0FDCHEYS7');
        </script>
        @php
            $siteTitle = trim($__env->yieldContent('title', 'CodeContent.pro | Developer Education That Helps Startups Grow'));
            $siteDescription = trim($__env->yieldContent('meta_description', 'Developer education that helps startups turn complex products into clear, adoptable experiences.'));
            $metaKeywords = trim($__env->yieldContent('meta_keywords', ''));
            $canonicalUrl = trim($__env->yieldContent('canonical_url', url()->current()));

            $ogType = trim($__env->yieldContent('og_type', 'website'));
            $ogTitle = trim($__env->yieldContent('og_title', $siteTitle));
            $ogDescription = trim($__env->yieldContent('og_description', $siteDescription));
            $ogImage = trim($__env->yieldContent('og_image', asset('favicon.svg')));

            $twitterCard = trim($__env->yieldContent('twitter_card', 'summary_large_image'));
            $twitterTitle = trim($__env->yieldContent('twitter_title', $siteTitle));
            $twitterDescription = trim($__env->yieldContent('twitter_description', $siteDescription));
            $twitterImage = trim($__env->yieldContent('twitter_image', $ogImage));

            $articlePublishedTime = trim($__env->yieldContent('article_published_time', ''));
            $articleModifiedTime = trim($__env->yieldContent('article_modified_time', ''));
            $orgSchema = [
                '@context' => 'https://schema.org',
                '@type' => 'Organization',
                'name' => 'CodeContent.pro',
                'url' => url('/'),
                'description' => 'Developer education agency helping startups and SaaS companies improve developer onboarding, activation, and adoption.',
                'email' => 'hello@codecontent.pro',
                'areaServed' => 'Global',
            ];
        @endphp
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="{{ $siteDescription }}">
        @if ($metaKeywords !== '')
            <meta name="keywords" content="{{ $metaKeywords }}">
        @endif
        <meta name="robots" content="index,follow">
        <meta name="theme-color" content="#FFFFFF">

        <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
        <link rel="alternate icon" href="{{ asset('favicon.ico') }}">

        <link rel="canonical" href="{{ $canonicalUrl }}">

        <meta property="og:type" content="{{ $ogType }}">
        <meta property="og:title" content="{{ $ogTitle }}">
        <meta property="og:description" content="{{ $ogDescription }}">
        <meta property="og:url" content="{{ $canonicalUrl }}">
        <meta property="og:site_name" content="CodeContent.pro">
        <meta property="og:image" content="{{ $ogImage }}">

        @if ($articlePublishedTime !== '')
            <meta property="article:published_time" content="{{ $articlePublishedTime }}">
        @endif

        @if ($articleModifiedTime !== '')
            <meta property="article:modified_time" content="{{ $articleModifiedTime }}">
        @endif

        <meta name="twitter:card" content="{{ $twitterCard }}">
        <meta name="twitter:title" content="{{ $twitterTitle }}">
        <meta name="twitter:description" content="{{ $twitterDescription }}">
        <meta name="twitter:image" content="{{ $twitterImage }}">

        <title>{{ $siteTitle }}</title>

        <script type="application/ld+json">{!! json_encode($orgSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
        @stack('structured_data')

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @stack('head')
    </head>
    <body class="min-h-screen">
        <a href="#main-content" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[100] focus:rounded-full focus:bg-[#FACC15] focus:px-4 focus:py-2 focus:text-sm focus:font-semibold focus:text-[#0A0A0A]">Skip to main content</a>
        <div class="relative">
            <div class="pointer-events-none absolute inset-x-0 top-0 h-[34rem] bg-[radial-gradient(circle_at_top,rgba(250,204,21,0.10),transparent_55%)]"></div>

            <x-nav />

            {{-- <main id="main-content"> --}}
            <main id="main-content">
                @yield('content')
                <div class="border-t border-[#E5E5E5]">
                    <x-email-list />
                </div>
            </main>

            
            <x-footer />
        </div>
    </body>
</html>
