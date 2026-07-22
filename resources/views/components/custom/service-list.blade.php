@props([
    'title' => '',
    'description' => '',
    'yellowDotText' => 'Services',
    'image' => '',
    'leanMoreLink' => '#',
])

<section class="py-8 pb-20">
    <div class="site-shell grid md:grid-cols-2 gap-12">
        <div class="md:pr-8">
            <div class="">

                <x-custom.yellow-dot>{{ $yellowDotText }}</x-custom.yellow-dot>
    
                <h2 class="mt-4 text-4xl font-semibold-[0.2] tracking-tight text-[#0A0A0A] sm:text-6xl">
                    {{ $title }}
                </h2>
    
                <p class="my-12 text-base leading-7 text-[#525252] sm:text-lg">
                   {{ $description }}
                </p>
            </div>

            <div class="mr-4">
                
                <div class="pb-10">
                    <a class="button-secondary px-8" href="{{ $leanMoreLink }}">Learn More</a>
                </div>

                {{ $slot }}
            </div>
        </div>
        <div>
            <img
                src="{{ $image }}"
                alt="Illustration of a developer learning about a product"
                class="w-full h-auto"
            >
            {{-- <a href="https://storyset.com/design">Design illustrations by Storyset</a> --}}
        </div>
    </div>
</section>



{{-- <section id="services" class="section-pad  bg-[#F8F8F8]/60">
    <div class="site-shell">
        <div class="max-w-3xl">

            <x-custom.yellow-dot>Services</x-custom.yellow-dot>

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

        </div>
    </div>
</section> --}}