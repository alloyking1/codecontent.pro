@extends('layouts.admin')

@section('title', 'Admin Dashboard | CodeContent.pro')

@section('content')
    <section>
        <div class="eyebrow">
            <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
            Admin Dashboard
        </div>

        <h1 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">Blog management workspace</h1>
        <p class="mt-4 max-w-2xl text-sm leading-7 text-muted sm:text-base">
            Track your publishing system at a glance. Use the navigation to manage posts and categories.
        </p>

        <div class="mt-8 grid gap-6 sm:grid-cols-2 xl:grid-cols-3">
            <article class="card border-[#E7E1C3] bg-white/90 p-6 shadow-[0_12px_30px_rgba(0,0,0,0.04)]">
                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-muted">Total Posts</p>
                <p class="mt-3 text-4xl font-semibold tracking-tight text-[#0A0A0A]">{{ $stats['total_posts'] }}</p>
            </article>

            <article class="card border-[#E7E1C3] bg-white/90 p-6 shadow-[0_12px_30px_rgba(0,0,0,0.04)]">
                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-muted">Total Categories</p>
                <p class="mt-3 text-4xl font-semibold tracking-tight text-[#0A0A0A]">{{ $stats['total_categories'] }}</p>
            </article>

            <article class="card border-[#E7E1C3] bg-[linear-gradient(180deg,#FFF9DB_0%,#FFFFFF_100%)] p-6 shadow-[0_12px_30px_rgba(0,0,0,0.04)]">
                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-muted">Featured Posts</p>
                <p class="mt-3 text-4xl font-semibold tracking-tight text-[#0A0A0A]">{{ $stats['featured_posts'] }}</p>
            </article>

            <article class="card border-[#E7E1C3] bg-white/90 p-6 shadow-[0_12px_30px_rgba(0,0,0,0.04)]">
                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-muted">Published Posts</p>
                <p class="mt-3 text-4xl font-semibold tracking-tight text-[#0A0A0A]">{{ $stats['published_posts'] }}</p>
            </article>

            <article class="card border-[#E7E1C3] bg-white/90 p-6 shadow-[0_12px_30px_rgba(0,0,0,0.04)]">
                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-muted">Subscribers</p>
                <p class="mt-3 text-4xl font-semibold tracking-tight text-[#0A0A0A]">{{ $stats['total_subscribers'] }}</p>
            </article>

            <article class="card border-[#E7E1C3] bg-white/90 p-6 shadow-[0_12px_30px_rgba(0,0,0,0.04)]">
                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-muted">Author Requests</p>
                <p class="mt-3 text-4xl font-semibold tracking-tight text-[#0A0A0A]">{{ $stats['total_author_requests'] }}</p>
            </article>
        </div>

        <div class="mt-8 card p-6 sm:p-8">
            <p class="text-sm font-semibold text-[#0A0A0A]">Signed in as</p>
            <p class="mt-2 text-sm text-muted">{{ auth()->user()->name }} ({{ auth()->user()->email }})</p>
        </div>
    </section>
@endsection
