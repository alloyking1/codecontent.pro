@extends('layouts.app')

@section('title', 'CodeContent.pro | Developer Education That Helps Startups Grow')
@section('meta_description', 'CodeContent.pro is a developer education agency helping startups and SaaS teams improve onboarding, activation, and developer adoption through content, documentation, and learning systems.')

@section('content')
    <div>
        <x-custom.hero-one yellowDot="true">
            {{-- <x-custom.yellow-dot>Developer education for SaaS and platform teams</x-custom.yellow-dot> --}}
            {{-- add video --}}
            {{-- <iframe width="950" height="534" src="https://www.youtube.com/embed/5gN72wntuig" title="REPAIRING MY VEYRON THEN TAKING IT BACK TO BUGATTI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
        </x-custom.hero-one>
        {{-- <x-custom.trust></x-custom.trust> --}}

        <div id="services">

       

            <x-custom.service-list
            title="Coding and Engineering Services"
            :leanMoreLink="route('software-engineering')"
            yellowDotText="BUILD & AUTOMATE"
            image="{{ asset('Hand-coding-amico-copy.png') }}"
            description="Empower your team with custom internal tools, AI-driven automation workflows, and robust backend engineering. We solve complex operational bottlenecks by building tailored software solutions built for speed, reliability, and seamless integration."

            >
                <div class="border-t border-[#E5E5E5] py-2">Custom Internal Tools & Admin Dashboards</div>
                <div class="border-t border-[#E5E5E5] py-2">AI Automation & LLM Integration</div>
                <div class="border-t border-[#E5E5E5] py-2">Backend API & Infrastructure Development</div>
                <div class="border-t border-[#E5E5E5] py-2">Process Automation Engineering</div>

            </x-custom.service-list>

                <x-custom.service-list
                title="Technical Writing & Developer Media"
                :leanMoreLink="route('technical-content-creation')"
                yellowDotText="DOCUMENT & ENGAGE"
                image="{{ asset('Pen-tool-amico.png') }}"
                description="Turn complex technical architectures into clear, authoritative developer content. From deep-dive technical tutorials and API documentation to engineering blog posts, we craft precise technical content that earns developer trust and drives product adoption."

                >
                    <div class="border-t border-[#E5E5E5] py-2">Developer-Focused Tutorials & Guides</div>
                    <div class="border-t border-[#E5E5E5] py-2">API & SDK Documentation</div>
                    <div class="border-t border-[#E5E5E5] py-2">Architecture & How-To Content</div>
                    <div class="border-t border-[#E5E5E5] py-2">Technical Content Strategy for B2B SaaS</div>
                    
                </x-custom.service-list>

                <x-custom.service-list
                    title="EdTech & Course Development"
                    :leanMoreLink="route('documentation-engineering')"
                    yellowDotText="EDUCATE & SCALE"
                    {{-- image="{{ asset('Creative-team-cuate.png') }}" --}}
                    image="{{ asset('Education-bro.png') }}"
                    description="Transform complex knowledge into engaging, interactive learning experiences. We design, author, and engineer SCORM-compliant courses using Articulate 360 and custom LMS platforms—built for EdTech companies, training platforms, and enterprise onboarding."
                >
                    <div class="border-t border-[#E5E5E5] py-2">Articulate 360 & Storyline Development</div>
                    <div class="border-t border-[#E5E5E5] py-2">Custom LMS Content Engineering</div>
                    <div class="border-t border-[#E5E5E5] py-2">Interactive Technical Curriculum Design</div>
                    <div class="border-t border-[#E5E5E5] py-2">Corporate & Developer Training Modules</div>
                </x-custom.service-list>
        </div>


        <div>
            <x-custom.why-choose-us/>
        </div>



        {{-- process --}}
        <section id="process" class="section-pad">

    <div class="site-shell">

        <div class="max-w-3xl">
            <x-custom.yellow-dot>
                HOW WE WORK
            </x-custom.yellow-dot>

            <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                A Frictionless Process from Scope to Delivery
            </h2>
            <p>
                e keep things simple, transparent, and structured—so you always know what’s happening, when it’s shipping, and what comes next.
            </p>
        </div>

        <div
            class="mt-12 pt-6 flex gap-6 overflow-x-auto snap-x snap-mandatory pb-6 scroll-smooth no-scrollbar">

            <x-custom.process-card
                step="1"
                title="Discovery & Technical Scope">
                We start with a technical alignment call or audit of your current stack, codebase, or content strategy. We define your exact deliverables, timeline, and success metrics.
            </x-custom.process-card>

            <x-custom.process-card
                step="2"
                title="Strategy & Blueprinting">
                Before building or writing, we map out the plan—whether that’s software system architecture, content outlines for technical docs, or course curriculum maps in Articulate 360.
            </x-custom.process-card>

            <x-custom.process-card
                step="3"
                title="Build & Refine">
                Our engineering and content team goes to work. We ship code, draft documentation, or develop course modules with regular feedback loops so you retain full control.
            </x-custom.process-card>

            <x-custom.process-card
                step="4"
                title="Deployment & Handoff">
                We deliver production-ready code, live technical documentation, or SCORM-compliant EdTech packages, complete with full source code access and seamless deployment support.
            </x-custom.process-card>

        </div>

    </div>

</section>

        {{-- isight --}}
        <section id="founder-story" class="section-pad  bg-[#F8F8F8]/60">
            <div class="site-shell">
                <div class="text-center">
                    <x-custom.yellow-dot>Perspectives & Strategy</x-custom.yellow-dot>
                    <h2 class="text-3xl font-semibold tracking-tight text-[#0A0A0A] sm:text-4xl">
                        Engineering & Knowledge Delivery Insights
                    </h2>
                
                    <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
                        Strategic insights on scaling custom internal tools, engineering AI workflows, accelerating developer product adoption, and building high-impact LMS training systems.
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
    </div>
@endsection