@extends('layouts.app')

@section('title', ($post->meta_title ?: $post->title).' | CodeContent.pro')
@section('meta_description', $post->meta_description ?: $post->excerpt)
@section('meta_keywords', $post->meta_keywords ?: 'developer education, documentation, product education, saas growth')
@section('canonical_url', route('blog.show', $post->slug))
@section('og_type', 'article')
@section('og_title', $post->meta_title ?: $post->title)
@section('og_description', $post->meta_description ?: $post->excerpt)
@section('og_image', $post->featured_image ? asset('storage/'.$post->featured_image) : asset('favicon.svg'))
@section('twitter_card', 'summary_large_image')
@section('twitter_title', $post->meta_title ?: $post->title)
@section('twitter_description', $post->meta_description ?: $post->excerpt)
@section('twitter_image', $post->featured_image ? asset('storage/'.$post->featured_image) : asset('favicon.svg'))
@section('article_published_time', optional($post->published_at)->toAtomString())
@section('article_modified_time', optional($post->updated_at)->toAtomString())

@section('content')
    <article class="section-pad pt-20 sm:pt-24 lg:pt-28">
        <div class="site-shell">
            <div class="mx-auto max-w-4xl">
                <div class="inline-flex items-center gap-2 rounded-full border border-[#E5E5E5] bg-[#F8F8F8] px-3 py-1 text-xs font-semibold uppercase tracking-[0.12em] text-muted">
                    {{ $post->category?->name ?? 'General' }}
                </div>

                <h1 class="mt-6 text-4xl font-semibold tracking-tight text-[#0A0A0A] sm:text-5xl lg:text-6xl">{{ $post->title }}</h1>

                <div class="mt-6 flex flex-wrap items-center gap-x-6 gap-y-3 text-xs font-semibold uppercase tracking-[0.12em] text-muted">
                    <span>{{ optional($post->published_at)->format('M d, Y') }}</span>
                    <span>{{ $readingTimeMinutes }} min read</span>
                </div>
            </div>

            <div class="mx-auto mt-10 max-w-5xl overflow-hidden rounded-3xl border border-[#E5E5E5] bg-white">
                @if ($post->featured_image)
                    <img src="{{ asset('storage/'.$post->featured_image) }}" alt="{{ $post->title }}" class="h-88 w-full object-cover sm:h-112 lg:h-136" loading="lazy">
                @else
                    <div class="flex h-88 w-full items-center justify-center bg-[linear-gradient(140deg,#FFF9DB_0%,#FFFFFF_58%,#F8F8F8_100%)] sm:h-112 lg:h-136">
                        <p class="text-sm font-semibold uppercase tracking-[0.14em] text-muted">Article</p>
                    </div>
                @endif
            </div>

            <div class="mx-auto mt-10 grid max-w-6xl gap-10 lg:grid-cols-[1fr_18rem] lg:items-start">
                <div class="card p-7 sm:p-10">
                    <div class="prose prose-neutral max-w-none text-[15px] leading-8 text-[#0A0A0A] sm:text-base">
                        {!! nl2br(e($post->body)) !!}
                    </div>
                </div>

                <aside class="space-y-6">
                    <div class="card-surface border border-[#E5E5E5] p-6">
                        <p class="text-xs font-semibold uppercase tracking-[0.16em] text-muted">Author</p>
                        <p class="mt-3 text-base font-semibold tracking-tight text-[#0A0A0A]">{{ $post->author?->name ?? 'CodeContent.pro' }}</p>
                        <p class="mt-2 text-sm leading-7 text-muted">{{ $post->author?->description ?? 'Contributor profile details are being updated.' }}</p>
                        @if ($post->author)
                            <a href="{{ route('authors.show', $post->author->slug) }}" class="button-secondary mt-5 w-full px-4 py-2 text-xs uppercase tracking-[0.12em]">About the author</a>
                        @endif
                    </div>

                    <div class="card-surface border border-[#E5E5E5] p-6">
                        <p class="text-xs font-semibold uppercase tracking-[0.16em] text-muted">Published</p>
                        <p class="mt-3 text-sm font-medium text-[#0A0A0A]">{{ optional($post->published_at)->format('F d, Y') }}</p>
                    </div>
                </aside>
            </div>

            <section class="mx-auto mt-14 max-w-6xl border-t border-[#E5E5E5] pt-12">
                <div class="flex items-end justify-between gap-4">
                    <h2 class="text-2xl font-semibold tracking-tight text-[#0A0A0A] sm:text-3xl">Related articles</h2>
                    <a href="{{ route('blog.index') }}" class="button-secondary px-4 py-2 text-xs uppercase tracking-[0.12em]">View all posts</a>
                </div>

                @if ($relatedPosts->count() > 0)
                    <div class="mt-6 grid gap-6 md:grid-cols-2 xl:grid-cols-3">
                        @foreach ($relatedPosts as $relatedPost)
                            <article class="group card overflow-hidden bg-white p-0 transition duration-300 hover:-translate-y-1 hover:border-[#D7CC95] hover:shadow-[0_16px_40px_rgba(0,0,0,0.06)]">
                                <div class="h-44 overflow-hidden border-b border-[#E5E5E5] bg-[#F8F8F8]">
                                    @if ($relatedPost->featured_image)
                                        <img src="{{ asset('storage/'.$relatedPost->featured_image) }}" alt="{{ $relatedPost->title }}" class="h-full w-full object-cover transition duration-500 group-hover:scale-[1.02]" loading="lazy">
                                    @else
                                        <div class="flex h-full w-full items-center justify-center bg-[linear-gradient(140deg,#FFF9DB_0%,#FFFFFF_58%,#F8F8F8_100%)]">
                                            <p class="text-xs font-semibold uppercase tracking-[0.14em] text-muted">Related</p>
                                        </div>
                                    @endif
                                </div>

                                <div class="p-6">
                                    <p class="inline-flex rounded-full border border-[#E5E5E5] bg-[#F8F8F8] px-3 py-1 text-xs font-semibold uppercase tracking-[0.12em] text-muted">{{ $relatedPost->category?->name ?? 'General' }}</p>
                                    <h3 class="mt-4 text-lg font-semibold tracking-tight text-[#0A0A0A]">{{ $relatedPost->title }}</h3>
                                    <p class="mt-3 text-sm leading-7 text-muted">{{ $relatedPost->excerpt }}</p>

                                    <div class="mt-5 flex items-center justify-between gap-3">
                                        <p class="text-xs font-semibold uppercase tracking-[0.12em] text-muted">{{ optional($relatedPost->published_at)->format('M d, Y') }}</p>
                                        <a href="{{ route('blog.show', $relatedPost->slug) }}" class="text-sm font-semibold text-[#0A0A0A] transition hover:text-muted">Read More</a>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                @else
                    <div class="mt-6 card p-8 sm:p-10">
                        <p class="text-sm font-semibold text-[#0A0A0A]">No related articles yet</p>
                        <p class="mt-2 text-sm text-muted">More posts in this category will appear here.</p>
                    </div>
                @endif
            </section>
        </div>
    </article>
@endsection

@push('structured_data')
    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'BlogPosting',
            'mainEntityOfPage' => [
                '@type' => 'WebPage',
                '@id' => route('blog.show', $post->slug),
            ],
            'headline' => $post->title,
            'description' => $post->meta_description ?: $post->excerpt,
            'image' => [$post->featured_image ? asset('storage/'.$post->featured_image) : asset('favicon.svg')],
            'datePublished' => optional($post->published_at)->toAtomString(),
            'dateModified' => optional($post->updated_at)->toAtomString(),
            'author' => [
                '@type' => 'Person',
                'name' => $post->author?->name ?? 'CodeContent.pro',
                'url' => $post->author ? route('authors.show', $post->author->slug) : route('authors.index'),
            ],
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'CodeContent.pro',
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => asset('favicon.svg'),
                ],
            ],
            'articleSection' => $post->category?->name,
            'keywords' => $post->meta_keywords,
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>

    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                [
                    '@type' => 'ListItem',
                    'position' => 1,
                    'name' => 'Home',
                    'item' => route('home'),
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 2,
                    'name' => 'Blog',
                    'item' => route('blog.index'),
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 3,
                    'name' => $post->title,
                    'item' => route('blog.show', $post->slug),
                ],
            ],
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
@endpush
