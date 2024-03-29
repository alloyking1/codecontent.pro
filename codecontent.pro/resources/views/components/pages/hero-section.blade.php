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
            <div>
                <h1 class="text-7xl font-thin">{{ $title }}</h1>
            </div>
            <div class="my-8">
                <p class="text-xl">{{ $description }}</p>
            </div>
            <div class="">
                <button class="bg-black text-white p-2">LET'S TALK</button>
            </div>
        </div>
        <div class="hidden md:block">
            {{-- <img src="{{ asset('/img/abstract-shape.png') }}"> --}}
        </div>
        <div class="p-10 col-span-2 relative md:ml-80 ml-[20%] -mt-16 z-[100] rounded-l-full bg-[#f7f6fa]"></div>
        <div class="hidden md:p-8 md:block">
        </div>
    </div>
</div>