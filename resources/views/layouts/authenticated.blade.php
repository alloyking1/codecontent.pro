<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'CodeContent.pro') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-white text-[#0A0A0A] antialiased">
        <div class="pointer-events-none fixed inset-x-0 top-0 h-80 bg-[radial-gradient(circle_at_top,rgba(250,204,21,0.10),transparent_58%)]"></div>

        <div class="relative z-20 min-h-screen">
            <header class="border-b border-[#E5E5E5]/90 bg-white/90 backdrop-blur">
                <div class="site-shell">
                    <div class="flex flex-wrap items-center justify-between gap-4 py-4">
                        <a href="{{ route('home') }}" class="flex items-center gap-3">
                            <span class="flex h-10 w-10 items-center justify-center rounded-full border border-[#E5E5E5] bg-[#F8F8F8] text-sm font-bold">CC</span>
                            <span class="text-sm font-semibold tracking-tight">CodeContent.pro</span>
                        </a>

                        <nav class="flex flex-wrap items-center gap-3 sm:gap-6" aria-label="Authenticated navigation">
                            <a href="{{ route('admin.dashboard') }}" class="text-sm font-medium text-[#0A0A0A]">Admin</a>
                            <a href="{{ route('profile.edit') }}" class="text-sm font-medium text-[#525252] transition hover:text-[#0A0A0A]">Profile</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="button-secondary px-4 py-2 text-xs uppercase tracking-[0.14em]">Logout</button>
                            </form>
                        </nav>
                    </div>
                </div>
            </header>

            @isset($header)
                <section class="pt-8 sm:pt-10">
                    <div class="site-shell">
                        <div class="card p-6 sm:p-8">
                            {{ $header }}
                        </div>
                    </div>
                </section>
            @endisset

            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
