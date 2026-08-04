@props([
    'title' => '',
    'yellowDotText' => 'Services',
    'description' => '',
])

{{-- <br/> --}}
<section id="services" class="section-pad site-shell">

    <div class="mx-auto px-4 md:px-0">

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
        </div>
    </div>

</section>