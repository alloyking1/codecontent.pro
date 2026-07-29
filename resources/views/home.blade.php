@extends('layouts.app')

@section('title', 'CodeContent.pro | Software Engineering, Technical Writing & EdTech Services')
@section('meta_description', 'CodeContent provides custom AI automation, software development, developer documentation, technical writing, and Articulate 360 course development for tech companies.')
@section('meta_keywords', 'custom AI automation, technical writing agency, developer documentation services, internal software development, Articulate 360 course creation, EdTech curriculum engineering.')

@section('content')
    <div>
        <x-custom.hero-one yellowDot="true"></x-custom.hero-one>
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
                        We keep things simple, transparent, and structured—so you always know what’s happening, when it’s shipping, and what comes next.
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
        
    </div>
@endsection