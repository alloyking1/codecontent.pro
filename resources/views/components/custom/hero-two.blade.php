@props([
    'yellowDot' => false,
    'yellowDotText' => '',
    'title' => '',
    'description' => '',
    'btnOneLink' => route('technical-content-creation'),
    'btnOneText' => 'Explore Technical Writing',
    'btnTwoLink' => route('documentation-engineering'),
    'btnTwoText' => 'Explore Developer Education',
])

<div>
    <section id="why-education" class="section-pad ">
        <div class="site-shell">
            <div class="grid grid-cols-12 gap-6">
                <!-- Left Column (Wider) -->
                <div class="col-span-10 p-6">
                    <div class="site-shell">
                        <div class="max-w-4xl">
                            @if ($yellowDot)
                                <x-custom.yellow-dot>Developer education for SaaS and platform teams</x-custom.yellow-dot>
                            @endif
                
                            <h2 class="mt-4 text-4xl font-semibold tracking-tight text-[#0A0A0A] md:text-8xl">
                                {{ $title }}
                            </h2>
                
                            <p class="mt-6 text-lg text-light leading-8 text-[#525252]">
                                {{ $description }}
                            </p>
                        </div>
                    </div>
                </div>
              
                <!-- Right Column (Narrower) -->
                <div class="col-span-2 bg-gray-100 rounded-r-4xl p-6">
                  Sidebar
                </div>
                </div>
                <div class="pl-6">
                    <div class="mt-8 flex flex-col sm:flex-row gap-4">
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
                    {{ $slot }}
                </div>
        </div>

        
    </section>
</div>