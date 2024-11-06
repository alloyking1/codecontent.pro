@props([
    'title' => '',
    'description' => '',
    'btn_text' => '',
    'btn_link' => '',
    'bg' => 'yellow'
])
<div>
    <div class="grid md:grid-cols-3 gap-4">
        <div {{ $attributes->class(['p-6 py-40 col-span-2',
            'bg-[#ffe14f]' => $bg == 'yellow',
            'bg-[#b89ee7]' => $bg == 'purple',
            'bg-[#37fe90]' => $bg == 'green',
        ]) }}>
             <div class="md:hidden bg-white rounded-full grid place-content-center -mt-10 mb-4">
                <img class="rounded-full w-60" src="{{ asset('img/moses-edited-nobg.png') }}" alt="">
            </div>
            <div>
                <h1 class="md:text-7xl text-5xl font-black md:font-thin">{{ $title }}</h1>
            </div>
            <div class="my-8">
                <p class="text-xl">{{ $description }}</p>
            </div>
            <div class="">
                <div class="text-[#ffff] mt-4">
                    <x-pages.portfolio.btn.socials.calendly/>
                </div>
                {{-- <div class="w-full flex">
                    <x-pages.portfolio.btn.socials.linkedin/>
                    <x-pages.portfolio.btn.socials.twitter/>
                </div> --}}
            </div>
        </div>
        <div class="hidden md:block border-b-2 border-black rounded-full">
            <img class="rounded-full" src="{{ asset('img/moses-edited-nobg.png') }}" alt="">
        </div>

        <div class="p-10 col-span-2 relative md:ml-80 ml-[20%] -mt-16 z-[100] rounded-l-full bg-[#f7f6fa]"></div>
        <div class="hidden md:p-8 md:block"></div>
    </div>
</div>