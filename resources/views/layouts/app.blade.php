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

            <header class="sticky top-0 z-50 border-b border-[#E5E5E5]/80 bg-white/85 backdrop-blur">
                <div class="site-shell">
                    <div class="relative flex items-center justify-between py-4" x-data="{ mobileMenuOpen: false }">
                        <a href="{{ route('home') }}" class="flex items-center gap-3">
                            <span class="flex h-10 w-10 items-center justify-center rounded-full border border-[#E5E5E5] bg-[#F8F8F8] text-sm font-bold text-[#0A0A0A]">CC</span>
                            <span class="flex flex-col leading-none">
                                <span class="text-sm font-semibold tracking-tight text-[#0A0A0A]">CodeContent.pro</span>
                                <span class="text-xs text-[#525252]">Developer education partner</span>
                            </span>
                        </a>

                        <nav class="hidden items-center gap-8 lg:flex" aria-label="Primary">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        
                            <!-- Services Dropdown -->
                            <div class="relative group py-2">
                                <button
                                    type="button"
                                    class="nav-link inline-flex items-center gap-1"
                                >
                                    Services
                        
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4 transition-transform duration-200 group-hover:rotate-180"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                        
                                <div
                                    class="absolute left-0 top-full z-50 hidden w-64 rounded-xl border border-slate-200 bg-white p-2 shadow-xl group-hover:block"
                                >
                                    <a
                                        href="{{ route('technical-writing') }}"
                                        class="block rounded-lg px-4 py-3 text-sm text-slate-700 transition hover:bg-slate-100"
                                    >
                                        Technical Writing
                                    </a>
                        
                                    <a
                                        href="{{ route('developer-education') }}"
                                        class="block rounded-lg px-4 py-3 text-sm text-slate-700 transition hover:bg-slate-100"
                                    >
                                    Developer Education & Training
                                    </a>
                                </div>
                            </div>
                        
                            {{-- <a class="nav-link" href="#contact">Contact</a> --}}
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                            <a class="nav-link" href="{{ route('blog.index') }}">Blog</a>
                            <a class="button-primary" target="_blank" href="https://calendly.com/moses-codecontent/30min">Book a call</a>
                        </nav>

                        

                        <button
                            type="button"
                            class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-[#E5E5E5] bg-white text-[#0A0A0A] lg:hidden"
                            @click="mobileMenuOpen = ! mobileMenuOpen"
                            :aria-expanded="mobileMenuOpen.toString()"
                            aria-label="Toggle navigation"
                        >
                            <svg x-show="!mobileMenuOpen" x-cloak class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="M4 7h16M4 12h16M4 17h16" stroke-linecap="round" />
                            </svg>
                            <svg x-show="mobileMenuOpen" x-cloak class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="M6 6l12 12M18 6L6 18" stroke-linecap="round" />
                            </svg>
                        </button>

                        <div x-cloak x-show="mobileMenuOpen" x-transition class="absolute left-0 right-0 top-full border-b border-[#E5E5E5] bg-white shadow-[0_16px_40px_rgba(0,0,0,0.06)] lg:hidden">
                            <div class="site-shell py-4">
                                <div class="flex flex-col gap-4">
                                    <a class="nav-link" href="{{  route('home')  }}" @click="mobileMenuOpen = false">Home</a>

                                    <div x-data="{ open: false }" class="relative">

                                        <button
                                            @click="open = !open"
                                            class="flex w-full items-center justify-between"
                                        >
                                            <span>Services</span>
                                    
                                            <svg
                                                class="h-4 w-4 transition"
                                                :class="{ 'rotate-180': open }"
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor"
                                            >
                                                <path stroke-linecap="round"
                                                      stroke-linejoin="round"
                                                      stroke-width="2"
                                                      d="M19 9l-7 7-7-7"/>
                                            </svg>
                                        </button>
                                    
                                        <div
                                            x-show="open"
                                            x-transition
                                            class="mt-2 pl-4 space-y-2"
                                        >
                                            <a href="{{ route('technical-writing') }}" class="block py-2">
                                                Technical Writing
                                            </a>
                                    
                                            <a href="{{ route('developer-education') }}" class="block py-2">
                                                Developer Education & Training
                                            </a>
                                        </div>
                                    
                                    </div>

                                    <a class="nav-link" href="{{ route('about') }}" @click="mobileMenuOpen = false">About</a>
                                    <a class="nav-link" href="{{ route('blog.index') }}" @click="mobileMenuOpen = false">Blog</a>
                                    <a class="button-primary w-full sm:w-fit" target="_blank" href="https://calendly.com/moses-codecontent/30min" @click="mobileMenuOpen = false">Book a call</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <main id="main-content">
                @yield('content')
            </main>

            <footer class="border-t border-[#E5E5E5] bg-white">
                <div class="site-shell py-8">
                    <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
                        <div class="max-w-2xl">
                            <p class="text-sm text-[#525252]">CodeContent.pro helps SaaS teams ship developer education that clarifies, activates, and retains users.</p>
                            <p class="mt-2 text-sm text-[#525252]">Premium. Minimal. Built for developers.</p>
                        </div>

                        <div class="flex flex-wrap items-center gap-x-5 gap-y-3 text-sm text-[#525252]">
                            <a class="hover:text-[#0A0A0A]" href="{{ route('home') }}">Home</a>
                            <a class="hover:text-[#0A0A0A]" href="{{ route('technical-writing') }}">Services</a>
                            <a class="hover:text-[#0A0A0A]" href="{{ route('about') }}">About</a>
                            <a class="hover:text-[#0A0A0A]" href="{{ route('blog.index') }}">Blog</a>
                            <a class="hover:text-[#0A0A0A]" href="{{ route('authors.index') }}">Authors</a>
                            
                            {{-- <a class="hover:text-[#0A0A0A]" href="mailto:hello@codecontent.pro">moses@codecontent.pro</a> --}}
                        </div>
                    </div>

                    <div class="mt-6 border-t border-[#E5E5E5] pt-4">
                        <p class="text-xs uppercase tracking-[0.18em] text-[#525252]">&copy; {{ now()->year }} CodeContent.pro</p>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
