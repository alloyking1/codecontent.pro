@props([
    'title' => '',
    'yellowDotText' => 'Services',
    'description' => '',
    'steps' => [
        [
            'number' => '01',
            'title' => 'Discover',
            'description' => 'Understand your product, audience, and goals.',
        ],
        [
            'number' => '02',
            'title' => 'Research',
            'description' => 'Explore the product, technology, and market.',
        ],
        [
            'number' => '03',
            'title' => 'Create',
            'description' => 'Turn technical knowledge into useful content.',
        ],
        // [
        //     'number' => '04',
        //     'title' => 'Optimize',
        //     'description' => 'Refine for clarity, search, and adoption.',
        // ],
        // [
        //     'number' => '05',
        //     'title' => 'Deliver',
        //     'description' => 'Ship, measure, and continuously improve.',
        // ],
    ],
])



<section id="services" class="section-pad bg-gray-50">

    <div class="mx-auto px-4 md:px-0 site-shell">

        <div class=" mx-auto">
            <x-custom.yellow-dot class="">{{ $yellowDotText }}</x-custom.yellow-dot>
            <h2 class="text-4xl font-semibold tracking-tight text-[#0A0A0A]">
                {{ $title }}
            </h2>

            <p class="mt-4 text-lg leading-7 text-[#525252] sm:text-xl pb-4">
                {{ $description }}
            </p>

        </div>

        <div class="">
            {{ $slot }}
            <div class="">

                <div class="grid md:grid-cols-3 w-full">
        
                    @foreach ($steps as $step)
        
                        <div class="group relative px-6 text-center">
        
                            {{-- Arrow --}}
                            @if (!$loop->last)
                                <div class="absolute right-[-12px] top-12 hidden md:block">
                                    <svg
                                        class="h-5 w-5 text-[#FACC15]"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M5 12h13m-5-5 5 5-5 5"
                                        />
                                    </svg>
                                </div>
                            @endif
        
                            {{-- Number --}}
                            <div class="mx-auto flex h-24 w-24 items-center justify-center rounded-full border border-[#E5E5E5] bg-white text-3xl font-medium tracking-tight text-[#0A0A0A] transition-all duration-300 group-hover:border-[#FACC15] group-hover:bg-[#FACC15]">
                                {{ $step['number'] }}
                            </div>
        
                            {{-- Content --}}
                            <div class="mt-7">
                                <h3 class="text-lg font-medium tracking-tight text-[#0A0A0A]">
                                    {{ $step['title'] }}
                                </h3>
        
                                <p class="mx-auto mt-3 max-w-[190px] text-sm leading-6 text-gray-500">
                                    {{ $step['description'] }}
                                </p>
                            </div>
        
                        </div>
        
                    @endforeach
        
                </div>
        
            </div>
        </div>

    </div>

</section>

