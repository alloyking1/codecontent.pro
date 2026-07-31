@extends('layouts.app')

@section('title', 'About CodeContent.pro | Technical Engineering & Knowledge Agency')
@section('meta_description', 'Learn about CodeContent.pro, an agency founded by engineers to deliver custom software, AI automation, technical documentation, and EdTech course development.')
@section('meta_keywords', 'CodeContent agency, technical writing firm founder, software engineering agency, EdTech course developers, developer documentation experts')

@section('content')
<section class="py-20 pt-20 sm:pt-24 lg:pt-28">
    <div class="container mx-auto px-4 max-w-6xl">
        <div class="max-w-5xl mx-auto text-center">
            <x-custom.yellow-dot>ABOUT CODECONTENT.PRO</x-custom.yellow-dot>

            <h1 class="mt-6 text-4xl font-bold tracking-tight md:text-6xl">
                We Believe Software and Technical Knowledge Should Be Engineered Together.
            </h1>

            <p class="mx-auto mt-6 max-w-3xl text-lg leading-8 text-[#525252]">
                CodeContent is a technical agency bridging the gap between high-performance software engineering, clear developer documentation, and interactive EdTech learning systems.
            </p>

            <div class="mt-8 flex flex-wrap items-center justify-center gap-3 text-sm font-medium uppercase tracking-[0.2em] text-[#525252]">
                <span>Founded in 2024</span>
                <span class="hidden h-1.5 w-1.5 rounded-full bg-[#FACC15] sm:block"></span>
                <span>B2B SaaS & Enterprise Focus</span>
                <span class="hidden h-1.5 w-1.5 rounded-full bg-[#FACC15] sm:block"></span>
                <span>Engineers First</span>
            </div>
        </div>
    </div>
</section>

