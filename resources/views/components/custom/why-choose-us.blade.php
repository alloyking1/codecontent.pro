@props([
    'yellowDotText' => 'WHY CODECONTENT',
    'title' => 'Why Tech Leaders Trust CodeContent',
    'description' => '',
    'body' => [
        [
            'title' => 'Real Engineering Roots',
            'description' => 'We are software engineers first. We read the source code, inspect APIs, and build real solutions before writing a single word or course module.',
        ],
        [
            'title' => 'End-to-End Delivery Workflow',
            'description' => 'Stop juggling separate engineering agencies, technical writers, and instructional designers. CodeContent handles the entire knowledge and execution pipeline.',
        ],
        [
            'title' => 'Search & Adoption Focused',
            'description' => 'Every tutorial, article, and documentation page is optimized for technical SEO—helping developer tools and SaaS products capture organic search traffic.',
        ],
    ],
])

{{-- <div class="m-4 rounded-4xl bg-[#f4f5f6] p-4"> --}}
<div class="m-4 rounded-4xl bg-[#f4f5f6] p-4">
    <div class="order-2 md:order-0 md:pr-8">
        <div class="mx-auto max-w-6xl">

            <x-custom.yellow-dot>{{ $yellowDotText }}</x-custom.yellow-dot>

            <div class=" grid md:grid-cols-12">
                <h2 class="mt-4 md:col-span-6 text-3xl tracking-tight text-[#0A0A0A] sm:text-4xl">
                    {{ $title }}
                </h2>
            </div>
            <div class="pb-36 pt-4 text-gray-600">
                <p>
                    {{ $description }}
                </p>
            </div>

            <div class="grid py-12 md:grid-cols-3">
                @foreach ($body as $item)
                    <div class="mb-8 border-l border-gray-300 px-4">
                        <h3 class="text-6xl">
                            {{ $item['title'] }}
                        </h3>

                        <p class="pt-4 text-sm text-gray-600">
                            {{ $item['description'] }}
                        </p>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</div>