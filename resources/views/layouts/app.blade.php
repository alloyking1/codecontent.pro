<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Developer education that helps startups turn complex products into clear, adoptable experiences.">

        <title>@yield('title', 'CodeContent.pro | Developer Education That Helps Startups Grow')</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @stack('head')
    </head>
    <body class="min-h-screen">
        <div class="relative overflow-hidden">
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

                        <nav class="hidden items-center gap-8 lg:flex">
                            <a class="nav-link" href="#hero">Home</a>
                            <a class="nav-link" href="#services">Services</a>
                            <a class="nav-link" href="#why-education">Why Education</a>
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
                                    <a class="nav-link" href="#contact" @click="mobileMenuOpen = false">Contact</a>
                                    <a class="button-primary w-full sm:w-fit" href="#contact" @click="mobileMenuOpen = false">Book a call</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <main>
                @yield('content')
            </main>

            <footer class="border-t border-[#E5E5E5] bg-white">
                <div class="site-shell py-8">
                    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                        <p class="text-sm text-[#525252]">CodeContent.pro helps SaaS teams ship developer education that clarifies, activates, and retains users.</p>
                        <p class="text-sm text-[#525252]">Premium. Minimal. Built for developers.</p>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>