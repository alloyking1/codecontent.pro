<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', 'Admin Dashboard | CodeContent.pro')</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-white text-[#0A0A0A] antialiased">
        <div class="pointer-events-none fixed inset-x-0 top-0 h-80 bg-[radial-gradient(circle_at_top,rgba(250,204,21,0.10),transparent_58%)]"></div>

        <header class="relative z-30 border-b border-[#E5E5E5]/90 bg-white/90 backdrop-blur">
            <div class="site-shell">
                <div class="flex flex-wrap items-center justify-between gap-4 py-4">
                    <div class="flex items-center gap-3">
                        <span class="flex h-10 w-10 items-center justify-center rounded-full border border-[#E5E5E5] bg-[#F8F8F8] text-sm font-bold">CC</span>
                        <div>
                            <p class="text-sm font-semibold tracking-tight">CodeContent.pro</p>
                            <p class="text-xs text-muted">Admin</p>
                        </div>
                    </div>

                    <nav class="flex flex-wrap items-center gap-3 sm:gap-6" aria-label="Admin navigation">
                        <a href="{{ route('admin.dashboard') }}" class="text-sm font-medium transition {{ request()->routeIs('admin.dashboard') ? 'text-[#0A0A0A]' : 'text-muted hover:text-[#0A0A0A]' }}">Dashboard</a>
                        <a href="{{ route('admin.posts.index') }}" class="text-sm font-medium transition {{ request()->routeIs('admin.posts.*') ? 'text-[#0A0A0A]' : 'text-muted hover:text-[#0A0A0A]' }}">Posts</a>
                        <a href="{{ route('admin.categories.index') }}" class="text-sm font-medium transition {{ request()->routeIs('admin.categories.*') ? 'text-[#0A0A0A]' : 'text-muted hover:text-[#0A0A0A]' }}">Categories</a>
                        <a href="{{ route('home') }}" class="text-sm font-medium text-muted transition hover:text-[#0A0A0A]">View site</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="button-secondary px-4 py-2 text-xs uppercase tracking-[0.14em]">Logout</button>
                        </form>
                    </nav>
                </div>
            </div>
        </header>

        <main class="relative z-20 py-10 sm:py-12">
            <div class="site-shell">
                @yield('content')
            </div>
        </main>
    </body>
</html>
