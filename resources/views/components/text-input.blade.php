@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'w-full rounded-2xl border border-[#E5E5E5] bg-white px-4 py-3 text-sm text-[#0A0A0A] shadow-sm focus:border-[#0A0A0A] focus:ring-[#0A0A0A]']) }}>
