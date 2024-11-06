@props([
    'title' => '',
    'description' => '',
    'btn_text' => '',
    'btn_link' => '',
    'bg' => 'yellow'
])
<div>
    <div class="grid md:grid-cols-4 gap-4">
        {{-- <div {{ $attributes->class(['p-6 py-40 col-span-2', --}}
        <div {{ $attributes->class(['p-6 py-40 col-span-2',
            'bg-[#ffe14f]' => $bg == 'yellow',
            'bg-[#b89ee7]' => $bg == 'purple',
            'bg-[#37fe90]' => $bg == 'green',
            'bg-[#f7f6fa]' => $bg == 'white',
        ]) }}>
             <div class="md:hidden bg-[#b89ee7] rounded-full grid place-content-center -mt-10 mb-4">
                <img class="rounded-full w-60" src="{{ asset('img/moses-edited-nobg.png') }}" alt="">
            </div>
            <div class="md:grid md:place-content-center md:mt-20">
                <h1 class="md:text-4xl text-3xl font-black md:font-thin" style="font-family:Founders Grotesk Mono Light,Founders Grotesk Mono Test,monospace">{{ $title }}</h1>
            </div>
            <div class="my-8">
                <p class="text-base">{{ $description }}</p>
            </div>
            <div class="">
                <div class="text-[#ffff] mt-4">
                    <x-pages.portfolio.btn.socials.calendly/>
                </div>
            </div>
        </div>
        <div class="hidden md:block col-span-2 bg-[#b89ee7] mb-20 rounded-tl-[13rem] mt-16">
            <div class="grid place-content-center">
                <img class="w-[32rem] -mt-20" src="{{ asset('img/moses-edited-nobg.png') }}" alt="">
            </div>
        </div>
        <div class="hidden md:p-8 md:block"></div>
    </div>
</div>