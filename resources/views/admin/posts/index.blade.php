@extends('layouts.admin')

@section('title', 'Posts | Admin | CodeContent.pro')

@section('content')
    <section>
        <div class="eyebrow">
            <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
            Admin / Posts
        </div>

        <h1 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">Posts</h1>
        <p class="mt-4 max-w-2xl text-sm leading-7 text-muted sm:text-base">
            Post management CRUD is coming in the next milestone. This route is now active and protected.
        </p>

        <div class="mt-8 card p-6 sm:p-8">
            <p class="text-sm text-muted">Use the admin navigation to switch between Dashboard, Posts, and Categories.</p>
        </div>
    </section>
@endsection
