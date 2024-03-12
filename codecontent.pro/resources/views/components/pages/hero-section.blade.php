@props([
    'title' => '',
    'description' => '',
    'btn_text' => '',
    'btn_link' => ''
])
<div>
    <div class="grid md:grid-cols-3 gap-4">
        <div class="bg-[#ffe14f] p-6 py-40 col-span-2">
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
        <div>
            {{-- <img src="{{ asset('/img/abstract-shape.png') }}"> --}}
        </div>
    </div>
    <!-- Pin to bottom right corner -->
    {{-- <div class="relative h-32 md:w-[65%]">
        <div class="absolute bottom-0 right-0 w-40 -top-20">
            <img src="{{ asset('/img/abstract-shape.png') }}">
        </div>
    </div> --}}
</div>