@props([
    'type' => 'primary',
    'link' => '#',
    'text' => '',
])

@php
    $typeClasses = match($type) {
        'secondary' => 'border border-gray-300 text-gray-800 font-medium hover:bg-gray-50 transition',
        'danger' => 'bg-red-600 text-white hover:bg-red-700',
        'success' => 'bg-green-600 text-white hover:bg-green-700',
        default => 'bg-black text-white hover:bg-gray-800', // Matches your original 'primary'
        'primary' => 'text-gray-800 hover:text-gray-600 transition',
    };
@endphp

<div>
    <a href="{{ $link }}" 
        {{ $attributes->merge([
            'class' => " py-3 rounded-xl font-medium transition {$typeClasses}"
        ]) }}>
        <div class="flex items-center gap-2 justify-center">
            {{ $text }}
            <x-icons.arrow-right class="h-4 w-4 transition group-hover:translate-x-1" />
        </div>
    </a>
</div>
