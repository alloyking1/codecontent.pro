@props([
    'yellowDot' => false,
    'yellowDotText' => '',
    'title' => '',
    'description' => '',
    'btnOneLink' => route('technical-content-creation'),
    'btnOneText' => 'Explore Technical Writing',
    'btnTwoLink' => route('documentation-engineering'),
    'btnTwoText' => 'Explore Developer Education',
    'image' => '',
    'showButton' => true,
])

<div>
    <section id="why-education" class="">
        <div class="site-shell">
            {{-- <div class="grid grid-cols-12 gap-6"> --}}
            <div class="gap-6">
                <!-- Left Column (Wider) -->
                <div class="col-span-12 md:p-6">
                    <div class="site-shell">
                        <div class="max-w-4xl">
                            @if ($yellowDot)
                                <x-custom.yellow-dot>{{ $yellowDotText }}</x-custom.yellow-dot>
                            @endif
                
                            <h2 class="mt-4 text-4xl font-semibold tracking-tight text-[#0A0A0A] md:text-6xl">
                                {{ $title }}
                            </h2>
                
                            <p class="mt-6 text-lg text-light leading-8 text-[#525252]">
                                {{ $description }}
                            </p>
                        </div>
                    </div>
                </div>
              
                <!-- Right Column (Narrower) -->
                
                {{-- <div class="col-span-2 mt-4"> --}}
                    {{-- <img
                    src="{{ $image }}"
                    alt="Illustration of a developer learning about a product"
                    class="w-full h-auto"
                    > --}}
                {{-- </div> --}}
                </div>

                @if ($showButton === true)
                    
                    <div class="md:pl-6 pl-2">
                        <div class="mt-8 flex flex-col sm:flex-row gap-4">
                            <x-custom.btn-one
                                link="{{ $btnOneLink }}"
                                text="{{ $btnOneText }}"
                                type="primary"
                            />
                            <x-custom.btn-one
                                class=""
                                link="{{ $btnTwoLink }}"
                                text="{{ $btnTwoText }}"
                                type="secondary"
                            />
                            
                        </div>
                        {{ $slot }}
                    </div>
                @endif
        </div>

        
    </section>
</div>