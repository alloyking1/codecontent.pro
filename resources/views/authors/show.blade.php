@extends('layouts.app')

@section('title', $author->name.' | Author | CodeContent.pro')
@section('meta_description', $author->description ?: ('Read more about '.$author->name.' on CodeContent.pro.'))
@section('canonical_url', route('authors.show', $author->slug))

@section('content')
    <section class="section-pad pt-20 sm:pt-24 lg:pt-28">
        <div class="site-shell">
            <div class="mx-auto max-w-4xl card border-[#E7E1C3] bg-white/90 p-8 shadow-[0_14px_35px_rgba(0,0,0,0.05)] sm:p-10">
                <div class="eyebrow">
                    <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
                    Author Profile
                </div>

                <h1 class="mt-5 text-4xl font-semibold tracking-tight text-[#0A0A0A] sm:text-5xl">{{ $author->name }}</h1>
                <p class="mt-5 text-base leading-8 text-muted sm:text-lg">{{ $author->description ?: 'No description provided yet.' }}</p>
                <p class="mt-4 text-xs font-semibold uppercase tracking-[0.12em] text-muted">{{ $posts->total() }} Published Article{{ $posts->total() === 1 ? '' : 's' }}</p>

                <div class="mt-8 flex flex-wrap gap-3">
                    @if ($author->website_url)
                        <a href="{{ $author->website_url }}" target="_blank" rel="noopener noreferrer" class="button-primary">Website</a>
                    @endif
                    @if ($author->twitter_url)
                        <a href="{{ $author->twitter_url }}" target="_blank" rel="noopener noreferrer" class="button-secondary">X/Twitter</a>
                    @endif
                    @if ($author->linkedin_url)
                        <a href="{{ $author->linkedin_url }}" target="_blank" rel="noopener noreferrer" class="button-secondary">LinkedIn</a>
                    @endif
                    @if ($author->github_url)
                        <a href="{{ $author->github_url }}" target="_blank" rel="noopener noreferrer" class="button-secondary">GitHub</a>
                    @endif
                </div>

                <div class="mt-10 border-t border-[#E5E5E5] pt-6">
                    <a href="{{ route('authors.index') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-[#0A0A0A] transition hover:gap-3 hover:text-muted">
                        <span aria-hidden="true">&larr;</span>
                        Back to all authors
                    </a>
                </div>
            </div>

            <div class="mx-auto mt-12 max-w-6xl">
                <div class="flex flex-wrap items-end justify-between gap-4">
                    <h2 class="text-2xl font-semibold tracking-tight text-[#0A0A0A] sm:text-3xl">Articles by {{ $author->name }}</h2>
                    <p class="text-sm text-muted">Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</p>
                </div>

                @if ($posts->count() > 0)
                    <div class="mt-6 grid gap-6 md:grid-cols-2 xl:grid-cols-3">
                        @foreach ($posts as $post)
                            <article class="group card overflow-hidden bg-white p-0 transition duration-300 hover:-translate-y-1 hover:border-[#D7CC95] hover:shadow-[0_16px_40px_rgba(0,0,0,0.06)]">
                                <div class="h-44 overflow-hidden border-b border-[#E5E5E5] bg-[#F8F8F8]">
                                    @if ($post->featured_image)
                                        <img src="{{ asset('storage/'.$post->featured_image) }}" alt="{{ $post->title }}" class="h-full w-full object-cover transition duration-500 group-hover:scale-[1.02]" loading="lazy">
                                    @else
                                        <div class="flex h-full w-full items-center justify-center bg-[linear-gradient(140deg,#FFF9DB_0%,#FFFFFF_58%,#F8F8F8_100%)]">
                                            <p class="text-xs font-semibold uppercase tracking-[0.14em] text-muted">Article</p>
                                        </div>
                                    @endif
                                </div>

                                <div class="p-6">
                                    <p class="inline-flex rounded-full border border-[#E5E5E5] bg-[#F8F8F8] px-3 py-1 text-xs font-semibold uppercase tracking-[0.12em] text-muted">{{ $post->category?->name ?? 'General' }}</p>
                                    <h3 class="mt-4 text-lg font-semibold tracking-tight text-[#0A0A0A]">{{ $post->title }}</h3>
                                    <p class="mt-3 text-sm leading-7 text-muted">{{ $post->excerpt }}</p>

                                    <div class="mt-5 flex items-center justify-between gap-3">
                                        <p class="text-xs font-semibold uppercase tracking-[0.12em] text-muted">{{ optional($post->published_at)->format('M d, Y') }}</p>
                                        <a href="{{ route('blog.show', $post->slug) }}" class="text-sm font-semibold text-[#0A0A0A] transition hover:text-muted">Read More</a>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>

                    <div class="mt-10">
                        {{ $posts->links() }}
                    </div>
                @else
                    <div class="mt-6 card p-8 sm:p-10">
                        <p class="text-sm font-semibold text-[#0A0A0A]">No published articles yet</p>
                        <p class="mt-2 text-sm text-muted">Articles by {{ $author->name }} will appear here once published.</p>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
