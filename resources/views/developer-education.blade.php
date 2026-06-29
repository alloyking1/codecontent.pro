@extends('layouts.app')

@section('title', 'CodeContent.pro | Developer Education That Helps Startups Grow')
@section('meta_description', 'CodeContent.pro is a developer education agency helping startups and SaaS teams improve onboarding, activation, and developer adoption through content, documentation, and learning systems.')

@section('content')
<section class="py-20 pt-20 sm:pt-24 lg:pt-28">
    <div class="container mx-auto px-4 max-w-6xl">

        <!-- Hero -->
        <div class="max-w-6xl mx-auto text-center">

            <div class="eyebrow">
                <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
                Developer Education
            </div>

            <h1 class="mt-6 md:text-6xl text-4xl font-bold tracking-tight">
                Create Learning Experiences That Help Developers Succeed
            </h1>

            <p class="mt-6 text-lg max-w-3xl mx-auto text-gray-600 leading-8">
                Great products deserve great education. CodeContent helps SaaS companies,
                developer platforms, and engineering teams design technical learning
                experiences that improve onboarding, increase product adoption, and help
                developers build confidence faster.
            </p>

            <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/book-a-call"
                   class="px-6 py-3 rounded-xl bg-black text-white font-medium hover:bg-gray-800 transition">
                    Book a Discovery Call
                </a>

                <a href="#services"
                   class="px-6 py-3 rounded-xl border border-gray-300 text-gray-800 font-medium hover:bg-gray-50 transition">
                    Explore Services
                </a>
            </div>

        </div>

    </div>
</section>


<section class="section-pad border-t border-[#E5E5E5]">

    <div class="site-shell">

        <div class="max-w-4xl">

            <div class="eyebrow">
                <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
                Why Developer Education Matters
            </div>

            <h2 class="mt-4 text-3xl font-semibold tracking-tight text-[#0A0A0A] sm:text-4xl lg:text-5xl">
                Help Developers Learn Faster, Adopt Products Faster, and Stay Engaged
            </h2>

            <p class="mt-6 text-lg leading-8 text-[#525252]">
                Whether you're teaching developers to use your product, training internal engineering
                teams, or building educational content for a global developer community, effective
                learning experiences accelerate understanding and improve long-term success.
            </p>

            <p class="mt-6 text-lg leading-8 text-[#525252]">
                We combine software development knowledge with instructional design to create
                educational resources that are practical, engaging, and designed around how
                developers actually learn.
            </p>

        </div>

    </div>

</section>


<section id="services" class="py-20 section-pad border-t border-[#E5E5E5]">

    <div class="container mx-auto px-4 max-w-6xl">

        <div class="max-w-6xl mx-auto text-center">

            <div class="eyebrow">
                <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
                Services
            </div>

            <h2 class="text-3xl max-w-xl mx-auto font-semibold tracking-tight text-[#0A0A0A] sm:text-4xl lg:text-5xl pb-4">
                Developer Education Services
            </h2>

        </div>

        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

            <div class="rounded-xl border border-[#E5E5E5] p-8">
                <h3 class="text-xl font-semibold mb-4">
                    Technical Course Development
                </h3>

                <p class="text-gray-600">
                    End-to-end course creation for technical products, programming topics,
                    developer tools, and engineering teams.
                </p>
            </div>

            <div class="rounded-xl border border-[#E5E5E5] p-8">
                <h3 class="text-xl font-semibold mb-4">
                    Instructional Design
                </h3>

                <p class="text-gray-600">
                    Learning experiences built around clear objectives, measurable outcomes,
                    and developer-first teaching strategies.
                </p>
            </div>

            <div class="rounded-xl border border-[#E5E5E5] p-8">
                <h3 class="text-xl font-semibold mb-4">
                    Curriculum Design
                </h3>

                <p class="text-gray-600">
                    Structured learning paths that guide developers from foundational concepts
                    to real-world application.
                </p>
            </div>

            <div class="rounded-xl border border-[#E5E5E5] p-8">
                <h3 class="text-xl font-semibold mb-4">
                    Developer Onboarding Content
                </h3>

                <p class="text-gray-600">
                    Educational resources that help new users, customers, and engineering teams
                    become productive more quickly.
                </p>
            </div>

            <div class="rounded-xl border border-[#E5E5E5] p-8">
                <h3 class="text-xl font-semibold mb-4">
                    Developer Advocacy Content
                </h3>

                <p class="text-gray-600">
                    Workshops, tutorials, learning guides, and technical resources that help
                    developer communities succeed.
                </p>
            </div>

            <div class="rounded-xl border border-[#E5E5E5] p-8">
                <h3 class="text-xl font-semibold mb-4">
                    Internal Technical Training
                </h3>

                <p class="text-gray-600">
                    Educational programmes designed to upskill engineering teams and improve
                    technical knowledge across organisations.
                </p>
            </div>

        </div>

    </div>

</section>


<section class="py-20 bg-gray-50">

    <div class="container mx-auto px-4 max-w-6xl">

        <h2 class="text-3xl font-bold mb-12">
            Who We Help
        </h2>

        <div class="grid md:grid-cols-2 gap-8">

            <ul class="space-y-4 text-lg text-gray-600">
                <li>✓ SaaS Companies</li>
                <li>✓ Developer Tool Companies</li>
                <li>✓ AI Platforms</li>
                <li>✓ Engineering Teams</li>
            </ul>

            <ul class="space-y-4 text-lg text-gray-600">
                <li>✓ Developer Relations Teams</li>
                <li>✓ Learning & Development Teams</li>
                <li>✓ Product Enablement Teams</li>
                <li>✓ Technical Training Organisations</li>
            </ul>

        </div>

    </div>

</section>


<section class="py-20">

    <div class="container mx-auto px-4 max-w-4xl text-center">

        <h2 class="text-4xl font-bold">
            Ready to Build Better Developer Learning Experiences?
        </h2>

        <p class="mt-6 text-lg text-gray-600">
            From technical courses and onboarding programmes to instructional design
            and developer advocacy content, CodeContent helps organisations educate
            developers with clarity, confidence, and measurable impact.
        </p>

        <a href="/book-a-call"
           class="inline-block mt-10 rounded-lg bg-primary px-8 py-4 text-white hover:opacity-90">
            Book a Discovery Call
        </a>

    </div>

</section>
@endsection