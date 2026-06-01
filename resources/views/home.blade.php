@extends('layouts.app')

@section('title', 'CodeContent.pro | Developer Education That Helps Startups Grow')
@section('meta_description', 'CodeContent.pro is a developer education agency helping startups and SaaS teams improve onboarding, activation, and developer adoption through content, documentation, and learning systems.')

@section('content')
    <section id="hero" class="section-pad pt-20 sm:pt-24 lg:pt-28">
        <div class="site-shell">
            <div class="grid gap-14 lg:grid-cols-[1.2fr_0.8fr] lg:items-center">
                <div class="max-w-3xl">
                    <div class="eyebrow">
                        <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
                        Developer education for SaaS and platform teams
                    </div>

                    <h1 class="mt-6 max-w-3xl text-5xl font-semibold tracking-tight text-[#0A0A0A] sm:text-6xl lg:text-7xl">
                        Developer education that helps startups grow.
                    </h1>

                    <p class="mt-6 max-w-2xl text-lg leading-8 text-[#525252] sm:text-xl sm:leading-9">
                        We help startups and SaaS companies turn complex products into clear educational experiences that improve developer adoption, reduce support burden, and speed up activation.
                    </p>

                    <div class="mt-10 flex flex-col gap-3 sm:flex-row">
                        <a href="#contact" class="button-primary">Book a strategy call</a>
                        <a href="#services" class="button-secondary">Explore services</a>
                    </div>

                    <div class="mt-12 flex flex-wrap items-center gap-x-8 gap-y-4 text-sm text-[#525252]">
                        <span class="inline-flex items-center gap-2.5">
                            <span class="inline-flex h-6 w-6 items-center justify-center rounded-full border border-[#E5E5E5] bg-[#F8F8F8]">
                                <svg class="h-3.5 w-3.5 text-[#0A0A0A]" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6">
                                    <path d="M4 10h12M10 4l6 6-6 6" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            Faster activation
                        </span>
                        <span class="inline-flex items-center gap-2.5">
                            <span class="inline-flex h-6 w-6 items-center justify-center rounded-full border border-[#E5E5E5] bg-[#F8F8F8]">
                                <svg class="h-3.5 w-3.5 text-[#0A0A0A]" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6">
                                    <path d="M4 10h12M10 4l6 6-6 6" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            Better onboarding
                        </span>
                        <span class="inline-flex items-center gap-2.5">
                            <span class="inline-flex h-6 w-6 items-center justify-center rounded-full border border-[#E5E5E5] bg-[#F8F8F8]">
                                <svg class="h-3.5 w-3.5 text-[#0A0A0A]" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6">
                                    <path d="M4 10h12M10 4l6 6-6 6" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            Reduced support burden
                        </span>
                    </div>
                </div>

                <div class="card-surface p-8 sm:p-10">
                    <div class="flex items-center gap-4">
                        {{-- <div class="inline-flex h-16 w-16 items-center justify-center rounded-full border border-[#E5E5E5] text-xl" aria-hidden="true"> --}}
                        <div class="inline-flex items-center justify-center rounded-full border border-[#E5E5E5] text-xl" aria-hidden="true">
                            <img src="https://media.licdn.com/dms/image/v2/D4D03AQG1CSmVRhcomA/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1728111048385?e=1781740800&v=beta&t=lFmSuO0jRFrtNaTmO0_SeWjM0ZRtZivcE6ON-xVRMLQ"
                                class="rounded-full"
                            alt="">
                        </div>
                        <div>
                            <p class="mt-1 text-xl font-semibold tracking-tight text-[#0A0A0A]">Hi, I'm Moses</p>
                            <p class="mt-1 text-sm text-[#525252]">Software Developer, Technical Content Engineer, and Developer Educator.</p>
                        </div>
                    </div>

                    <p class="mt-6 text-sm leading-7 text-[#525252]">I've spent years helping developers learn through technical content, tutorials, documentation, and educational resources.</p>

                    <p class="mt-4 text-sm leading-7 text-[#525252]">Experience includes work across developer ecosystems such as MongoDB and Twilio.</p>

                    <div class="mt-8 border-t border-[#E5E5E5] pt-6">
                        <ul class="space-y-3 text-sm text-[#525252]">
                            <li class="inline-flex items-center gap-2.5">
                                <span class="inline-flex h-6 w-6 items-center justify-center rounded-full border border-[#E5E5E5] bg-white text-xs font-semibold text-[#0A0A0A]">✓</span>
                                Developer-first perspective
                            </li>
                            <li class="inline-flex items-center gap-2.5">
                                <span class="inline-flex h-6 w-6 items-center justify-center rounded-full border border-[#E5E5E5] bg-white text-xs font-semibold text-[#0A0A0A]">✓</span>
                                Senior-led execution
                            </li>
                            <li class="inline-flex items-center gap-2.5">
                                <span class="inline-flex h-6 w-6 items-center justify-center rounded-full border border-[#E5E5E5] bg-white text-xs font-semibold text-[#0A0A0A]">✓</span>
                                Technical and educational expertise
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mt-14 border-y border-[#E5E5E5] py-8">
                <div class="grid grid-cols-2 gap-5 md:grid-cols-4">
                    <div class="text-sm font-medium text-[#525252]">Technical content creation</div>
                    <div class="text-sm font-medium text-[#525252]">Documentation systems</div>
                    <div class="text-sm font-medium text-[#525252]">Developer tutorials</div>
                    <div class="text-sm font-medium text-[#525252]">Onboarding support</div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="section-pad border-t border-[#E5E5E5] bg-[#F8F8F8]/60">
        <div class="site-shell">
            <div class="max-w-3xl">
                <div class="eyebrow">
                    <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
                    Services
                </div>

                <h2 class="mt-4 text-3xl font-semibold tracking-tight text-[#0A0A0A] sm:text-4xl">
                    {{-- <span class="bg-[#FACC15] px-2 rounded-full">We design developer education systems that improve product adoption.</span> --}}
                    <span>We design developer education systems that improve product adoption.</span>
                </h2>

                <p class="mt-4 text-base leading-7 text-[#525252] sm:text-lg">
                    Instead of selling isolated deliverables, we build connected education experiences that help developers understand your product faster and succeed with it.
                </p>
            </div>

            <div class="mt-14 grid gap-8 lg:grid-cols-1 xl:grid-cols-4 xl:gap-10">
                <article class="card p-8 sm:p-9">
                    <div class="inline-flex h-9 w-9 items-center justify-center rounded-full border border-[#E5E5E5] bg-[#F8F8F8]">
                        <svg class="h-4.5 w-4.5 text-[#0A0A0A]" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6">
                            <path d="M4 10h12M10 4l6 6-6 6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <p class="mt-4 text-sm font-semibold text-[#0A0A0A]">Technical content creation</p>
                    <p class="mt-3 text-sm leading-6 text-[#525252]">Narratives and explainers that help developers understand product value and implementation paths.</p>
                </article>
                <article class="card p-8 sm:p-9">
                    <div class="inline-flex h-9 w-9 items-center justify-center rounded-full border border-[#E5E5E5] bg-[#F8F8F8]">
                        <svg class="h-4.5 w-4.5 text-[#0A0A0A]" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6">
                            <path d="M4 10h12M10 4l6 6-6 6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <p class="mt-4 text-sm font-semibold text-[#0A0A0A]">Documentation</p>
                    <p class="mt-3 text-sm leading-6 text-[#525252]">Structured docs that reduce confusion, lower support pressure, and improve developer self-serve success.</p>
                </article>
                <article class="card p-8 sm:p-9">
                    <div class="inline-flex h-9 w-9 items-center justify-center rounded-full border border-[#E5E5E5] bg-[#F8F8F8]">
                        <svg class="h-4.5 w-4.5 text-[#0A0A0A]" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6">
                            <path d="M4 10h12M10 4l6 6-6 6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <p class="mt-4 text-sm font-semibold text-[#0A0A0A]">Developer tutorials</p>
                    <p class="mt-3 text-sm leading-6 text-[#525252]">Step-by-step onboarding content that guides developers from first touch to real product use.</p>
                </article>
                <article class="card p-8 sm:p-9">
                    <div class="inline-flex h-9 w-9 items-center justify-center rounded-full border border-[#E5E5E5] bg-[#F8F8F8]">
                        <svg class="h-4.5 w-4.5 text-[#0A0A0A]" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6">
                            <path d="M4 10h12M10 4l6 6-6 6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <p class="mt-4 text-sm font-semibold text-[#0A0A0A]">Video content</p>
                    <p class="mt-3 text-sm leading-6 text-[#525252]">Clear walkthroughs for complex workflows, helping teams communicate quickly across learning styles.</p>
                </article>
                <article class="card p-8 sm:p-9">
                    <div class="inline-flex h-9 w-9 items-center justify-center rounded-full border border-[#E5E5E5] bg-[#F8F8F8]">
                        <svg class="h-4.5 w-4.5 text-[#0A0A0A]" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6">
                            <path d="M4 10h12M10 4l6 6-6 6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <p class="mt-4 text-sm font-semibold text-[#0A0A0A]">Developer onboarding</p>
                    <p class="mt-3 text-sm leading-6 text-[#525252]">Intentional first-run journeys that reduce friction and improve activation in the first sessions.</p>
                </article>
                <article class="card p-8 sm:p-9">
                    <div class="inline-flex h-9 w-9 items-center justify-center rounded-full border border-[#E5E5E5] bg-[#F8F8F8]">
                        <svg class="h-4.5 w-4.5 text-[#0A0A0A]" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6">
                            <path d="M4 10h12M10 4l6 6-6 6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <p class="mt-4 text-sm font-semibold text-[#0A0A0A]">Instructional design</p>
                    <p class="mt-3 text-sm leading-6 text-[#525252]">Learning architecture that aligns educational assets with product milestones and business goals.</p>
                </article>
                <article class="card p-8 sm:p-9">
                    <div class="inline-flex h-9 w-9 items-center justify-center rounded-full border border-[#E5E5E5] bg-[#F8F8F8]">
                        <svg class="h-4.5 w-4.5 text-[#0A0A0A]" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6">
                            <path d="M4 10h12M10 4l6 6-6 6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <p class="mt-4 text-sm font-semibold text-[#0A0A0A]">Learning systems</p>
                    <p class="mt-3 text-sm leading-6 text-[#525252]">Repeatable education frameworks that scale with your platform and future feature launches.</p>
                </article>
                <article class="card p-8 sm:p-9">
                    <div class="inline-flex h-9 w-9 items-center justify-center rounded-full border border-[#E5E5E5] bg-[#F8F8F8]">
                        <svg class="h-4.5 w-4.5 text-[#0A0A0A]" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6">
                            <path d="M4 10h12M10 4l6 6-6 6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <p class="mt-4 text-sm font-semibold text-[#0A0A0A]">Community-building support</p>
                    <p class="mt-3 text-sm leading-6 text-[#525252]">Support for programs that help developers share wins, stay engaged, and deepen adoption.</p>
                </article>
            </div>
        </div>
    </section>

    <section id="why-education" class="section-pad border-t border-[#E5E5E5]">
        <div class="site-shell">
            <div class="grid gap-14 lg:grid-cols-[1.1fr_0.9fr] lg:items-start">
                <div class="max-w-3xl">
                    <div class="eyebrow">
                        <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
                        Why developer education matters
                    </div>

                    <h2 class="mt-4 text-3xl font-semibold tracking-tight text-[#0A0A0A] sm:text-4xl lg:text-5xl">
                        Great products lose momentum when developers cannot learn them quickly.
                    </h2>

                    <p class="mt-5 max-w-2xl text-base leading-8 text-[#525252] sm:text-lg">
                        Developer education closes the gap between product capability and developer confidence. It shortens time-to-value, improves retention, and gives teams more room to build instead of repeatedly explaining.
                    </p>

                    <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                        <div class="metric">
                            <div class="inline-flex h-8 w-8 items-center justify-center rounded-full border border-[#E5E5E5] bg-[#F8F8F8]">
                                <svg class="h-4 w-4 text-[#0A0A0A]" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6">
                                    <path d="M4 10h12M10 4l6 6-6 6" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <p class="text-xs font-semibold uppercase tracking-[0.18em] text-[#525252]">Activation</p>
                            <p class="mt-2 text-sm font-semibold text-[#0A0A0A]">Developers reach first success faster</p>
                        </div>
                        <div class="metric">
                            <div class="inline-flex h-8 w-8 items-center justify-center rounded-full border border-[#E5E5E5] bg-[#F8F8F8]">
                                <svg class="h-4 w-4 text-[#0A0A0A]" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6">
                                    <path d="M4 10h12M10 4l6 6-6 6" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <p class="text-xs font-semibold uppercase tracking-[0.18em] text-[#525252]">Support</p>
                            <p class="mt-2 text-sm font-semibold text-[#0A0A0A]">Teams handle fewer repetitive questions</p>
                        </div>
                        <div class="metric">
                            <div class="inline-flex h-8 w-8 items-center justify-center rounded-full border border-[#E5E5E5] bg-[#F8F8F8]">
                                <svg class="h-4 w-4 text-[#0A0A0A]" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6">
                                    <path d="M4 10h12M10 4l6 6-6 6" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <p class="text-xs font-semibold uppercase tracking-[0.18em] text-[#525252]">Experience</p>
                            <p class="mt-2 text-sm font-semibold text-[#0A0A0A]">Your product feels easier to adopt</p>
                        </div>
                    </div>
                </div>

                <div class="card p-8 sm:p-10">
                    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-[#525252]">Common pattern we fix</p>
                    <div class="mt-6 space-y-5">
                        <div>
                            <p class="text-sm font-semibold text-[#0A0A0A]">Before</p>
                            <p class="mt-2 text-sm leading-7 text-[#525252]">Strong product, fragmented education, slow onboarding, and support-heavy adoption.</p>
                        </div>
                        <div class="border-t border-[#E5E5E5] pt-5">
                            <p class="text-sm font-semibold text-[#0A0A0A]">After</p>
                            <p class="mt-2 text-sm leading-7 text-[#525252]">A connected education system where docs, tutorials, and onboarding reinforce each other.</p>
                        </div>
                    </div>

                    <div class="mt-8 rounded-2xl border border-[#E5E5E5] bg-[#F8F8F8] p-6">
                        <p class="text-sm font-medium text-[#0A0A0A]">Education is a growth lever.</p>
                        <p class="mt-2 text-sm leading-6 text-[#525252]">When developers understand your product, they adopt more features, stay longer, and recommend it with confidence.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- proof of works we've done --}}
    <section id="trusted-experience" class="section-pad border-t border-[#E5E5E5] bg-[linear-gradient(180deg,#FFFDF3_0%,#F8F8F8_38%,#FFFFFF_100%)]" x-data="trustedExperienceStats()" x-init="init()">
        <div class="site-shell relative">
            <div class="pointer-events-none absolute inset-x-0 top-0 h-48 bg-[radial-gradient(circle_at_top_right,rgba(250,204,21,0.18),transparent_38%),radial-gradient(circle_at_left,rgba(0,0,0,0.04),transparent_35%)]"></div>

            <div class="relative max-w-4xl">
                <div class="eyebrow">
                    <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
                    Trusted experience
                </div>

                <h2 class="mt-4 text-3xl font-semibold tracking-tight text-[#0A0A0A] sm:text-4xl lg:text-5xl">
                    Proof That Developer Education Works
                </h2>

                <p class="mt-5 max-w-3xl text-base leading-8 text-[#525252] sm:text-lg">
                    Years of creating technical content, educational resources, tutorials, and developer learning experiences for developer ecosystems and startups.
                </p>
            </div>

            <div class="relative mt-12 grid gap-6 sm:grid-cols-2 xl:grid-cols-4">
                <article class="card border-[#E7E1C3] bg-white/90 p-7 shadow-[0_12px_30px_rgba(0,0,0,0.04)] transition duration-300 hover:-translate-y-1 hover:border-[#D7CC95]">
                    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-[#525252]">Years in Developer Education</p>
                    <p class="mt-3 text-4xl font-semibold tracking-tight text-[#0A0A0A] transition duration-300" x-text="stats[0].display">8+</p>
                </article>
                <article class="card border-[#E7E1C3] bg-white/90 p-7 shadow-[0_12px_30px_rgba(0,0,0,0.04)] transition duration-300 hover:-translate-y-1 hover:border-[#D7CC95]">
                    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-[#525252]">Technical Articles Published</p>
                    <p class="mt-3 text-4xl font-semibold tracking-tight text-[#0A0A0A] transition duration-300" x-text="stats[1].display">100+</p>
                </article>
                <article class="card border-[#E7E1C3] bg-[linear-gradient(180deg,#FFF9DB_0%,#FFFFFF_100%)] p-7 shadow-[0_12px_30px_rgba(0,0,0,0.04)] transition duration-300 hover:-translate-y-1 hover:border-[#D7CC95]">
                    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-[#525252]">Developers Reached</p>
                    <p class="mt-3 text-4xl font-semibold tracking-tight text-[#0A0A0A] transition duration-300" x-text="stats[2].display">Thousands</p>
                </article>
                <article class="card border-[#E7E1C3] bg-white/90 p-7 shadow-[0_12px_30px_rgba(0,0,0,0.04)] transition duration-300 hover:-translate-y-1 hover:border-[#D7CC95]">
                    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-[#525252]">Educational Resources Created</p>
                    <p class="mt-3 text-4xl font-semibold tracking-tight text-[#0A0A0A] transition duration-300" x-text="stats[3].display">100+</p>
                </article>
            </div>

            <div class="mt-14 grid gap-6 lg:grid-cols-[1.1fr_0.9fr] lg:items-center">
                <div class="card p-8 sm:p-10">
                    <h3 class="text-2xl font-semibold tracking-tight text-[#0A0A0A]">Experience Across Developer Ecosystems</h3>
                    <p class="mt-4 max-w-3xl text-sm leading-7 text-[#525252]">Experience creating developer-focused content, educational materials, tutorials, and learning experiences for modern developer platforms.</p>

                    <div class="mt-8 grid gap-4 sm:grid-cols-[auto_auto] sm:items-center sm:gap-8">
                        <p class="text-xl font-semibold tracking-tight text-[#0A0A0A]">MongoDB</p>
                        <p class="border-t border-[#E5E5E5] pt-4 text-xl font-semibold tracking-tight text-[#0A0A0A] sm:border-l sm:border-t-0 sm:pl-8 sm:pt-0">Twilio</p>
                    </div>
                </div>

                <div class="card-surface relative overflow-hidden p-8 sm:p-10">
                    <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(250,204,21,0.14),transparent_38%)]"></div>
                    <div class="relative">
                        <p class="text-xs font-semibold uppercase tracking-[0.18em] text-[#525252]">Selected context</p>
                        <p class="mt-4 text-lg leading-8 text-[#0A0A0A] sm:text-xl">Developer education works best when it is rooted in real product usage, not generic marketing language.</p>
                        <p class="mt-4 text-sm leading-7 text-[#525252]">That is why this section pairs proof, ecosystem experience, and featured content in one place.</p>
                    </div>
                </div>
            </div>

            <div class="mt-14">
                <h3 class="text-2xl font-semibold tracking-tight text-[#0A0A0A]">Selected Work</h3>

                <div class="mt-8 grid gap-6 lg:grid-cols-3">
                    <article class="group card bg-white p-7 transition duration-300 hover:-translate-y-1 hover:border-[#D7CC95] hover:shadow-[0_16px_40px_rgba(0,0,0,0.06)]">
                        <span class="inline-flex rounded-full border border-[#E5E5E5] bg-[#F8F8F8] px-3 py-1 text-xs font-semibold uppercase tracking-[0.14em] text-[#525252]">Tutorial</span>
                        <h4 class="mt-4 text-lg font-semibold tracking-tight text-[#0A0A0A]">Building Scalable APIs with Laravel</h4>
                        <p class="mt-3 text-sm leading-7 text-[#525252]">A practical walkthrough showing teams how to design maintainable APIs with clear developer onboarding paths.</p>
                        <a href="#contact" class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-[#0A0A0A] transition group-hover:gap-3 group-hover:text-[#525252]">
                            Read More
                            <span aria-hidden="true">&rarr;</span>
                        </a>
                    </article>

                    <article class="group card bg-white p-7 transition duration-300 hover:-translate-y-1 hover:border-[#D7CC95] hover:shadow-[0_16px_40px_rgba(0,0,0,0.06)]">
                        <span class="inline-flex rounded-full border border-[#E5E5E5] bg-[#F8F8F8] px-3 py-1 text-xs font-semibold uppercase tracking-[0.14em] text-[#525252]">Guide</span>
                        <h4 class="mt-4 text-lg font-semibold tracking-tight text-[#0A0A0A]">Getting Started with MongoDB Atlas</h4>
                        <p class="mt-3 text-sm leading-7 text-[#525252]">A developer-first onboarding sequence to help teams move from setup to first successful implementation quickly.</p>
                        <a href="#contact" class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-[#0A0A0A] transition group-hover:gap-3 group-hover:text-[#525252]">
                            Read More
                            <span aria-hidden="true">&rarr;</span>
                        </a>
                    </article>

                    <article class="group card bg-white p-7 transition duration-300 hover:-translate-y-1 hover:border-[#D7CC95] hover:shadow-[0_16px_40px_rgba(0,0,0,0.06)]">
                        <span class="inline-flex rounded-full border border-[#E5E5E5] bg-[#F8F8F8] px-3 py-1 text-xs font-semibold uppercase tracking-[0.14em] text-[#525252]">Documentation</span>
                        <h4 class="mt-4 text-lg font-semibold tracking-tight text-[#0A0A0A]">Modern Authentication for Web Applications</h4>
                        <p class="mt-3 text-sm leading-7 text-[#525252]">Clear educational content that helps developers implement secure authentication without onboarding friction.</p>
                        <a href="#contact" class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-[#0A0A0A] transition group-hover:gap-3 group-hover:text-[#525252]">
                            Read More
                            <span aria-hidden="true">&rarr;</span>
                        </a>
                    </article>
                </div>
            </div>

            <div class="mt-14 card-surface border border-[#E7E1C3] p-8 sm:p-10">
                <p class="text-lg leading-8 text-[#0A0A0A] sm:text-xl">
                    Developer education isn't just about writing content.
                </p>
                <p class="mt-4 text-base leading-8 text-[#525252] sm:text-lg">
                    It's about helping developers understand products faster, reducing onboarding friction, and creating learning experiences that improve adoption.
                </p>
            </div>
        </div>
    </section>
    {{-- proof ends here --}}


    <section id="process" class="section-pad border-t border-[#E5E5E5]">
        <div class="site-shell">
            <div class="max-w-3xl">
                <div class="eyebrow">
                    <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
                    Process
                </div>

                <h2 class="mt-4 text-3xl font-semibold tracking-tight text-[#0A0A0A] sm:text-4xl">
                    A simple process built for fast-moving product teams.
                </h2>
            </div>

            <div class="mt-12 grid gap-6 lg:grid-cols-4">
                <article class="card p-7">
                    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-[#525252]">Step 01</p>
                    <p class="mt-3 text-base font-semibold text-[#0A0A0A]">Audit</p>
                    <p class="mt-3 text-sm leading-6 text-[#525252]">Review your product journey, docs, onboarding, and support signals.</p>
                </article>
                <article class="card p-7">
                    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-[#525252]">Step 02</p>
                    <p class="mt-3 text-base font-semibold text-[#0A0A0A]">Prioritize</p>
                    <p class="mt-3 text-sm leading-6 text-[#525252]">Identify the education work with the highest activation impact first.</p>
                </article>
                <article class="card p-7">
                    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-[#525252]">Step 03</p>
                    <p class="mt-3 text-base font-semibold text-[#0A0A0A]">Build</p>
                    <p class="mt-3 text-sm leading-6 text-[#525252]">Create and ship learning assets designed for real developer behavior.</p>
                </article>
                <article class="card p-7">
                    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-[#525252]">Step 04</p>
                    <p class="mt-3 text-base font-semibold text-[#0A0A0A]">Iterate</p>
                    <p class="mt-3 text-sm leading-6 text-[#525252]">Measure clarity, adoption, and support reduction, then refine continuously.</p>
                </article>
            </div>
        </div>
    </section>

    <section id="starter-offer" class="section-pad border-t border-[#E5E5E5] bg-[#F8F8F8]/60">
        <div class="site-shell">
            <div class="grid gap-12 lg:grid-cols-[1.05fr_0.95fr] lg:items-start">
                <div class="max-w-3xl">
                    <div class="eyebrow">
                        <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
                        Starter offer
                    </div>

                    <h2 class="mt-4 text-3xl font-semibold tracking-tight text-[#0A0A0A] sm:text-4xl lg:text-5xl">
                        Developer Education Starter Sprint.
                    </h2>

                    <p class="mt-5 max-w-2xl text-base leading-8 text-[#525252] sm:text-lg">
                        A focused engagement for startups that need a clear education foundation quickly. Ideal when onboarding feels unclear and support keeps absorbing repetitive developer questions.
                    </p>

                    <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                        <a href="#contact" class="button-primary">Book the starter sprint</a>
                        <a href="#process" class="button-secondary">See our process</a>
                    </div>
                </div>

                <div class="card p-8 sm:p-10">
                    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-[#525252]">What you get</p>
                    <ul class="mt-6 space-y-4 text-sm text-[#525252]">
                        <li class="flex items-start gap-3">
                            <span class="mt-0.5 inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full border border-[#E5E5E5] bg-[#F8F8F8]">
                                <svg class="h-3.5 w-3.5 text-[#0A0A0A]" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6">
                                    <path d="M4 10h12M10 4l6 6-6 6" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span>Education gap audit across docs, tutorials, and onboarding.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-0.5 inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full border border-[#E5E5E5] bg-[#F8F8F8]">
                                <svg class="h-3.5 w-3.5 text-[#0A0A0A]" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6">
                                    <path d="M4 10h12M10 4l6 6-6 6" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span>Prioritized roadmap tied to activation and support outcomes.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-0.5 inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full border border-[#E5E5E5] bg-[#F8F8F8]">
                                <svg class="h-3.5 w-3.5 text-[#0A0A0A]" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6">
                                    <path d="M4 10h12M10 4l6 6-6 6" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span>One high-impact education asset shipped in sprint scope.</span>
                        </li>
                    </ul>

                    <div class="mt-8 rounded-2xl border border-[#E5E5E5] bg-[#F8F8F8] p-6">
                        <p class="text-sm font-medium text-[#0A0A0A]">Outcome</p>
                        <p class="mt-2 text-sm leading-6 text-[#525252]">You leave with a clear direction, aligned priorities, and immediate momentum.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="founder-story" class="section-pad border-t border-[#E5E5E5] bg-[#F8F8F8]/60">
        <div class="site-shell">
            <div class="grid gap-10 lg:grid-cols-[0.95fr_1.05fr] lg:items-start">
                <div class="card-surface overflow-hidden p-0">
                    <img
                        src="https://media.licdn.com/dms/image/v2/D4D03AQG1CSmVRhcomA/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1728111048385?e=1781740800&v=beta&t=lFmSuO0jRFrtNaTmO0_SeWjM0ZRtZivcE6ON-xVRMLQ"
                        alt="Portrait of Moses"
                        class="h-[28rem] w-full object-cover object-center sm:h-[34rem]"
                    >
                </div>

                <div class="max-w-3xl">
                    <div class="eyebrow">
                        <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
                        Founder story
                    </div>
                    <h2 class="mt-4 text-3xl font-semibold tracking-tight text-[#0A0A0A] sm:text-4xl lg:text-5xl">Built from product and developer education experience.</h2>
                    <p class="mt-6 text-base leading-8 text-[#525252] sm:text-lg">
                        CodeContent.pro started from a simple observation: many strong products fail to earn adoption because education is treated as an afterthought. Developers are asked to figure out complex systems without a coherent path.
                    </p>
                    <p class="mt-6 text-base leading-8 text-[#525252] sm:text-lg">
                        We built this agency to close that gap. Our work combines technical depth, instructional design, and product thinking so developer-facing teams can make learning part of their growth engine.
                    </p>
                    <p class="mt-6 text-base leading-8 text-[#525252] sm:text-lg">
                        The goal is not more content. The goal is better outcomes: faster activation, lower support load, and developer experiences people trust.
                    </p>

                    <div class="mt-8 flex flex-wrap items-center gap-3">
                        <a href="#contact" class="button-primary">Talk to the founder</a>
                        <a href="#starter-offer" class="button-secondary">Start with the sprint</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="section-pad">
        <div class="site-shell">
            <div class="card overflow-hidden">
                <div class="grid gap-0 lg:grid-cols-[1fr_auto] lg:items-stretch">
                    <div class="p-8 sm:p-10 lg:p-12">
                        <div class="eyebrow">
                            <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
                            Contact
                        </div>
                        <h2 id="contact-heading" class="mt-4 max-w-xl text-3xl font-semibold tracking-tight text-[#0A0A0A] sm:text-4xl">
                            If the product is technical, the education should be precise.
                        </h2>
                        <p class="mt-4 max-w-2xl text-base leading-7 text-[#525252] sm:text-lg">
                            We partner with teams that want stronger adoption, clearer onboarding, and a better developer experience.
                        </p>

                        <div class="mt-8 flex flex-wrap items-center gap-x-6 gap-y-3 text-sm text-[#525252]">
                            <span class="inline-flex items-center gap-2.5">
                                <span class="inline-flex h-6 w-6 items-center justify-center rounded-full border border-[#E5E5E5] bg-[#F8F8F8]">
                                    <svg class="h-3.5 w-3.5 text-[#0A0A0A]" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6">
                                        <path d="M4 10h12M10 4l6 6-6 6" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                Typical response in 24 hours
                            </span>
                            <span class="inline-flex items-center gap-2.5">
                                <span class="inline-flex h-6 w-6 items-center justify-center rounded-full border border-[#E5E5E5] bg-[#F8F8F8]">
                                    <svg class="h-3.5 w-3.5 text-[#0A0A0A]" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6">
                                        <path d="M4 10h12M10 4l6 6-6 6" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                Founder-led conversation
                            </span>
                        </div>
                    </div>

                    <div class="border-t border-[#E5E5E5] bg-[#F8F8F8] p-8 lg:border-l lg:border-t-0 lg:p-10" aria-labelledby="contact-heading">
                        <p class="text-xs font-semibold uppercase tracking-[0.18em] text-[#525252]">Direct contact</p>
                        <p class="mt-3 text-base font-semibold text-[#0A0A0A]">Share your product and education goals.</p>
                        <p class="mt-2 text-sm leading-6 text-[#525252]">Email is the fastest way to start. Include your product URL and current onboarding challenge.</p>
                        <a href="mailto:hello@codecontent.pro" class="button-primary mt-6 w-full sm:w-auto" aria-label="Email CodeContent at hello@codecontent.pro">hello@codecontent.pro</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection