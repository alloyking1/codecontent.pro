@props([
    'title' => '',
    'yellowDotText' => 'Services',
    'description' => '',
])

<br/>
<section id="services" class="section-pad">

    <div class="mx-auto px-4 max-w-7xl">

        <div class="max-w-6xl mx-auto">
            <x-custom.yellow-dot class="">{{ $yellowDotText }}</x-custom.yellow-dot>
            <h2 class="text-6xl font-semibold tracking-tight text-[#0A0A0A]">
                {{ $title }}
            </h2>

            <p class="mt-4 text-lg leading-7 text-[#525252] sm:text-xl pb-4">
                {{ $description }}
            </p>

        </div>

        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-2">
            {{ $slot }}
        </div>

    </div>

</section>