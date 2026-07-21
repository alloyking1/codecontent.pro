<div>
    {{-- email list --}}
            <footer class="border-t border-[#E5E5E5] bg-white">
                <div class="site-shell py-8">
                    <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
                        <div class="max-w-2xl">
                            <p class="text-sm text-[#525252]">CodeContent.pro helps SaaS teams ship developer education that clarifies, activates, and retains users.</p>
                            <p class="mt-2 text-sm text-[#525252]">Premium. Minimal. Built for developers.</p>
                        </div>

                        <div class="flex flex-wrap items-center gap-x-5 gap-y-3 text-sm text-[#525252]">
                            <a class="hover:text-[#0A0A0A]" href="{{ route('home') }}">Home</a>
                            {{-- <a class="hover:text-[#0A0A0A]" href="{{ route('technical-writing') }}">Services</a> --}}
                            <a class="hover:text-[#0A0A0A]" href="{{ route('technical-content-creation') }}">Technical Content</a>
                            <a class="hover:text-[#0A0A0A]" href="{{ route('documentation-engineering') }}">Docs Engineering</a>
                            <a class="hover:text-[#0A0A0A]" href="{{ route('about') }}">About</a>
                            <a class="hover:text-[#0A0A0A]" href="{{ route('blog.index') }}">Blog</a>
                            <a class="hover:text-[#0A0A0A]" href="{{ route('authors.index') }}">Authors</a>
                            
                            {{-- <a class="hover:text-[#0A0A0A]" href="mailto:hello@codecontent.pro">moses@codecontent.pro</a> --}}
                        </div>
                    </div>

                    <div class="mt-6 border-t border-[#E5E5E5] pt-4">
                        <p class="text-xs uppercase tracking-[0.18em] text-[#525252]">&copy; {{ now()->year }} CodeContent.pro</p>
                    </div>
                </div>
            </footer>
</div>