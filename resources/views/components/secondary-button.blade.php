<button {{ $attributes->merge(['type' => 'button', 'class' => 'button-secondary rounded-full px-4 py-2 text-xs uppercase tracking-[0.14em] disabled:opacity-25']) }}>
    {{ $slot }}
</button>
