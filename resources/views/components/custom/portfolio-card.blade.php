@props([
    'step',
    'title',
])

<article
    class="group relative w-[100%] h-[30rem] bg-[#68787B] shrink-0 snap-center overflow-hidden rounded-[2rem] p-8 transition-all duration-300 hover:-translate-y-1 hover:shadow">

    <div class="relative z-10 flex h-full flex-col">

        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-yellow-300">
            Step {{ str_pad($step, 2, '0', STR_PAD_LEFT) }}
        </p>

        <h3 class="mt-4 text-2xl font-semibold text-white">
            {{ $title }}
        </h3>

        <div class="flex-1 flex items-center">

            <p class="text-2xl leading-relaxed italic text-gray-200">
                <span class=" left-2 text-7xl font-serif text-gray-200 select-none transform -translate-y-4">
                    &ldquo;
                  </span>
                "{{ $slot }}"
            </p>

        </div>
          

    </div>

</article>

