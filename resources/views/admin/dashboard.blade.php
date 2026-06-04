@extends('layouts.admin')

@section('title', 'Admin Dashboard | CodeContent.pro')

@section('content')
    <section>
        <div class="eyebrow">
            <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
            Admin Dashboard
        </div>

        <h1 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">Blog management workspace</h1>
        <p class="mt-4 max-w-2xl text-sm leading-7 text-[#525252] sm:text-base">
            Authentication is configured and admin routes are protected. Blog management modules for posts and categories will be added in the next milestones.
        </p>

        <div class="mt-8 card p-6 sm:p-8">
            <p class="text-sm font-semibold text-[#0A0A0A]">Signed in as</p>
            <p class="mt-2 text-sm text-[#525252]">{{ auth()->user()->name }} ({{ auth()->user()->email }})</p>
        </div>
    </section>
@endsection
