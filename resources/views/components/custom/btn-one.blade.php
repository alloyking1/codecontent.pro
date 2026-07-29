@props([
    'type' => 'primary',
    'link' => '#',
    'text' => '',
])

@php
    $typeClasses = match($type) {
        'secondary' => 'border border-black text-gray-800 font-medium hover:bg-gray-50 transition',
        'danger' => 'bg-red-600 text-white hover:bg-red-700',
        'success' => 'bg-green-600 text-white hover:bg-green-700',
        default => 'bg-black text-white hover:bg-gray-800', // Matches your original 'primary'
        'text' => 'text-gray-800 hover:text-gray-600 transition',
    };
@endphp

<div>
    <a href="{{ $link }}" 
        {{ $attributes->merge([
            // 'class' => "px-6 py-3 rounded-xl font-medium transition {$typeClasses}"
            'class' => "block px-6 py-6 w-full font-medium transition {$typeClasses}"
        ]) }}>
        {{ $text }}
    </a>
</div>
