@props([
    'title' => '',
    'description' => '',
])


<div
    {{-- class="group rounded-[28px] border border-gray-200 bg-gradient-to-br from-yellow-50/60 via-white to-white p-8 transition-all duration-300 hover:-translate-y-1 hover:shadow"> --}}
    class="group rounded-[28px] p-8 transition-all duration-300 hover:-translate-y-1 hover:shadow">

    <div
        class="mb-8 flex py-1 w-40 items-center justify-center rounded-2xl bg-gray-100 transition-colors duration-300  group-hover:text-black">

        {{ $slot }} Technical writing

    </div>

    <h3 class="mb-3 text-4xl font-semibold tracking-tight text-gray-950">
        {{ $title }}
    </h3>

    <p class="leading-7 text-gray-600">
        {{ $description }}
    </p>

</div>