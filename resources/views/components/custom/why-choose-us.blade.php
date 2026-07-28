@props([
    'yellowDotText' => 'WHY CODECONTENT',
    'title' => 'Why Tech Leaders Trust CodeContent',
])
<div class="m-4 rounded-4xl bg-[#f4f5f6] p-4">
    <div class="md:pr-8 order-2 md:order-0">
        <div class="max-w-6xl mx-auto">

            <x-custom.yellow-dot>{{ $yellowDotText }}</x-custom.yellow-dot>

            <div class="pb-36">
                <h2 class="mt-4 text-3xl font-semibold-[0.2] tracking-tight text-[#0A0A0A] sm:text-4xl">
                    {{ $title }}
                </h2>
            </div>

            <div class="grid md:grid-cols-3 py-12">
                <div class="border-l border-gray-300 px-4 mb-8">
                    <h3 class="text-6xl">
                        Real Engineering Roots
                    </h3>

                    <p class="text-sm text-gray-600 pt-4">
                        We are software engineers first. We read the source code, inspect APIs, and build real solutions before writing a single word or course module.
                    </p>
                </div>
                <div class="border-l border-gray-300 px-4 mb-8">
                    <h3 class="text-6xl">
                        End-to-End Delivery Workflow
                    </h3>

                    <p class="text-sm text-gray-600 pt-4">
                        Stop juggling separate engineering agencies, technical writers, and instructional designers. CodeContent handles the entire knowledge and execution pipeline.
                    </p>
                </div>
                <div class="border-l border-gray-300 px-4 mb-8">
                    <h3 class="text-6xl">
                        Search & Adoption Focused
                    </h3>

                    <p class="text-sm text-gray-600 pt-4">
                        Every tutorial, article, and documentation page is optimized for technical SEO—helping developer tools and SaaS products capture organic search traffic.
                    </p>
                </div>
            </div>
            
        </div>
    </div>
</div>