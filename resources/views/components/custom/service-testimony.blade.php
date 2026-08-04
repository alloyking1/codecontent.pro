@props([
        'testimonies' => [
            [
                'text' => "We were blown away by how fast CodeContent turned our idea into a working product. Their ability to hit the ground running and deliver completely exceeded our expectations.",
                'name' => 'Kingsley Ihemere',
                'position' => 'CEO',
                'company' => 'Primlytics',
            ],
        ]
    ])
    

<div class="site-shell mx-auto">
    <div class="text-center">
        <x-custom.yellow-dot>Testimonies</x-custom.yellow-dot>
        <h2 class="text-4xl font-semibold tracking-tight text-[#0A0A0A]">
            Technical results validated by leaders
        </h2>
    </div>

    @if (count($testimonies) > 1)
        
        <div class="grid md:grid-cols-2 gap-1 md:mt-16 mt-6">
            @foreach ($testimonies as $each)
                <div class="md:pb-[5rem] pb-[2rem]">
                    <h2 class="italic text-xl">
                        "{{ $each['text'] }}"
                    </h2>
                    <div class="mt-8 gap-2 md:inline-flex justify-center">
                        <div class="bg-[#FACC15] w-[24px] rounded h-0.5"></div>
                        <div>
                            <p class="text-sm font-semibold text-[#0A0A0A]">{{ $each['name'] }}</p>
                        </div>
                        <p class="text-sm text-muted">{{ $each['position'] }}, {{ $each['company'] }}</p>
                    </div>
                </div>
                
            @endforeach
            
        </div>
    @else
        <div class="grid md:grid-cols-1 gap-1 md:mt-16 mt-6">
            @foreach ($testimonies as $each)
                <div class="md:pb-[5rem] pb-[2rem]">
                    <h2 class="italic text-xl">
                        "{{ $each['text'] }}"
                    </h2>
                    <div class="mt-8 gap-2 md:inline-flex justify-center">
                        <div class="bg-[#FACC15] w-[24px] rounded h-0.5"></div>
                        <div>
                            <p class="text-sm font-semibold text-[#0A0A0A]">{{ $each['name'] }}</p>
                        </div>
                        <p class="text-sm text-muted">{{ $each['position'] }}, {{ $each['company'] }}</p>
                    </div>
                </div>
                
            @endforeach
            
        </div>
    @endif
</div>