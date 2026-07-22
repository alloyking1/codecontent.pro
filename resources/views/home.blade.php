@extends('layouts.app')

@section('title', 'CodeContent.pro | Developer Education That Helps Startups Grow')
@section('meta_description', 'CodeContent.pro is a developer education agency helping startups and SaaS teams improve onboarding, activation, and developer adoption through content, documentation, and learning systems.')

@section('content')
    <x-custom.hero-one yellowDot="true">
        {{-- <x-custom.yellow-dot>Developer education for SaaS and platform teams</x-custom.yellow-dot> --}}
        {{-- add video --}}
    </x-custom.hero-one>
    <x-custom.trust></x-custom.trust>

    <x-custom.service-list
        title="Technical Writing and Content Creation"
        :leanMoreLink="route('technical-content-creation')"
        yellowDotText="Technical writing"
        image="{{ asset('Pen-tool-amico.png') }}"
        description="Instead of selling isolated deliverables, we build connected education experiences that help developers understand your product faster and succeed with it."

    >
        <div class="border-t border-[#E5E5E5] py-2">Content Strategy</div>
        <div class="border-t border-[#E5E5E5] py-2">Content Creation</div>
        <div class="border-t border-[#E5E5E5] py-2">Content Distribution</div>
    </x-custom.service-list>

    <x-custom.service-list
        title="Documentation Engineering"
        :leanMoreLink="route('documentation-engineering')"
        yellowDotText="Docs engineering"
        image="{{ asset('Creative-team-cuate.png') }}"
        description="We help teams create documentation systems that improve developer onboarding, adoption, and retention."
    >
        <div class="border-t border-[#E5E5E5] py-2">Documentation Review</div>
        <div class="border-t border-[#E5E5E5] py-2">Documentation Maintenance</div>
        <div class="border-t border-[#E5E5E5] py-2">Documentation Writing</div>
    </x-custom.service-list>

    <x-custom.service-list
        title="Coding and Engineering Services"
        :leanMoreLink="route('technical-content-creation')"
        yellowDotText="Software engineering"
        image="{{ asset('Hand-coding-amico-copy.png') }}"
        description="Instead of selling isolated deliverables, we build connected education experiences that help developers understand your product faster and succeed with it."

    >
        <div class="border-t border-[#E5E5E5] py-2">Software Engineering</div>
        <div class="border-t border-[#E5E5E5] py-2">AI Automation</div>
        <div class="border-t border-[#E5E5E5] py-2">AI Code Audit</div>
    </x-custom.service-list>

    
    <x-custom.hero-two 
        yellowDot="true" 
        yellowDotText="Developer education for SaaS and platform teams"
        title="Why Developer Education Matters"
        description="Great products fail when developers struggle to understand them. Developers expect clear onboarding, practical documentation, and learning resources that help them achieve success quickly. When those experiences are missing, adoption slows down, support requests increase, and valuable features go unused.">
    </x-custom.hero-two>

   

    {{-- process --}}
    <section id="process" class="section-pad ">
        <div class="site-shell">
    
            <div class="max-w-3xl">
                <div class="eyebrow">
                    <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
                    Process
                </div>
    
                <h2 class="mt-4 text-3xl font-semibold tracking-tight text-[#0A0A0A] sm:text-4xl">
                    A simple process designed for product teams.
                </h2>
            </div>
    
            <div class="mt-12 grid gap-6 lg:grid-cols-3">
    
                <article class="card p-8">
                    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-[#525252]">
                        Step 01
                    </p>
    
                    <h3 class="mt-3 text-lg font-semibold text-[#0A0A0A]">
                        Discover
                    </h3>
    
                    <p class="mt-3 text-sm leading-7 text-[#525252]">
                        Review your onboarding experience, documentation, and developer journey.
                    </p>
                </article>
    
                <article class="card p-8">
                    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-[#525252]">
                        Step 02
                    </p>
    
                    <h3 class="mt-3 text-lg font-semibold text-[#0A0A0A]">
                        Plan
                    </h3>
    
                    <p class="mt-3 text-sm leading-7 text-[#525252]">
                        Identify the highest-impact opportunities to improve developer adoption.
                    </p>
                </article>
    
                <article class="card p-8">
                    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-[#525252]">
                        Step 03
                    </p>
    
                    <h3 class="mt-3 text-lg font-semibold text-[#0A0A0A]">
                        Create
                    </h3>
    
                    <p class="mt-3 text-sm leading-7 text-[#525252]">
                        Deliver documentation, tutorials, and educational assets that help developers succeed.
                    </p>
                </article>
    
            </div>
        </div>
    </section>

    {{-- isight --}}
    <section id="founder-story" class="section-pad  bg-[#F8F8F8]/60">
        <div class="site-shell">
            <div class="text-center">
                <div class="eyebrow">
                    <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
                    Blog
                </div>
                <h2 class="text-3xl font-semibold tracking-tight text-[#0A0A0A] sm:text-4xl">
                    Developer Education Insights
                </h2>
    
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
                    Explore practical guides, tutorials, and industry insights covering
                    documentation, onboarding, instructional design, and developer learning.
                </p>
    
                
            </div>

            {{-- featured post show here --}}
            <div class="mt-14">

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
            {{-- featured post end here --}}
        </div>
    </section>
@endsection