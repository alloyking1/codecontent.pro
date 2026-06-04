<button {{ $attributes->merge(['type' => 'submit', 'class' => 'button-primary rounded-full px-5 py-3 text-xs uppercase tracking-[0.14em]']) }}>
    {{ $slot }}
</button>
