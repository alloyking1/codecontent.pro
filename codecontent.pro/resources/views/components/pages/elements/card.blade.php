@props([
    'title' => '',
    'img' => ''
])
<div>
    <div class="shadow-xl border-2 rounded-2xl p-8">
        <div class="p-6">
            <h2 class="text-4xl font-bold">
                {{ $title }}
            </h2>
            <div class="py-4">
                <hr>
            </div>
        </div>
        <div class="px-8">

            {{ $slot }}
        </div>
    </div>
</div>