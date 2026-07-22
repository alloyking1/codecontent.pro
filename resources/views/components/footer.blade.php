

<div class="">
    <x-email-list />
</div>
<footer class="relative overflow-hidden bg-[#0A0A0A] text-white">

    <div class="site-shell py-24">

        <div class="grid gap-16 lg:grid-cols-4">

            <div class="lg:col-span-2">

                <a href="/" class="inline-flex items-center gap-3">
                    <img
                        src="{{ asset('images/logo-white.svg') }}"
                        class="h-10"
                        alt="CodeContent"
                    >

                    <span class="text-xl font-semibold">
                        CodeContent
                    </span>
                </a>

                <p class="mt-6 max-w-md text-lg leading-8 text-zinc-400">
                    Helping developer-first companies educate developers through
                    technical content, documentation and engineering.
                </p>

                <a href="#" class="button-primary mt-8">
                    Let's Talk
                </a>

            </div>

            <div>

                <h3 class="mb-5 font-semibold text-white">
                    Services
                </h3>

                <ul class="space-y-3 text-zinc-400">
                    <li><a href="#">Developer Content</a></li>
                    <li><a href="#">Developer Documentation</a></li>
                    <li><a href="#">Engineering Services</a></li>
                </ul>

            </div>

            <div>

                <h3 class="mb-5 font-semibold text-white">
                    Company
                </h3>

                <ul class="space-y-3 text-zinc-400">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Work</a></li>
                    <li><a href="#">Articles</a></li>
                    <li><a href="#">Guides</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>

            </div>

        </div>

    </div>

    {{-- <div class="relative flex md:h-72 max-w-7xl mx-auto items-end justify-center overflow-hidden"> --}}
    <div class="relative grid md:h-72 max-w-7xl mx-auto items-end justify-center">

        <h2
            {{-- class="pointer-events-none mx-auto select-none whitespace-nowrap font-heading text-[5rem] font-medium leading-none tracking-tight text-white/5 sm:text-[6rem] md:text-[7rem] lg:text-[6rem] xl:text-[11rem]"> --}}
            class="pointer-events-none select-none whitespace-nowrap text-[4rem] md:text-[15rem] font-bold leading-none tracking-tight text-white/5">
            CODE
        </h2>
        <h2 class="pointer-events-none select-none whitespace-nowrap text-[4rem] md:text-[15rem] font-bold leading-none tracking-tight text-white/5">
            CONTENT
        </h2>

    </div>

    <div class="border-t max-w-7xl mx-auto border-white/10">

        <div class="site-shell flex flex-col items-center justify-between gap-4 py-8 text-sm text-zinc-500 md:flex-row">

            <p>
                © {{ date('Y') }} CodeContent. All rights reserved.
            </p>

            <div class="flex gap-6">
                <a href="#" class="rounded-full bg-black text-white/80 p-2 transition hover:bg-black/90 hover:text-white">
                    <svg class="w-8 h-8" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.b{fill:#ffffff;}.c{fill:none;stroke:#ffffff;stroke-linecap:round;stroke-linejoin:round;}</style></defs><circle class="b" cx="15.64" cy="13.46" r=".75"></circle><line class="c" x1="15.64" x2="15.64" y1="16.93" y2="31.91"></line><path class="c" d="m33.11 31.91v-9.61a5.83 5.83 0 0 0-5.82-5.82 5.83 5.83 0 0 0-5.83 5.82v9.61"></path><line class="c" x1="21.46" x2="21.46" y1="22.3" y2="16.93"></line><path class="c" d="m40.5 5.5h-33a2 2 0 0 0-2 2v33a2 2 0 0 0 2 2h33a2 2 0 0 0 2-2v-33a2 2 0 0 0-2-2z"></path></g></svg>
                </a>
                <a href="#" class="rounded-full bg-black text-white/80 p-2 transition hover:bg-black/90 hover:text-white">
                    <svg class="w-8 h-8" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.b{fill:#ffffff;}.c{fill:none;stroke:#ffffff;stroke-linecap:round;stroke-linejoin:round;}</style></defs><circle class="b" cx="15.64" cy="13.46" r=".75"></circle><line class="c" x1="15.64" x2="15.64" y1="16.93" y2="31.91"></line><path class="c" d="m33.11 31.91v-9.61a5.83 5.83 0 0 0-5.82-5.82 5.83 5.83 0 0 0-5.83 5.82v9.61"></path><line class="c" x1="21.46" x2="21.46" y1="22.3" y2="16.93"></line><path class="c" d="m40.5 5.5h-33a2 2 0 0 0-2 2v33a2 2 0 0 0 2 2h33a2 2 0 0 0 2-2v-33a2 2 0 0 0-2-2z"></path></g></svg>
                </a>
            </div>

        </div>

    </div>

</footer>