@extends('layouts.app')

@section('title', 'CodeContent.pro | Developer Education That Helps Startups Grow')

@section('content')
    <section id="hero" class="section-pad pt-16 sm:pt-20 lg:pt-24">
        <div class="site-shell">
            <div class="grid gap-10 lg:grid-cols-[1.2fr_0.8fr] lg:items-center">
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

                    <div class="mt-10 flex flex-wrap items-center gap-x-6 gap-y-3 text-sm text-[#525252]">
                        <span class="inline-flex items-center gap-2">
                            <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
                            Faster activation
                        </span>
                        <span class="inline-flex items-center gap-2">
                            <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
                            Better onboarding
                        </span>
                        <span class="inline-flex items-center gap-2">
                            <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
                            Reduced support burden
                        </span>
                    </div>
                </div>

                <div class="card-surface p-7 sm:p-8">
                    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-[#525252]">Why teams choose us</p>
                    <h2 class="mt-3 text-2xl font-semibold tracking-tight text-[#0A0A0A]">Built by developers, for developer-facing products.</h2>
                    <p class="mt-4 text-sm leading-7 text-[#525252]">We combine product understanding and educational design to make complex tools easier to adopt.</p>

                    <ul class="mt-6 space-y-3 text-sm text-[#525252]">
                        <li class="flex items-start gap-3">
                            <span class="mt-1 h-2 w-2 shrink-0 rounded-full bg-[#FACC15]"></span>
                            <span>Strategy aligned with activation and onboarding goals.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 h-2 w-2 shrink-0 rounded-full bg-[#FACC15]"></span>
                            <span>Educational systems for docs, tutorials, and onboarding.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 h-2 w-2 shrink-0 rounded-full bg-[#FACC15]"></span>
                            <span>Delivery using Laravel, Blade, Alpine.js, and Tailwind CSS.</span>
                        </li>
                    </ul>

                    <div class="mt-6 border-t border-[#E5E5E5] pt-5">
                        <p class="text-sm font-medium text-[#0A0A0A]">Senior-led collaboration, from discovery to execution.</p>
                    </div>
                </div>
            </div>

            <div class="mt-10 border-y border-[#E5E5E5] py-6">
                <div class="grid gap-4 md:grid-cols-4">
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

            <div class="mt-10 grid gap-4 lg:grid-cols-2">
                <article class="card p-6">
                    <p class="text-sm font-semibold text-[#0A0A0A]">Technical content creation</p>
                    <p class="mt-3 text-sm leading-6 text-[#525252]">Narratives and explainers that help developers understand product value and implementation paths.</p>
                </article>
                <article class="card p-6">
                    <p class="text-sm font-semibold text-[#0A0A0A]">Documentation</p>
                    <p class="mt-3 text-sm leading-6 text-[#525252]">Structured docs that reduce confusion, lower support pressure, and improve developer self-serve success.</p>
                </article>
                <article class="card p-6">
                    <p class="text-sm font-semibold text-[#0A0A0A]">Developer tutorials</p>
                    <p class="mt-3 text-sm leading-6 text-[#525252]">Step-by-step onboarding content that guides developers from first touch to real product use.</p>
                </article>
                <article class="card p-6">
                    <p class="text-sm font-semibold text-[#0A0A0A]">Video content</p>
                    <p class="mt-3 text-sm leading-6 text-[#525252]">Clear walkthroughs for complex workflows, helping teams communicate quickly across learning styles.</p>
                </article>
                <article class="card p-6">
                    <p class="text-sm font-semibold text-[#0A0A0A]">Developer onboarding</p>
                    <p class="mt-3 text-sm leading-6 text-[#525252]">Intentional first-run journeys that reduce friction and improve activation in the first sessions.</p>
                </article>
                <article class="card p-6">
                    <p class="text-sm font-semibold text-[#0A0A0A]">Instructional design</p>
                    <p class="mt-3 text-sm leading-6 text-[#525252]">Learning architecture that aligns educational assets with product milestones and business goals.</p>
                </article>
                <article class="card p-6">
                    <p class="text-sm font-semibold text-[#0A0A0A]">Learning systems</p>
                    <p class="mt-3 text-sm leading-6 text-[#525252]">Repeatable education frameworks that scale with your platform and future feature launches.</p>
                </article>
                <article class="card p-6">
                    <p class="text-sm font-semibold text-[#0A0A0A]">Community-building support</p>
                    <p class="mt-3 text-sm leading-6 text-[#525252]">Support for programs that help developers share wins, stay engaged, and deepen adoption.</p>
                </article>
            </div>
        </div>
    </section>

    <section id="why-education" class="section-pad border-t border-[#E5E5E5]">
        <div class="site-shell">
            <div class="grid gap-10 lg:grid-cols-[1.1fr_0.9fr] lg:items-start">
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

                    <div class="mt-8 grid gap-3 sm:grid-cols-3">
                        <div class="metric">
                            <p class="text-xs font-semibold uppercase tracking-[0.18em] text-[#525252]">Activation</p>
                            <p class="mt-2 text-sm font-semibold text-[#0A0A0A]">Developers reach first success faster</p>
                        </div>
                        <div class="metric">
                            <p class="text-xs font-semibold uppercase tracking-[0.18em] text-[#525252]">Support</p>
                            <p class="mt-2 text-sm font-semibold text-[#0A0A0A]">Teams handle fewer repetitive questions</p>
                        </div>
                        <div class="metric">
                            <p class="text-xs font-semibold uppercase tracking-[0.18em] text-[#525252]">Experience</p>
                            <p class="mt-2 text-sm font-semibold text-[#0A0A0A]">Your product feels easier to adopt</p>
                        </div>
                    </div>
                </div>

                <div class="card p-7 sm:p-8">
                    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-[#525252]">Common pattern we fix</p>
                    <div class="mt-4 space-y-4">
                        <div>
                            <p class="text-sm font-semibold text-[#0A0A0A]">Before</p>
                            <p class="mt-2 text-sm leading-7 text-[#525252]">Strong product, fragmented education, slow onboarding, and support-heavy adoption.</p>
                        </div>
                        <div class="border-t border-[#E5E5E5] pt-4">
                            <p class="text-sm font-semibold text-[#0A0A0A]">After</p>
                            <p class="mt-2 text-sm leading-7 text-[#525252]">A connected education system where docs, tutorials, and onboarding reinforce each other.</p>
                        </div>
                    </div>

                    <div class="mt-6 rounded-2xl border border-[#E5E5E5] bg-[#F8F8F8] p-5">
                        <p class="text-sm font-medium text-[#0A0A0A]">Education is a growth lever.</p>
                        <p class="mt-2 text-sm leading-6 text-[#525252]">When developers understand your product, they adopt more features, stay longer, and recommend it with confidence.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="section-pad">
        <div class="site-shell">
            <div class="card overflow-hidden">
                <div class="grid gap-0 lg:grid-cols-[1fr_auto] lg:items-center">
                    <div class="p-8 sm:p-10 lg:p-12">
                        <div class="eyebrow">
                            <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
                            Start here
                        </div>
                        <h2 class="mt-4 max-w-xl text-3xl font-semibold tracking-tight text-[#0A0A0A] sm:text-4xl">
                            If the product is technical, the education should be precise.
                        </h2>
                        <p class="mt-4 max-w-2xl text-base leading-7 text-[#525252] sm:text-lg">
                            We partner with teams that want stronger adoption, clearer onboarding, and a better developer experience.
                        </p>
                    </div>

                    <div class="border-t border-[#E5E5E5] bg-[#F8F8F8] p-8 lg:border-l lg:border-t-0 lg:p-10">
                        <p class="text-sm font-semibold text-[#0A0A0A]">Contact</p>
                        <p class="mt-2 text-sm leading-6 text-[#525252]">Email the team to start the conversation.</p>
                        <a href="mailto:hello@codecontent.pro" class="button-primary mt-6 w-full sm:w-auto">hello@codecontent.pro</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection