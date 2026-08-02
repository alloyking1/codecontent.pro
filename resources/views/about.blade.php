@extends('layouts.app')

@section('title', 'About CodeContent.pro | Technical Engineering & Knowledge Agency')
@section('meta_description', 'Learn about CodeContent.pro, an agency founded by engineers to deliver custom software, AI automation, technical documentation, and EdTech course development.')
@section('meta_keywords', 'CodeContent agency, technical writing firm founder, software engineering agency, EdTech course developers, developer documentation experts')

@section('content')
<x-custom.hero-two
    yellowDot="true"
    yellowDotText="ABOUT CODECONTENT.PRO"
    title="We Believe Software and Technical Knowledge Should Be Engineered Together."
    description="CodeContent exists at the intersection of engineering excellence and educational design. We help technology companies build software, document complex systems, and create learning experiences that help people understand and use what they build."
    btnOneLink="https://calendly.com/moses-codecontent/30min"
    btnOneText="Work With Us"
    btnTwoLink="#origin"
    btnTwoText="Our Story"
    image="{{ asset('Questions-pana.png') }}"
    showButton="true"
>
    <div class="mt-8 site-shell pl-8 flex flex-wrap gap-3 text-xs font-medium uppercase tracking-[0.16em] text-[#525252]">

        <span class="rounded-full border border-[#E5E5E5] px-4 py-2">
            Founded in 2024
        </span>

        <span class="rounded-full border border-[#E5E5E5] px-4 py-2">
            B2B SaaS & Enterprise
        </span>

        <span class="rounded-full border border-[#E5E5E5] px-4 py-2">
            Engineers First
        </span>

    </div>
</x-custom.hero-two>
{{-- </section> --}}

<section id="origin" class="section-pad">
    <div class="site-shell">

        <div class="grid items-center gap-12 lg:grid-cols-[320px_1fr] lg:gap-20">

            {{-- Founder image --}}
            <div>

                <img
                    src="{{ asset('moses.jpeg') }}"
                    alt="Founder of CodeContent"
                    class="w-full border border-[#E5E5E5] object-cover"
                >

                <div class="mt-3">
                    <p class="text-xs font-semibold text-[#0A0A0A]">
                        Anumadu Udodiri Moses
                    </p>

                    <p class="mt-1 text-[10px] uppercase tracking-[0.16em] text-[#525252]">
                        Founder & Lead Engineer
                    </p>
                </div>

            </div>


            {{-- Story --}}
            <div>

                <x-custom.yellow-dot>
                    OUR ORIGIN
                </x-custom.yellow-dot>

                <h2 class="mt-4 font-heading text-4xl font-semibold tracking-tight sm:text-5xl">
                    Why We Built CodeContent
                </h2>

                <blockquote class="mt-8 border-l-2 border-[#FACC15] pl-6 font-heading text-xl italic leading-8 text-[#2E2E2E] sm:text-2xl">
                    For years, we watched brilliant engineering teams struggle to communicate their value. There was a fundamental disconnect between the code being shipped and the knowledge being transferred.
                </blockquote>

                <div class="mt-8 space-y-5 text-base leading-7 text-[#525252]">

                    <p>
                        The journey started with a simple observation: technical documentation was often an afterthought, and developer education was frequently disconnected from real-world production environments.
                    </p>

                    <p>
                        We saw an opportunity to fix that disconnect by bringing engineering-level precision to the way technology companies communicate, document, and teach.
                    </p>

                    <p>
                        At CodeContent, we don't just write about technology. We understand how software is built, how APIs work, how developers learn, and what it takes to turn complex technical systems into something people can actually use.
                    </p>

                </div>

            </div>

        </div>

    </div>
</section>

{{-- team --}}
<section class="border-t border-[#E5E5E5] bg-[#0A0A0A] py-24">
    <div class="site-shell">

        <div class="max-w-3xl">

            <x-custom.yellow-dot>
                THE PEOPLE BEHIND THE WORK
            </x-custom.yellow-dot>

            <h2 class="mt-4 font-heading text-4xl font-semibold tracking-tight text-white sm:text-5xl">
                A Small Team. Serious About the Work.
            </h2>

            <p class="mt-5 max-w-2xl text-base leading-7 text-gray-400 sm:text-lg">
                CodeContent brings together engineers, technical writers,
                designers, and learning specialists who care deeply about
                clarity, quality, and the details that make great work possible.
            </p>

        </div>


        <div class="mt-14 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

            {{-- Team Member --}}
            <article class="group">

                <div class="aspect-[4/5] overflow-hidden bg-[#171717]">
                    <img
                        src="{{ asset('team/member-one.jpg') }}"
                        alt="Team member"
                        class="h-full w-full object-cover grayscale transition duration-500 group-hover:scale-[1.02] group-hover:grayscale-0"
                    >
                </div>

                <div class="mt-5">

                    <h3 class="font-heading text-2xl font-semibold text-white">
                        Team Member Name
                    </h3>

                    <p class="mt-1 text-xs font-semibold uppercase tracking-[0.16em] text-[#FACC15]">
                        Software Engineer
                    </p>

                    <p class="mt-3 text-sm leading-6 text-gray-400">
                        Builds reliable software and helps turn complex
                        technical problems into practical solutions.
                    </p>

                </div>

            </article>


            {{-- Team Member --}}
            <article class="group">

                <div class="aspect-[4/5] overflow-hidden bg-[#171717]">
                    <img
                        src="{{ asset('team/member-two.jpg') }}"
                        alt="Team member"
                        class="h-full w-full object-cover grayscale transition duration-500 group-hover:scale-[1.02] group-hover:grayscale-0"
                    >
                </div>

                <div class="mt-5">

                    <h3 class="font-heading text-2xl font-semibold text-white">
                        Team Member Name
                    </h3>

                    <p class="mt-1 text-xs font-semibold uppercase tracking-[0.16em] text-[#FACC15]">
                        Technical Writer
                    </p>

                    <p class="mt-3 text-sm leading-6 text-gray-400">
                        Turns complex products, APIs, and engineering concepts
                        into clear experiences developers can actually use.
                    </p>

                </div>

            </article>


            {{-- Team Member --}}
            <article class="group">

                <div class="aspect-[4/5] overflow-hidden bg-[#171717]">
                    <img
                        src="{{ asset('team/member-three.jpg') }}"
                        alt="Team member"
                        class="h-full w-full object-cover grayscale transition duration-500 group-hover:scale-[1.02] group-hover:grayscale-0"
                    >
                </div>

                <div class="mt-5">

                    <h3 class="font-heading text-2xl font-semibold text-white">
                        Team Member Name
                    </h3>

                    <p class="mt-1 text-xs font-semibold uppercase tracking-[0.16em] text-[#FACC15]">
                        Learning Designer
                    </p>

                    <p class="mt-3 text-sm leading-6 text-gray-400">
                        Designs practical learning experiences that help
                        technical audiences understand and apply new concepts.
                    </p>

                </div>

            </article>

        </div>

    </div>
</section>


{{-- principles --}}
<section class="section-pad border-t border-[#E5E5E5]">
    <div class="site-shell">

        <div class="max-w-3xl">

            <x-custom.yellow-dot>
                HOW WE THINK
            </x-custom.yellow-dot>

            <h2 class="mt-4 font-heading text-4xl font-semibold tracking-tight sm:text-5xl">
                The CodeContent Principles
            </h2>

        </div>


        <div class="mt-12 grid gap-6 md:grid-cols-3">

            <article class="border-t-2 border-[#0A0A0A] bg-[#F8F8F8] p-7">

                <div class="text-xl text-[#CA8A04]">
                    ◇
                </div>

                <h3 class="mt-8 font-heading text-2xl font-semibold">
                    Code First, Words Second
                </h3>

                <p class="mt-4 text-sm leading-6 text-[#525252]">
                    We understand the technology before we explain it. Our work starts with the product, codebase, API, or learning environment.
                </p>

            </article>


            <article class="border-t-2 border-[#FACC15] bg-[#F8F8F8] p-7">

                <div class="text-xl text-[#CA8A04]">
                    ↔
                </div>

                <h3 class="mt-8 font-heading text-2xl font-semibold">
                    Full-Lifecycle Thinking
                </h3>

                <p class="mt-4 text-sm leading-6 text-[#525252]">
                    Software, documentation, content, and learning shouldn't exist in isolation. We design them to work together.
                </p>

            </article>


            <article class="border-t-2 border-[#0A0A0A] bg-[#F8F8F8] p-7">

                <div class="text-xl text-[#CA8A04]">
                    ◇
                </div>

                <h3 class="mt-8 font-heading text-2xl font-semibold">
                    Zero Technical Fluff
                </h3>

                <p class="mt-4 text-sm leading-6 text-[#525252]">
                    Precision matters. Everything we create should make a complex idea easier to understand, build, or use.
                </p>

            </article>

        </div>

    </div>