<section class="section-pad border-t border-[#E5E5E5]">
    <div class="site-shell">
        <div class="grid items-center gap-16 md:grid-cols-2 lg:grid-cols-[320px,1fr]">
            <div>
                <img
                    src="moses.jpeg"
                    alt="Moses Anu"
                    class="w-full rounded-2xl border border-[#E5E5E5] object-cover object-center"
                >
            </div>

            <div>
                <x-custom.yellow-dot>OUR ORIGIN</x-custom.yellow-dot>

                <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                    Why We Built CodeContent
                </h2>

                <p class="mt-6 text-lg leading-8 text-[#525252]">
                    The best software in the world fails if no one knows how to build with it, operate it, or adopt it.
                </p>

                <blockquote class="mt-6 border-l-2 border-[#FACC15] pl-6 text-lg leading-8 text-[#2E2E2E]">
                    As a software engineer, I noticed a recurring pattern across tech companies: engineering teams were constantly forced to choose between building core product features or patching together internal admin tools, writing developer docs, and creating training materials.
                </blockquote>

                <p class="mt-6 text-lg leading-8 text-[#525252]">
                    Off-the-shelf software rarely fit their needs, non-technical writers produced surface-level marketing fluff that developers ignored, and internal tools were built as fragile side projects.
                </p>

                <p class="mt-6 text-lg leading-8 text-[#525252]">
                    I founded <span class="font-semibold text-[#0A0A0A]">CodeContent.pro</span> to fix this disconnect. We are a specialized team of software engineers, technical authors, and instructional designers who read source code, inspect APIs, and build real production tools before writing a single guide or course module.
                </p>

                <p class="mt-6 text-lg leading-8 text-[#525252]">
                    Whether we are fine-tuning an AI model, drafting API reference docs, or building an Articulate 360 course, our mission is simple: <span class="font-semibold text-[#0A0A0A]">to engineer the systems and knowledge tech brands need to scale.</span>
                </p>

                <div class="mt-8">
                    <p class="text-lg font-semibold text-[#0A0A0A]">— Anumadu Udodiri Moses</p>
                    <p class="mt-1 text-sm uppercase tracking-[0.2em] text-[#525252]">Founder & Lead Engineer, CodeContent.pro</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-pad border-t border-[#E5E5E5]">
    <div class="site-shell">
        <div class="max-w-4xl">
            <x-custom.yellow-dot>HOW WE THINK</x-custom.yellow-dot>

            <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl lg:text-5xl">
                The CodeContent Principles
            </h2>

            <div class="mt-10 grid gap-8 md:grid-cols-3">
                <div class="rounded-xl border border-[#E5E5E5] p-8">
                    <h3 class="text-xl font-semibold">Code First, Words Second</h3>
                    <p class="mt-4 leading-8 text-[#525252]">
                        We don't write about technology from a distance. We clone the repository, test the APIs, run the scripts, and build working solutions first.
                    </p>
                </div>

                <div class="rounded-xl border border-[#E5E5E5] p-8">
                    <h3 class="text-xl font-semibold">Full-Lifecycle Knowledge Transfer</h3>
                    <p class="mt-4 leading-8 text-[#525252]">
                        Building software is only half the battle. We treat internal tools, developer docs, and e-learning courses as core extensions of your software stack.
                    </p>
                </div>

                <div class="rounded-xl border border-[#E5E5E5] p-8">
                    <h3 class="text-xl font-semibold">Zero Technical Fluff</h3>
                    <p class="mt-4 leading-8 text-[#525252]">
                        Developers and technical buyers see right through generic marketing speak. Every article, code snippet, and course module we build is precise, tested, and outcome-driven.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 border-t border-[#E5E5E5]">
    <div class="container mx-auto px-4 max-w-6xl">
        <div class="mx-auto max-w-3xl text-center">
            <x-custom.yellow-dot>WHAT WE DELIVER</x-custom.yellow-dot>

            <h2 class="mt-4 text-3xl font-semibold sm:text-4xl lg:text-5xl">
                Our 3 Pillars of Expertise
            </h2>
        </div>

        <div class="mt-16 grid gap-8 md:grid-cols-3">
            <div class="rounded-xl border border-[#E5E5E5] p-8">
                <h3 class="text-xl font-semibold">Custom Software &amp; AI Engineering</h3>
                <p class="mt-4 leading-8 text-[#525252]">
                    Bespoke internal tools, AI automation pipelines, RAG implementations, and model fine-tuning built for speed and operational efficiency.
                </p>
            </div>

            <div class="rounded-xl border border-[#E5E5E5] p-8">
                <h3 class="text-xl font-semibold">Technical Writing &amp; Developer Media</h3>
                <p class="mt-4 leading-8 text-[#525252]">
                    Pristine API documentation, deep-dive developer tutorials, architectural breakdowns, and SEO-driven developer guides.
                </p>
            </div>

            <div class="rounded-xl border border-[#E5E5E5] p-8">
                <h3 class="text-xl font-semibold">EdTech &amp; Course Engineering</h3>
                <p class="mt-4 leading-8 text-[#525252]">
                    Interactive SCORM-compliant e-learning modules (Articulate 360), structured technical curricula, and scalable developer onboarding paths.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section-pad border-t border-[#E5E5E5]">
    <div class="container mx-auto px-4 max-w-4xl text-center">
        <h2 class="text-4xl font-bold">
            Ready to Work with an Agency That Speaks Your Code?
        </h2>

        <p class="mt-6 text-lg leading-8 text-[#525252]">
            Whether you need custom software built, technical docs written, or courses engineered, let’s get on a call.
        </p>

        <div class="mt-10 flex flex-wrap justify-center gap-4">
            <a
                class="inline-block rounded-xl bg-black px-8 py-4 font-medium text-white transition hover:bg-gray-800"
                target="_blank"
                href="https://calendly.com/moses-codecontent/30min"
            >
                Schedule a Call with the Team
            </a>

            <a
                class="inline-block rounded-xl border border-[#E5E5E5] px-8 py-4 font-medium text-[#0A0A0A] transition hover:bg-gray-50"
                href="{{ route('featured-publications') }}"
            >
                View Our Case Studies &amp; Portfolio →
            </a>
        </div>
    </div>
</section>
@endsection