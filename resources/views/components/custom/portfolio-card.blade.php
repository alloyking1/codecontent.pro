@props([
'works' => [
    [
        'title' => '',
        'description' => '',
        'img' => '',
    ],
],
])


@if (count($works) > 1)
        <div class="grid grid-cols-2 gap-2">

            @foreach ($works as $work)
                <div class="border">
                    <div
                        class="group relative w-[100%] h-[30rem] bg-[#68787B] shrink-0 snap-center overflow-hidden rounded-[2rem] p-2 transition-all duration-300 hover:-translate-y-1 hover:shadow">
                        
                    
                        <img src="{{ $work['img'] }}" alt="" class="rounded-3xl">
                    
                    </div>

                    <div class="">
                        
                        <h3 class="mt-4 text-2xl font-semibold text-black">
                            {{ $work['title'] }}
                        </h3>
                        <p class="text-xs font-semibold uppercase tracking-[0.2em] max-w-6 text-black">
                            {{ $work['description'] }}
                        </p>
                    </div>
                    
                </di>
            @endforeach
        </div>
@else
<div class="grid md:grid-cols-1 gap-2">

    @foreach ($works as $work)
    
       
        {{-- <div> --}}
            <article
                class="group relative w-[100%] h-[30rem] bg-[#68787B] shrink-0 snap-center overflow-hidden rounded-[2rem] p-2 transition-all duration-300 hover:-translate-y-1 hover:shadow">
                
            
                <img src="{{ $work['img'] }}" alt="" class="rounded-3xl">
                    {{ $slot }}
                    
                </div>
            
            </article>
            <div class="">
                
                <h3 class="mt-4 text-2xl font-semibold text-black">
                    {{ $work['title'] }}
                </h3>
                <p class="text-xs font-semibold uppercase tracking-[0.2em] text-black">
                    {{ $work['description'] }}
                </p>
            </div>
        {{-- </di> --}}
    @endforeach
</div>
@endif



