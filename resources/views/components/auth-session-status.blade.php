@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'rounded-2xl border border-[#DCFCE7] bg-[#F0FDF4] px-4 py-3 text-sm font-medium text-[#166534]']) }}>
        {{ $status }}
    </div>
@endif
