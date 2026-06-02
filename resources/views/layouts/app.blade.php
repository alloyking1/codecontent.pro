<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @php
            $siteTitle = trim($__env->yieldContent('title', 'CodeContent.pro | Developer Education That Helps Startups Grow'));
            $siteDescription = trim($__env->yieldContent('meta_description', 'Developer education that helps startups turn complex products into clear, adoptable experiences.'));
            $canonicalUrl = url()->current();
            $shareImage = asset('favicon.svg');
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
        <meta name="description" content="{{ $siteDescription }}">
        <meta name="robots" content="index,follow">
        <meta name="theme-color" content="#FFFFFF">

        <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
        <link rel="alternate icon" href="{{ asset('favicon.ico') }}">

        <link rel="canonical" href="{{ $canonicalUrl }}">

        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ $siteTitle }}">
        <meta property="og:description" content="{{ $siteDescription }}">
        <meta property="og:url" content="{{ $canonicalUrl }}">
        <meta property="og:site_name" content="CodeContent.pro">
        <meta property="og:image" content="{{ $shareImage }}">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $siteTitle }}">
        <meta name="twitter:description" content="{{ $siteDescription }}">
        <meta name="twitter:image" content="{{ $shareImage }}">

        <title>{{ $siteTitle }}</title>

        <script type="application/ld+json">{!! json_encode($orgSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>

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
                            <a class="nav-link" href="#hero">Home</a>
                            <a class="nav-link" href="#services">Services</a>
                            <a class="nav-link" href="#why-education">Why Education</a>
                            <a class="nav-link" href="#trusted-experience">Portfolio</a>
                            <a class="nav-link" href="#process">Process</a>
                            <a class="nav-link" href="#starter-offer">Starter Offer</a>
                            
                            <a class="nav-link" href="#founder-story">About</a>
                            <a class="nav-link" href="#contact">Contact</a>
                            <a class="button-primary" href="#contact">Book a call</a>
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
                                    <a class="nav-link" href="#hero" @click="mobileMenuOpen = false">Home</a>
                                    <a class="nav-link" href="#services" @click="mobileMenuOpen = false">Services</a>
                                    <a class="nav-link" href="#why-education" @click="mobileMenuOpen = false">Why Education</a>
                                    <a class="nav-link" href="#process" @click="mobileMenuOpen = false">Process</a>
                                    <a class="nav-link" href="#starter-offer" @click="mobileMenuOpen = false">Starter Offer</a>
                                    <a class="nav-link" href="#trusted-experience" @click="mobileMenuOpen = false">Portfolio</a>
                                    <a class="nav-link" href="#founder-story" @click="mobileMenuOpen = false">About</a>
                                    <a class="nav-link" href="#contact" @click="mobileMenuOpen = false">Contact</a>
                                    <a class="button-primary w-full sm:w-fit" href="#contact" @click="mobileMenuOpen = false">Book a call</a>
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
                            <a class="hover:text-[#0A0A0A]" href="#services">Services</a>
                            <a class="hover:text-[#0A0A0A]" href="#starter-offer">Starter Offer</a>
                            <a class="hover:text-[#0A0A0A]" href="#process">Process</a>
                            <a class="hover:text-[#0A0A0A]" href="#contact">Contact</a>
                            <a class="hover:text-[#0A0A0A]" href="mailto:hello@codecontent.pro">moses@codecontent.pro</a>
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