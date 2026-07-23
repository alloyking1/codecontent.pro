
<header class="sticky top-0 z-50 bg-white/85 backdrop-blur">
    <div class="site-shell">
        <div class="relative flex items-center justify-between py-4" x-data="{ mobileMenuOpen: false }">
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <span class="flex h-10 w-10 items-center justify-center rounded-full border border-[#E5E5E5] bg-[#F8F8F8] text-sm font-bold text-[#0A0A0A]">CC</span>
                <span class="flex flex-col leading-none">
                    <span class="text-sm font-semibold tracking-tight text-[#0A0A0A]">CodeContent.pro</span>
                    <span class="text-xs text-[#525252]">Developer education partner</span>
                </span>
            </a>

            <nav class="hidden items-center gap-8 lg:flex" aria-label="Primary">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
            
                <!-- Services Dropdown -->
                <div class="relative group py-2">
                    <button
                        type="button"
                        class="nav-link inline-flex items-center gap-1"
                    >
                        Services
            
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 transition-transform duration-200 group-hover:rotate-180"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
            
                    <div
                        class="absolute left-0 top-full z-50 hidden w-64 rounded-xl border border-slate-200 bg-white p-2 shadow-xl group-hover:block"
                    >
                        <a
                            href="{{ route('technical-content-creation') }}"
                            class="block rounded-lg px-4 py-3 text-sm text-slate-700 transition hover:bg-slate-100"
                        >
                            Technical Content Creation
                        </a>
            
                        <a
                            href="{{ route('documentation-engineering') }}"
                            class="block rounded-lg px-4 py-3 text-sm text-slate-700 transition hover:bg-slate-100"
                        >
                        Documentation Engineering
                        </a>
                        <a
                            href="{{ route('digital-learning') }}"
                            class="block rounded-lg px-4 py-3 text-sm text-slate-700 transition hover:bg-slate-100"
                        >
                        Educational Technology Services                        </a>
                        <a
                            href="{{ route('software-engineering') }}"
                            class="block rounded-lg px-4 py-3 text-sm text-slate-700 transition hover:bg-slate-100"
                        >
                        Software Engineering Services
                        </a>
                    </div>
                </div>
            
                {{-- <a class="nav-link" href="#contact">Contact</a> --}}
                <a class="nav-link" href="{{ route('about') }}">About</a>
                {{-- <a class="nav-link" href="{{ route('about') }}">Featured Posts</a> --}}
                {{-- <a class="nav-link" href="{{ route('blog.index') }}">Blog</a> --}}

                <div class="relative group py-2">
                    <button
                        type="button"
                        class="nav-link inline-flex items-center gap-1"
                    >
                        Insights
            
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 transition-transform duration-200 group-hover:rotate-180"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
            
                    <div
                        class="absolute left-0 top-full z-50 hidden w-64 rounded-xl border border-slate-200 bg-white p-2 shadow-xl group-hover:block"
                    >
                        <div class="">
                
                            <a
                                href="{{ route('blog.index') }}"
                                class="block rounded-lg px-4 py-3 text-sm text-slate-700 transition hover:bg-slate-100"
                            >
                            Blog
                            </a>
                            <a
                                href="#"
                                class="block rounded-lg px-4 py-3 text-sm text-slate-700 transition hover:bg-slate-100"
                            >
                            Community
                            <span class="bg-gray-500 text-white text-[12px]  rounded-full p-1">Coming soon</span>
                            </a>
                            <a
                                href="#"
                                class="block rounded-lg px-4 py-3 text-sm text-slate-700 transition hover:bg-slate-100"
                            >
                            Learning
                            <span class="bg-gray-500 text-white text-[12px]  rounded-full p-1">Coming soon</span>
                            </a>
                        </di>
                    </div>
                </div>

                <a class="button-primary" target="_blank" href="https://calendly.com/moses-codecontent/30min">Book a call</a>
            </nav>

            

            <button
                type="button"
                class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-[#E5E5E5] bg-white text-[#0A0A0A] lg:hidden"
                @click="mobileMenuOpen = ! mobileMenuOpen"
                :aria-expanded="mobileMenuOpen.toString()"
                aria-label="Toggle navigation"
            >
                <svg x-show="!mobileMenuOpen" x-cloak class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path d="M4 7h16M4 12h16M4 17h16" stroke-linecap="round" />
                </svg>
                <svg x-show="mobileMenuOpen" x-cloak class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path d="M6 6l12 12M18 6L6 18" stroke-linecap="round" />
                </svg>
            </button>

            <div x-cloak x-show="mobileMenuOpen" x-transition class="absolute left-0 right-0 top-full border-b border-[#E5E5E5] bg-white shadow-[0_16px_40px_rgba(0,0,0,0.06)] lg:hidden">
                <div class="site-shell py-4">
                    <div class="flex flex-col gap-4">
                        <a class="nav-link" href="{{  route('home')  }}" @click="mobileMenuOpen = false">Home</a>

                        <div x-data="{ open: false }" class="relative">

                            <button
                                @click="open = !open"
                                class="flex w-full items-center justify-between"
                            >
                                <span>Services</span>
                        
                                <svg
                                    class="h-4 w-4 transition"
                                    :class="{ 'rotate-180': open }"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                        
                            <div
                                x-show="open"
                                x-transition
                                class="mt-2 pl-4 space-y-2"
                            >
                                <a href="{{ route('technical-content-creation') }}" class="block py-2">
                                    Technical Content Creation
                                </a>
                        
                                <a href="{{ route('documentation-engineering') }}" class="block py-2">
                                    Documentation Engineering
                                </a>
                            </div>
                        
                        </div>

                        <a class="nav-link" href="{{ route('about') }}" @click="mobileMenuOpen = false">About</a>
                        <a class="nav-link" href="{{ route('blog.index') }}" @click="mobileMenuOpen = false">Blog</a>
                        <a class="button-primary w-full sm:w-fit" target="_blank" href="https://calendly.com/moses-codecontent/30min" @click="mobileMenuOpen = false">Book a call</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>