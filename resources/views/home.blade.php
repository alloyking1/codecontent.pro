@extends('layouts.app')

@section('title', 'CodeContent.pro | Developer Education That Helps Startups Grow')
@section('meta_description', 'CodeContent.pro is a developer education agency helping startups and SaaS teams improve onboarding, activation, and developer adoption through content, documentation, and learning systems.')

@section('content')
    <x-custom.hero-one>
        <div class="site-shell">
            <div class="text-center">
                <div class="eyebrow">
                    <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
                    Developer education for SaaS and platform teams
                </div>
                <h1 class="text-4xl md:text-6xl font-bold tracking-tight text-gray-900 leading-tight">
                    Helping Software Companies Create Better Documentation,
                    Developer Content, and Learning Experiences
                </h1>
    
                <p class="mt-6 text-lg text-gray-600 max-w-3xl mx-auto">
                    CodeContent helps SaaS companies, developer tool providers, startups,
                    and engineering teams improve developer onboarding, documentation,
                    technical content, and educational resources.
                </p>
    
                <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
                    <x-custom.btn-one
                        :link="route('technical-content-creation')"
                        text="Explore Technical Writing"
                    />
                    <x-custom.btn-one
                        :link="route('documentation-engineering')"
                        text="Explore Developer Education"
                        type="secondary"
                    />
                </div>
            </div>
            
        </div>
    </x-custom.hero-one>

    <section id="services" class="section-pad border-t border-[#E5E5E5] bg-[#F8F8F8]/60">
        <div class="site-shell">
            <div class="max-w-3xl">
                <div class="eyebrow">
                    <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
                    Services
                </div>

                <h2 class="mt-4 text-3xl font-semibold tracking-tight text-[#0A0A0A] sm:text-4xl">
                    <span>We design developer education systems that improve product adoption.</span>
                </h2>

                <p class="mt-4 text-base leading-7 text-[#525252] sm:text-lg">
                    Instead of selling isolated deliverables, we build connected education experiences that help developers understand your product faster and succeed with it.
                </p>
            </div>

            <div class="mt-10 grid md:grid-cols-2 gap-8">

                <x-custom.card-one>
                    <h3 class="text-2xl font-semibold text-gray-900">
                        Technical Content Creation
                    </h3>

                    <p class="mt-3 text-gray-600">
                        Clear, accurate, developer-focused content designed to
                        improve onboarding, and help developers
                        adopt your product faster.
                    </p>

                    <ul class="mt-4 space-y-2 text-gray-700 list-disc list-inside">
                        <li>Blog Posts & Technical Articles</li>
                        <li>Thought Leadership Pieces</li>
                        <li>Comparison Pages</li>
                        <li>Video Tutorials</li>
                        <li>Technical Social Media Posts</li>
                        <li>Technical newsletters</li>
                    </ul>

                    <a href="{{ route('technical-content-creation') }}"
                       class="inline-block mt-6 text-black font-medium hover:underline">
                        Learn More →
                    </a>
                </x-custom.card-one>
    
                <!-- Technical Writing -->
                <x-custom.card-one>
                    <h3 class="text-2xl font-semibold text-gray-900">
                        Documentation
                    </h3>

                    <p class="mt-3 text-gray-600">
                        Users who have adopted your product need clear documentation. We can assist you with:
                    </p>

                    <ul class="mt-4 space-y-2 text-gray-700 list-disc list-inside">
                        <li>Documentation Audits</li>
                        <li>API Documentation</li>
                        <li>Docs as Code Implementation</li>
                        <li>Migration Guides</li>
                        <li>Documentation Maintenance</li>
                    </ul>

                    <a href="{{ route('documentation-engineering') }}"
                       class="inline-block mt-6 text-black font-medium hover:underline">
                        Learn More →
                    </a>
                </x-custom.card-one>

                <!-- Developer Education -->
                {{-- <div class="p-8 border border-[#E5E5E5] rounded-2xl shadow-sm hover:shadow-md transition bg-white">
                    <h3 class="text-2xl font-semibold text-gray-900">
                        Developer Education
                    </h3>

                    <p class="mt-3 text-gray-600">
                        Learning experiences designed to help developers acquire
                        skills, understand products, and achieve measurable outcomes.
                    </p>

                    <ul class="mt-4 space-y-2 text-gray-700 list-disc list-inside">
                        <li>Course Creation</li>
                        <li>Instructional Design</li>
                        <li>Developer Education Programs</li>
                        <li>Technical Training Materials</li>
                        <li>Developer Advocacy Support</li>
                        <li>Curriculum Design</li>
                    </ul>

                    <a href="/services/developer-education"
                       class="inline-block mt-6 text-black font-medium hover:underline">
                        Learn More →
                    </a>
                </div> --}}

            </div>
        </div>
    </section>

    <section id="why-education" class="section-pad border-t border-[#E5E5E5]">
        <div class="site-shell">
            <div class="site-shell">
                <div class="max-w-4xl">
                    <div class="eyebrow">
                        <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
                        Why it matters
                    </div>
        
                    <h2 class="mt-4 text-3xl font-semibold tracking-tight text-[#0A0A0A] sm:text-4xl lg:text-5xl">
                        Great products fail when developers struggle to understand them.
                    </h2>
        
                    <p class="mt-6 text-lg leading-8 text-[#525252]">
                        Developers expect clear onboarding, practical documentation, and learning resources that help them achieve success quickly.
                        When those experiences are missing, adoption slows down, support requests increase, and valuable features go unused.
                    </p>
        
                    <p class="mt-6 text-lg leading-8 text-[#525252]">
                        We help teams create educational experiences that reduce friction, improve onboarding, and help developers get value from products faster.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- proof of works we've done --}}
        <section id="trusted-experience" class="section-pad border-t border-[#E5E5E5] bg-[linear-gradient(180deg,#FFFDF3_0%,#F8F8F8_38%,#FFFFFF_100%)]">
            <div class="site-shell">
        
                <div class="max-w-4xl">
                    <div class="eyebrow">
                        <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
                        Experience
                    </div>
        
                    <h2 class="mt-4 text-3xl font-semibold tracking-tight text-[#0A0A0A] sm:text-4xl lg:text-5xl">
                        Experience Across Developer Platforms
                    </h2>
        
                    <p class="mt-5 max-w-3xl text-base leading-8 text-[#525252] sm:text-lg">
                        We create technical content, tutorials, documentation, and educational resources that help developers understand products and succeed faster.
                    </p>
                </div>
        
                <div class="mt-12">
                    <div class="card p-8 sm:p-10">
                        <h3 class="text-2xl font-semibold tracking-tight text-[#0A0A0A]">
                            Selected Experience
                        </h3>
        
                        <p class="mt-4 text-sm leading-7 text-[#525252]">
                            Experience creating developer-focused content and educational resources for modern developer ecosystems.
                        </p>
        
                        <div class="mt-8 flex flex-wrap gap-4">
                            <span class="px-4 py-2 rounded-full border border-[#E5E5E5] font-medium">
                                MongoDB
                            </span>
        
                            <span class="px-4 py-2 rounded-full border border-[#E5E5E5] font-medium">
                                Twilio
                            </span>
                        </div>
                    </div>
                </div>
        
                <div class="mt-16">
                    <h3 class="text-2xl font-semibold tracking-tight text-[#0A0A0A]">
                        Previous Work
                    </h3>
        
                    <div class="mt-8 grid gap-6 lg:grid-cols-2">
        
                        <article class="group card bg-white p-7 transition duration-300 hover:-translate-y-1">
                            <span class="inline-flex rounded-full border border-[#E5E5E5] bg-[#F8F8F8] px-3 py-1 text-xs font-semibold uppercase tracking-[0.14em] text-[#525252]">
                                Tutorial
                            </span>
        
                            <h4 class="mt-4 text-lg font-semibold tracking-tight text-[#0A0A0A]">
                                How to Search Images and Text Using MongoDB Vector Search With FastAPI
                            </h4>
        
                            <p class="mt-3 text-sm leading-7 text-[#525252]">
                                Build an end-to-end vector search application using MongoDB Atlas and FastAPI.
                            </p>
        
                            <a href="https://www.datacamp.com/tutorial/search-images-and-text-using-mongodb-vector-search"
                                target="_blank"
                                class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-[#0A0A0A]">
                                Read More →
                            </a>
                        </article>
        
                        <article class="group card bg-white p-7 transition duration-300 hover:-translate-y-1">
                            <span class="inline-flex rounded-full border border-[#E5E5E5] bg-[#F8F8F8] px-3 py-1 text-xs font-semibold uppercase tracking-[0.14em] text-[#525252]">
                                Product Education
                            </span>
        
                            <h4 class="mt-4 text-lg font-semibold tracking-tight text-[#0A0A0A]">
                                Build a Simple Call Center With Laravel TALL Stack and Twilio Programmable Voice
                            </h4>
        
                            <p class="mt-3 text-sm leading-7 text-[#525252]">
                                A practical guide showing how to build a call center application using Twilio Programmable Voice.
                            </p>
        
                            <a href="https://www.twilio.com/en-us/blog/build-simple-call-center-laravel-tall-stack-twilio-programmable-voice"
                                target="_blank"
                                class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-[#0A0A0A]">
                                Read More →
                            </a>
                        </article>
        
                    </div>
                </div>
            </div>
        </section>
    {{-- proof ends here --}}

    {{-- process --}}
    <section id="process" class="section-pad border-t border-[#E5E5E5]">
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
    <section id="founder-story" class="section-pad border-t border-[#E5E5E5] bg-[#F8F8F8]/60">
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