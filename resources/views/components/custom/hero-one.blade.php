{{-- <div class="p-4 bg-amber-200 m-4 rounded-4xl"> --}}
@props([
    'yellowDot' => false,
])

<div class="m-4 rounded-4xl bg-gradient-to-br from-amber-200 via-yellow-1000 to-amber-100 p-4">
    <div class="section-pad pt-20 sm:pt-24 lg:pt-28 rounded-3xl">
        <div class="site-shell">
            <div class="text-center">
                @if ($yellowDot)
                    <x-custom.yellow-dot>Developer education for SaaS and platform teams</x-custom.yellow-dot>
                @endif
                <h1 class="text-4xl md:text-6xl font-bold tracking-tight text-gray-900 leading-tight">
                    Helping Software Companies Create Better Documentation,
                    Developer Content, and Learning Experiences
                </h1>
    
                <p class="mt-6 text-lg text-gray-600 max-w-3xl mx-auto">
                    CodeContent helps SaaS companies, developer tool providers, startups,
                    and engineering teams improve developer onboarding, documentation,
                    technical content, and educational resources.
                </p>
    
                <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
                    <x-custom.btn-one
                        :link="route('technical-content-creation')"
                        text="Explore Technical Writing"
                    />
                    <x-custom.btn-one
                        :link="route('documentation-engineering')"
                        text="Explore Developer Education"
                        type="secondary"
                    />
                </div>
            </div>
            
        </div>
        {{ $slot }}
    </div>
</div>