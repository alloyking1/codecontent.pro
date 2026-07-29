@props([
    'badges' => [
        [
            'name' => 'Production-Grade Code',
            'logo' => asset('images/logos/production-grade-code.svg'),
        ],
        [
            'name' => 'Dedicated API Integrations',
            'logo' => asset('images/logos/dedicated-api-integrations.svg'),
        ],
        [
            'name' => 'Zero Core Product Disruption',
            'logo' => asset('images/logos/zero-core-product-disruption.svg'),
        ],
    ]
])


<div class="site-shell">
    <div class="my-10 border-y border-gray-200">
        <div class="flex gap-4 p-8">
            <div class="flex items-center gap-2">
            @foreach ($badges as $badge )
                    {{-- <img src="{{ $badge['logo'] }}" alt="{{ $badge['name'] }}"> --}}
                    ✓ {{ $badge['name'] }}
                    @endforeach
                </div>
        </div>
    </div>
</div>