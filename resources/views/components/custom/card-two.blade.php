@props([
    'title' => '',
    'description' => ''
])

<div>
    <div class="rounded-xl border border-[#E5E5E5] p-8">
        <h3 class="text-xl font-semibold mb-4">
            {{ $title }}
        </h3>

        <p class="text-gray-600">
            {{$description}}
        </p>
    </div>
</div>