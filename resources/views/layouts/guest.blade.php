<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'Sign In | CodeContent.pro')</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-white text-[#0A0A0A] antialiased">
        <div class="pointer-events-none fixed inset-x-0 top-0 h-80 bg-[radial-gradient(circle_at_top,rgba(250,204,21,0.10),transparent_55%)]"></div>

        <div class="relative z-20 flex min-h-screen flex-col items-center justify-center px-6 py-12">
            <div class="w-full max-w-md">
                <a href="{{ route('home') }}" class="mx-auto flex w-fit items-center gap-3">
                    <span class="flex h-10 w-10 items-center justify-center rounded-full border border-[#E5E5E5] bg-[#F8F8F8] text-sm font-bold text-[#0A0A0A]">CC</span>
                    <span class="text-sm font-semibold tracking-tight text-[#0A0A0A]">CodeContent.pro</span>
                </a>
            </div>

            <div class="card mt-6 w-full max-w-md border-[#E7E1C3] p-7 shadow-[0_12px_30px_rgba(0,0,0,0.04)] sm:p-8">
                <div class="mb-6">
                    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-[#525252]">Authentication</p>
                    <p class="mt-2 text-lg font-semibold tracking-tight text-[#0A0A0A]">Secure access</p>
                </div>

                {{ $slot }}
            </div>
        </div>
    </body>
</html>
