@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm font-semibold text-[#0A0A0A]']) }}>
    {{ $value ?? $slot }}
</label>
