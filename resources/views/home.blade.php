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
                    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-[#525252]">Why teams choose us</p>
                    <h2 class="mt-3 text-2xl font-semibold tracking-tight text-[#0A0A0A]">Built by developers, for developer-facing products.</h2>
                    <p class="mt-4 text-sm leading-7 text-[#525252]">We combine product understanding and educational design to make complex tools easier to adopt.</p>

                    <ul class="mt-8 space-y-4 text-sm text-[#525252]">
                        <li class="flex items-start gap-3">
                            <span class="mt-0.5 inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full border border-[#E5E5E5] bg-white">
                                <svg class="h-3.5 w-3.5 text-[#0A0A0A]" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6">
                                    <path d="M4 10h12M10 4l6 6-6 6" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span>Strategy aligned with activation and onboarding goals.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-0.5 inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full border border-[#E5E5E5] bg-white">
                                <svg class="h-3.5 w-3.5 text-[#0A0A0A]" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6">
                                    <path d="M4 10h12M10 4l6 6-6 6" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span>Educational systems for docs, tutorials, and onboarding.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-0.5 inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full border border-[#E5E5E5] bg-white">
                                <svg class="h-3.5 w-3.5 text-[#0A0A0A]" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6">
                                    <path d="M4 10h12M10 4l6 6-6 6" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span>Delivery using Laravel, Blade, Alpine.js, and Tailwind CSS.</span>
                        </li>
                    </ul>

                    <div class="mt-8 border-t border-[#E5E5E5] pt-6">
                        <p class="text-sm font-medium text-[#0A0A0A]">Senior-led collaboration, from discovery to execution.</p>
                    </div>
                </div>
            </div>

            <div class="mt-14 border-y border-[#E5E5E5] py-8">
                <div class="grid gap-5 md:grid-cols-4">
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
                    We design developer education systems that improve product adoption.
                </h2>

                <p class="mt-4 text-base leading-7 text-[#525252] sm:text-lg">
                    Instead of selling isolated deliverables, we build connected education experiences that help developers understand your product faster and succeed with it.
                </p>
            </div>

            <div class="mt-14 grid gap-8 lg:grid-cols-1 xl:grid-cols-2 xl:gap-10">
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

    <section id="founder-story" class="section-pad border-t border-[#E5E5E5] bg-[#F8F8F8]/60">
        <div class="site-shell">
            <div class="grid gap-10 lg:grid-cols-[0.9fr_1.1fr] lg:items-start">
                <div class="card-surface p-8 sm:p-10">
                    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-[#525252]">Founder story</p>
                    <p class="mt-4 text-2xl font-semibold tracking-tight text-[#0A0A0A]">Built from product and developer education experience.</p>
                </div>

                <div class="max-w-3xl">
                    <p class="text-base leading-8 text-[#525252] sm:text-lg">
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