</section>

{{-- next section --}}
<section class="border-t border-[#E5E5E5] bg-gray-100 py-24">
    <div class="site-shell">

        <div class="max-w-3xl">

            <x-custom.yellow-dot>
                WHAT WE DELIVER
            </x-custom.yellow-dot>

            <h2 class="mt-4 font-heading text-4xl font-semibold tracking-tight text-[#0A0A0A] sm:text-5xl">
                Three Ways We Help Technology Companies Move Forward.
            </h2>

            <p class="mt-6 max-w-2xl text-base leading-7 text-[#525252] sm:text-lg">
                From building the software behind your operations to creating
                the knowledge that helps people use it, we bring engineering,
                content, and learning together under one roof.
            </p>

        </div>


        <div class="mt-16 grid gap-8 md:grid-cols-3">

            {{-- Engineering --}}
            <article class="rounded-2xl border border-[#D9D9D9] bg-white p-8">

                <div class="mb-8 flex h-12 w-12 items-center justify-center rounded-xl bg-[#FACC15] text-xl text-[#0A0A0A]">
                    ⚙
                </div>

                <h3 class="font-heading text-2xl font-semibold text-[#0A0A0A]">
                    Software & AI Engineering
                </h3>

                <p class="mt-4 text-sm leading-7 text-[#525252]">
                    We build practical software and AI systems that solve
                    real operational problems and help teams work better.
                </p>

                <ul class="mt-6 space-y-3 text-sm text-[#525252]">
                    <li>• Custom Software</li>
                    <li>• AI Automation</li>
                    <li>• Internal Tools</li>
                </ul>

            </article>


            {{-- Content --}}
            <article class="rounded-2xl border border-[#D9D9D9] bg-white p-8">

                <div class="mb-8 flex h-12 w-12 items-center justify-center rounded-xl bg-[#FACC15] text-xl text-[#0A0A0A]">
                    ▤
                </div>

                <h3 class="font-heading text-2xl font-semibold text-[#0A0A0A]">
                    Technical Content & Documentation
                </h3>

                <p class="mt-4 text-sm leading-7 text-[#525252]">
                    We turn complex products and engineering knowledge into
                    content that developers can understand, trust, and use.
                </p>

                <ul class="mt-6 space-y-3 text-sm text-[#525252]">
                    <li>• Technical Articles</li>
                    <li>• API Documentation</li>
                    <li>• Developer Tutorials</li>
                </ul>

            </article>


            {{-- EdTech --}}
            <article class="rounded-2xl border border-[#D9D9D9] bg-white p-8">

                <div class="mb-8 flex h-12 w-12 items-center justify-center rounded-xl bg-[#FACC15] text-xl text-[#0A0A0A]">
                    ◇
                </div>

                <h3 class="font-heading text-2xl font-semibold text-[#0A0A0A]">
                    EdTech & Course Engineering
                </h3>

                <p class="mt-4 text-sm leading-7 text-[#525252]">
                    We transform technical knowledge into structured learning
                    experiences that help people learn, practice, and apply.
                </p>

                <ul class="mt-6 space-y-3 text-sm text-[#525252]">
                    <li>• Articulate 360</li>
                    <li>• Technical Courses</li>
                    <li>• Developer Training</li>
                </ul>

            </article>

        </div>

    </div>
</section>


{{-- call to action --}}
<section class="border-t border-[#E5E5E5] py-24">
    <div class="site-shell text-center">

        <h2 class="mx-auto max-w-3xl font-heading text-4xl font-semibold tracking-tight sm:text-5xl">
            Ready to Work With a Team That Understands Your Technology?
        </h2>

        <p class="mx-auto mt-6 max-w-2xl text-base leading-7 text-[#525252]">
            Whether you're building software, educating developers, documenting
            a product, or creating a learning experience, let's talk about what
            you're trying to accomplish.
        </p>

        <div class="mt-8 flex flex-col justify-center gap-3 sm:flex-row">

            <a
                href="https://calendly.com/moses-codecontent/30min"
                target="_blank"
                class="button-primary px-8"
            >
                Schedule a Call
            </a>

            <a
                href="#"
                class="button-secondary px-8"
            >
                View Our Work
            </a>

        </div>

    </div>
</section>

@endsection