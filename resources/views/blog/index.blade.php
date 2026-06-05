@extends('layouts.app')

@section('title', 'Blog | CodeContent.pro')
@section('meta_description', 'Insights on developer education, documentation, product education, and SaaS growth from CodeContent.pro.')
@section('canonical_url', route('blog.index'))
@section('og_title', 'Blog | CodeContent.pro')
@section('og_description', 'Insights on developer education, documentation, product education, and SaaS growth from CodeContent.pro.')

@section('content')
    <section class="section-pad pt-20 sm:pt-24 lg:pt-28" x-data="blogListing({ posts: @js($postsPayload), categories: @js($categoriesPayload) })">
        <div class="site-shell">
            <div class="max-w-4xl">
                <div class="eyebrow">
                    <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
                    Blog
                </div>

                <h1 class="mt-6 text-4xl font-semibold tracking-tight text-[#0A0A0A] sm:text-5xl lg:text-6xl">
                    Insights on Developer Education, Documentation, Product Education, and SaaS Growth
                </h1>

                <p class="mt-6 max-w-3xl text-base leading-8 text-muted sm:text-lg">
                    Practical ideas, implementation patterns, and strategy notes for teams building better developer onboarding and product education.
                </p>
            </div>

            <div class="mt-14">
                <div class="flex items-center justify-between gap-4">
                    <h2 class="text-2xl font-semibold tracking-tight text-[#0A0A0A] sm:text-3xl">Featured Post</h2>
                    <a href="#recent-posts" class="button-secondary px-4 py-2 text-xs uppercase tracking-[0.14em]">Browse recent</a>
                </div>

                @if ($featuredPost)
                    <article class="group mt-6 card overflow-hidden border-[#E7E1C3] bg-white/90 shadow-[0_14px_35px_rgba(0,0,0,0.05)] lg:grid lg:grid-cols-[1.05fr_0.95fr]">
                        <div class="relative overflow-hidden border-b border-[#E5E5E5] lg:border-b-0 lg:border-r">
                            @if ($featuredPost->featured_image)
                                <img src="{{ asset('storage/'.$featuredPost->featured_image) }}" alt="{{ $featuredPost->title }}" class="h-72 w-full object-cover transition duration-500 group-hover:scale-[1.02] sm:h-80 lg:h-full" loading="lazy">
                            @else
                                <div class="flex h-72 w-full items-center justify-center bg-[linear-gradient(140deg,#FFF9DB_0%,#FFFFFF_58%,#F8F8F8_100%)] sm:h-80 lg:h-full">
                                    <p class="text-sm font-semibold uppercase tracking-[0.14em] text-muted">Featured Insight</p>
                                </div>
                            @endif
                        </div>

                        <div class="p-7 sm:p-9">
                            <div class="inline-flex items-center gap-2 rounded-full border border-[#E5E5E5] bg-[#F8F8F8] px-3 py-1 text-xs font-semibold uppercase tracking-[0.12em] text-muted">
                                {{ $featuredPost->category?->name ?? 'General' }}
                            </div>

                            <h3 class="mt-5 text-2xl font-semibold tracking-tight text-[#0A0A0A] sm:text-3xl">{{ $featuredPost->title }}</h3>
                            <p class="mt-4 text-sm leading-7 text-muted sm:text-base">{{ $featuredPost->excerpt }}</p>

                            <div class="mt-6 flex flex-wrap items-center gap-x-5 gap-y-3 text-xs font-semibold uppercase tracking-[0.12em] text-muted">
                                <span>{{ optional($featuredPost->published_at)->format('M d, Y') }}</span>
                                <span>Featured</span>
                            </div>

                            <a href="{{ route('blog.show', $featuredPost->slug) }}" class="button-primary mt-7">Read article</a>
                        </div>
                    </article>
                @else
                    <div class="mt-6 card p-8 sm:p-10">
                        <p class="text-sm font-semibold text-[#0A0A0A]">No featured post yet</p>
                        <p class="mt-2 text-sm text-muted">Mark a published post as featured in admin to spotlight it here.</p>
                    </div>
                @endif
            </div>

            <div class="mt-14">
                <h2 class="text-2xl font-semibold tracking-tight text-[#0A0A0A] sm:text-3xl">Categories</h2>
                <div class="mt-5 flex flex-wrap gap-3">
                    <button
                        type="button"
                        @click="setCategory('all')"
                        :class="activeCategory === 'all' ? 'bg-[#0A0A0A] text-white border-[#0A0A0A]' : 'bg-white text-muted border-[#E5E5E5] hover:text-[#0A0A0A]'"
                        class="inline-flex items-center rounded-full border px-4 py-2 text-xs font-semibold uppercase tracking-[0.12em] transition"
                    >
                        All
                    </button>

                    <template x-for="category in categories" :key="category.slug">
                        <button
                            type="button"
                            @click="setCategory(category.slug)"
                            :class="activeCategory === category.slug ? 'bg-[#0A0A0A] text-white border-[#0A0A0A]' : 'bg-white text-muted border-[#E5E5E5] hover:text-[#0A0A0A]'"
                            class="inline-flex items-center rounded-full border px-4 py-2 text-xs font-semibold uppercase tracking-[0.12em] transition"
                            x-text="category.name"
                        ></button>
                    </template>
                </div>
            </div>

            <div id="recent-posts" class="mt-14">
                <div class="flex flex-wrap items-end justify-between gap-4">
                    <h2 class="text-2xl font-semibold tracking-tight text-[#0A0A0A] sm:text-3xl">Recent Posts</h2>
                    <p class="text-sm text-muted" x-text="`${filteredPosts.length} post${filteredPosts.length === 1 ? '' : 's'}`"></p>
                </div>

                <template x-if="filteredPosts.length > 0">
                    <div>
                        <div class="mt-6 grid gap-6 md:grid-cols-2 xl:grid-cols-3">
                            <template x-for="post in paginatedPosts" :key="post.slug">
                                <article class="group card overflow-hidden bg-white p-0 transition duration-300 hover:-translate-y-1 hover:border-[#D7CC95] hover:shadow-[0_16px_40px_rgba(0,0,0,0.06)]">
                                    <div class="h-44 overflow-hidden border-b border-[#E5E5E5] bg-[#F8F8F8]">
                                        <template x-if="post.image">
                                            <img :src="post.image" :alt="post.title" class="h-full w-full object-cover transition duration-500 group-hover:scale-[1.02]" loading="lazy">
                                        </template>
                                        <template x-if="!post.image">
                                            <div class="flex h-full w-full items-center justify-center bg-[linear-gradient(140deg,#FFF9DB_0%,#FFFFFF_58%,#F8F8F8_100%)]">
                                                <p class="text-xs font-semibold uppercase tracking-[0.14em] text-muted">No image</p>
                                            </div>
                                        </template>
                                    </div>

                                    <div class="p-6">
                                        <p class="inline-flex rounded-full border border-[#E5E5E5] bg-[#F8F8F8] px-3 py-1 text-xs font-semibold uppercase tracking-[0.12em] text-muted" x-text="post.category_name || 'General'"></p>
                                        <h3 class="mt-4 text-lg font-semibold tracking-tight text-[#0A0A0A]" x-text="post.title"></h3>
                                        <p class="mt-3 text-sm leading-7 text-muted" x-text="post.excerpt"></p>

                                        <div class="mt-5 flex items-center justify-between gap-3">
                                            <p class="text-xs font-semibold uppercase tracking-[0.12em] text-muted" x-text="post.published_date || 'Draft'"></p>
                                            <a :href="post.read_url" class="text-sm font-semibold text-[#0A0A0A] transition hover:text-muted">Read More</a>
                                        </div>
                                    </div>
                                </article>
                            </template>
                        </div>

                        <div class="mt-8 flex flex-wrap items-center justify-center gap-2">
                            <button
                                type="button"
                                @click="prevPage"
                                :disabled="page === 1"
                                class="button-secondary px-4 py-2 text-xs uppercase tracking-[0.12em] disabled:cursor-not-allowed disabled:opacity-50"
                            >
                                Prev
                            </button>

                            <template x-for="pageNumber in pages" :key="pageNumber">
                                <button
                                    type="button"
                                    @click="setPage(pageNumber)"
                                    :class="page === pageNumber ? 'bg-[#0A0A0A] text-white border-[#0A0A0A]' : 'bg-white text-muted border-[#E5E5E5] hover:text-[#0A0A0A]'"
                                    class="inline-flex h-10 min-w-10 items-center justify-center rounded-full border px-3 text-xs font-semibold transition"
                                    x-text="pageNumber"
                                ></button>
                            </template>

                            <button
                                type="button"
                                @click="nextPage"
                                :disabled="page === totalPages"
                                class="button-secondary px-4 py-2 text-xs uppercase tracking-[0.12em] disabled:cursor-not-allowed disabled:opacity-50"
                            >
                                Next
                            </button>
                        </div>
                    </div>
                </template>

                <template x-if="filteredPosts.length === 0">
                    <div class="mt-6 card p-8 sm:p-10">
                        <p class="text-sm font-semibold text-[#0A0A0A]">No posts found for this category</p>
                        <p class="mt-2 text-sm text-muted">Choose another category or switch back to All.</p>
                    </div>
                </template>
            </div>
        </div>
    </section>
@endsection

@push('head')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('blogListing', ({ posts, categories }) => ({
                posts,
                categories,
                activeCategory: 'all',
                page: 1,
                perPage: 6,

                get filteredPosts() {
                    if (this.activeCategory === 'all') {
                        return this.posts;
                    }

                    return this.posts.filter((post) => post.category_slug === this.activeCategory);
                },

                get totalPages() {
                    const count = Math.ceil(this.filteredPosts.length / this.perPage);

                    return count > 0 ? count : 1;
                },

                get pages() {
                    return Array.from({ length: this.totalPages }, (_, index) => index + 1);
                },

                get paginatedPosts() {
                    const start = (this.page - 1) * this.perPage;

                    return this.filteredPosts.slice(start, start + this.perPage);
                },

                setCategory(slug) {
                    this.activeCategory = slug;
                    this.page = 1;
                },

                setPage(pageNumber) {
                    this.page = pageNumber;
                },

                nextPage() {
                    if (this.page < this.totalPages) {
                        this.page += 1;
                    }
                },

                prevPage() {
                    if (this.page > 1) {
                        this.page -= 1;
                    }
                },
            }));
        });
    </script>
@endpush
