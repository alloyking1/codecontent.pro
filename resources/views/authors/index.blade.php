@extends('layouts.app')

@section('title', 'Authors | CodeContent.pro')
@section('meta_description', 'Meet the authors publishing developer education and SaaS growth insights on CodeContent.pro.')
@section('canonical_url', route('authors.index'))

@section('content')
    <section class="section-pad pt-20 sm:pt-24 lg:pt-28">
        <div class="site-shell">
            <div class="max-w-4xl">
                <div class="eyebrow">
                    <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
                    Authors
                </div>

                <h1 class="mt-6 text-4xl font-semibold tracking-tight text-[#0A0A0A] sm:text-5xl lg:text-6xl">
                    Meet Our Authors
                </h1>

                <p class="mt-6 max-w-3xl text-base leading-8 text-muted sm:text-lg">
                    Explore the contributors sharing practical insights on developer education, documentation, and SaaS growth.
                </p>
            </div>

            @if ($authors->count() > 0)
                <div class="mt-12 grid gap-6 md:grid-cols-2 xl:grid-cols-3">
                    @foreach ($authors as $author)
                        <article class="group card border-[#E7E1C3] bg-white/90 p-7 shadow-[0_12px_30px_rgba(0,0,0,0.04)] transition duration-300 hover:-translate-y-1 hover:border-[#D7CC95]">
                            <h2 class="text-xl font-semibold tracking-tight text-[#0A0A0A]">{{ $author->name }}</h2>
                            <p class="mt-3 text-sm leading-7 text-muted">{{ $author->description ?: 'No description provided yet.' }}</p>

                            <div class="mt-5 flex flex-wrap gap-2">
                                @if ($author->website_url)
                                    <a href="{{ $author->website_url }}" target="_blank" rel="noopener noreferrer" class="inline-flex rounded-full border border-[#E5E5E5] bg-[#F8F8F8] px-3 py-1 text-xs font-semibold uppercase tracking-[0.12em] text-muted transition hover:text-[#0A0A0A]">Website</a>
                                @endif
                                @if ($author->twitter_url)
                                    <a href="{{ $author->twitter_url }}" target="_blank" rel="noopener noreferrer" class="inline-flex rounded-full border border-[#E5E5E5] bg-[#F8F8F8] px-3 py-1 text-xs font-semibold uppercase tracking-[0.12em] text-muted transition hover:text-[#0A0A0A]">X/Twitter</a>
                                @endif
                                @if ($author->linkedin_url)
                                    <a href="{{ $author->linkedin_url }}" target="_blank" rel="noopener noreferrer" class="inline-flex rounded-full border border-[#E5E5E5] bg-[#F8F8F8] px-3 py-1 text-xs font-semibold uppercase tracking-[0.12em] text-muted transition hover:text-[#0A0A0A]">LinkedIn</a>
                                @endif
                                @if ($author->github_url)
                                    <a href="{{ $author->github_url }}" target="_blank" rel="noopener noreferrer" class="inline-flex rounded-full border border-[#E5E5E5] bg-[#F8F8F8] px-3 py-1 text-xs font-semibold uppercase tracking-[0.12em] text-muted transition hover:text-[#0A0A0A]">GitHub</a>
                                @endif
                            </div>

                            <a href="{{ route('authors.show', $author->slug) }}" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-[#0A0A0A] transition group-hover:gap-3 group-hover:text-muted">
                                View author
                                <span aria-hidden="true">&rarr;</span>
                            </a>
                        </article>
                    @endforeach
                </div>

                <div class="mt-10">
                    {{ $authors->links() }}
                </div>
            @else
                <div class="mt-12 card p-8 sm:p-10">
                    <p class="text-sm font-semibold text-[#0A0A0A]">No authors yet</p>
                    <p class="mt-2 text-sm text-muted">Authors will appear here once profiles are added.</p>
                </div>
            @endif
        </div>
    </section>
@endsection
