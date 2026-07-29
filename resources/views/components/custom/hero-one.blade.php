@props([
    'yellowDot' => false,
])

<div class="m-4 rounded-4xl bg-gradient-to-br from-amber-200 via-yellow-1000 to-amber-100 p-4">
{{-- <div class="md:m-4 rounded-4xl md:p-4"> --}}
    <div class="section-pad pt-20 sm:pt-24 lg:pt-28 rounded-3xl">
        <div class="site-shell">
            <div class="text-center">
                @if ($yellowDot)
                    <x-custom.yellow-dot>TECHNICAL & ENGINEERING FULL-LIFECYCLE</x-custom.yellow-dot>
                @endif
                <h1 class="text-6xl md:text-8xl font-bold tracking-tight text-gray-900 leading-tight">
                    We Build The <span class="underline decoration-black">Code.</span> 
                    <br/>We Craft The Learning.
                </h1>
    
                <p class="mt-2 text-lg text-gray-600 max-w-3xl mx-auto">
                    CodeContent bridges complex software engineering with deep technical communication. We build custom internal tools, engineer AI workflows, author developer documentation, and create interactive EdTech courses.
                </p>

                <div class="md:flex md:gap-2 grid grid-cols-1 mt-8 gap-8 justify-center pb-4 text-[#68787B]">
                    ✓ Production-Ready Code  |  ✓ Deep Technical Accuracy  |  ✓ Scalable EdTech Solutions
                </div>

                <div class="md:flex md:gap-2 grid grid-cols-1 mt-8 gap-4 justify-center">
                    
                    <x-custom.btn-one
                        link="https://calendly.com/moses-codecontent/30min"
                        text="Book a Scoping Call"
                    />
                    <x-custom.btn-one
                        class="md:mt-0"
                        link="#services"
                        text="Explore Our 3 Pillars"
                        type="secondary"
                    />

                </div>
            </div>
            
        </div>
        {{ $slot }}
    </div>
</div>