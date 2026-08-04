@extends('layouts.app')

@section('title', 'CodeContent.pro | Developer Education That Helps Startups Grow')
@section('meta_description', 'CodeContent.pro is a developer education agency helping startups and SaaS teams improve onboarding, activation, and developer adoption through content, documentation, and learning systems.')

@section('content')

<x-custom.hero-two 
    yellowDot="true" 
    yellowDotText="GET IN TOUCH"
    title="Let’s Engineer Your Next Technical Solution"
    description="
    Fill out the scoping form below or pick a time directly on our calendar. We’ll review your stack and requirements before our call so we can jump straight into strategy.
    "
    btnOneLink="https://calendly.com/moses-codecontent/30min"
    btnOneText="Book a Discovery Call"
    btnTwoLink="#services"
    btnTwoText="View Engineering Use Cases"
    image="{{ asset('Questions-pana.png') }}"
    showButton="false"
>
</x-custom.hero-two>

{{-- <div class="site-shell pb-[10rem]"> --}}
    <section class="">

        <div class="site-shell">
    
            {{-- Two paths --}}
            <div class="mt-8 grid gap-6 md:grid-cols-2">
    
                {{-- Project --}}
                <a
                    href="#project-form"
                    {{-- class="group rounded-3xl border border-[#E5E5E5] bg-[#F8F8F8] p-8 transition duration-300 hover:-translate-y-1 hover:border-[#0A0A0A] hover:shadow-sm" --}}
                    class="group rounded-3xl border border-black bg-black text-white p-8 transition duration-300 hover:-translate-y-1 hover:border-[#0A0A0A] hover:shadow-sm"
                >
    
                    <div class="flex items-start justify-between">
    
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-white border border-[#E5E5E5] text-black">
                            <x-icons.arrow-up-right class="h-5 w-5" />
                        </div>
    
                        <span class="text-sm text-[#525252] transition group-hover:translate-x-1">
                            <x-icons.chevron-right class="h-4 w-4" />
                        </span>
    
                    </div>
    
                    <h2 class="mt-10 font-heading text-3xl font-semibold">
                        Tell Us About Your Project
                    </h2>
    
                    <p class="mt-4 max-w-md leading-7 text-[#525252]">
                        Have something specific in mind? Give us a little
                        context about your project, goals, and what you need help with.
                    </p>
    
                </a>
    
    
                {{-- Discovery Call --}}
                <a
                    href="https://calendly.com/moses-codecontent/30min"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="group rounded-3xl bg-[#FACC15] p-8 transition duration-300 hover:-translate-y-1 hover:bg-[#EAB308] hover:shadow-sm"
                >
    
                    <div class="flex items-start justify-between">
    
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-black text-white">
                            <x-icons.arrow-up-right class="h-5 w-5" />
                        </div>
    
                        <span class="text-sm text-black transition group-hover:translate-x-1">
                            <x-icons.chevron-right class="h-4 w-4" />
                        </span>
    
                    </div>
    
                    <h2 class="mt-10 font-heading text-3xl font-semibold">
                        Book a Discovery Call
                    </h2>
    
                    <p class="mt-4 max-w-md leading-7 text-[#292000]">
                        Prefer to talk things through? Pick a convenient time
                        and let's discuss your project, goals, and what you're
                        trying to achieve.
                    </p>
    
                </a>
    
            </div>
    
    
            {{-- Divider --}}
            <div class="my-20 border-t border-[#E5E5E5]"></div>
    
    
            {{-- Project form --}}
            <div
                id="project-form"
                class="grid gap-12 lg:grid-cols-[0.7fr_1.3fr]"
            >
    
                {{-- Form intro --}}
                <div>
    
                    <x-custom.yellow-dot>
                        PROJECT ENQUIRY
                    </x-custom.yellow-dot>
    
                    <h2 class="mt-5 font-heading text-4xl font-semibold tracking-tight">
                        Tell us what you're building.
                    </h2>
    
                    <p class="mt-5 max-w-md leading-7 text-[#525252]">
                        You don't need to have everything figured out.
                        Give us enough context to understand the problem
                        and we'll take it from there.
                    </p>
    
                    <p class="mt-8 text-sm font-medium text-[#525252]">
                        We typically respond within 1–2 business days.
                    </p>
    
                </div>
    
    
                {{-- Form --}}
                @if (session('success'))
                    <div class="mb-6 rounded-2xl border border-green-200 bg-green-50 p-4 text-sm text-green-700">
                        {{ session('success') }}
                    </div>
                @endif

                <form
                    method="POST"
                    action="{{ route('contact-us.store') }}"
                    class="space-y-8"
                >
    
                    @csrf
    
                    {{-- Name --}}
                    <div>
    
                        <label
                            for="name"
                            class="mb-2 block text-sm font-semibold text-[#0A0A0A]"
                        >
                            Name
                        </label>
    
                        <input
                            id="name"
                            name="name"
                            type="text"
                            required
                            autocomplete="name"
                            placeholder="Your name"
                            class="w-full border-0 border-b border-[#D9D9D9] bg-transparent px-0 py-4 text-base outline-none transition placeholder:text-gray-400 focus:border-[#0A0A0A] focus:ring-0"
                        >
    
                    </div>
    
    
                    {{-- Email --}}
                    <div>
    
                        <label
                            for="email"
                            class="mb-2 block text-sm font-semibold text-[#0A0A0A]"
                        >
                            Email
                        </label>
    
                        <input
                            id="email"
                            name="email"
                            type="email"
                            required
                            autocomplete="email"
                            placeholder="you@company.com"
                            class="w-full border-0 border-b border-[#D9D9D9] bg-transparent px-0 py-4 text-base outline-none transition placeholder:text-gray-400 focus:border-[#0A0A0A] focus:ring-0"
                        >
    
                    </div>
    
    
                    {{-- Company --}}
                    <div>
    
                        <label
                            for="company"
                            class="mb-2 block text-sm font-semibold text-[#0A0A0A]"
                        >
                            Company
                            <span class="font-normal text-gray-400">
                                (optional)
                            </span>
                        </label>
    
                        <input
                            id="company"
                            name="company"
                            type="text"
                            autocomplete="organization"
                            placeholder="Your company"
                            class="w-full border-0 border-b border-[#D9D9D9] bg-transparent px-0 py-4 text-base outline-none transition placeholder:text-gray-400 focus:border-[#0A0A0A] focus:ring-0"
                        >
    
                    </div>
    
    
                    {{-- Service --}}
                    <div>
    
                        <label
                            for="service"
                            class="mb-2 block text-sm font-semibold text-[#0A0A0A]"
                        >
                            What can we help you with?
                        </label>
    
                        <select
                            id="service"
                            name="service"
                            class="w-full border-0 border-b border-[#D9D9D9] bg-transparent px-0 py-4 text-base outline-none focus:border-[#0A0A0A] focus:ring-0"
                        >
    
                            <option value="">
                                Select a service
                            </option>
    
                            <option value="technical-content">
                                Technical Content Creation
                            </option>
    
                            {{-- <option value="documentation">
                                Documentation
                            </option> --}}
    
                            <option value="engineering">
                                Software Engineering
                            </option>
    
                            {{-- <option value="ai">
                                AI & Automation
                            </option> --}}
    
                            <option value="edtech">
                                EdTech & Course Development
                            </option>
    
                        </select>
    
                    </div>
    
    
                    {{-- Message --}}
                    <div>
    
                        <label
                            for="message"
                            class="mb-2 block text-sm font-semibold text-[#0A0A0A]"
                        >
                            Tell us about your project
                        </label>
    
                        <textarea
                            id="message"
                            name="message"
                            rows="6"
                            required
                            placeholder="Tell us about the problem you're trying to solve, what you're building, or what you'd like help with..."
                            class="w-full resize-none border border-[#D9D9D9] bg-[#F8F8F8] p-5 text-base outline-none transition placeholder:text-gray-400 focus:border-[#0A0A0A] focus:ring-0"
                        ></textarea>
    
                    </div>
    
    
                    {{-- Submit --}}
                    <div class="py-2 pb-8">
    
                        <button
                            type="submit"
                            class="inline-flex w-full items-center justify-center bg-black px-8 py-4 text-sm font-semibold text-white transition hover:bg-gray-800 sm:w-auto"
                        >
                            <span>Send Project Details</span>
                            <x-icons.arrow-up-right class="ml-2 h-4 w-4" />
                        </button>
    
                    </div>
    
                </form>
    
            </div>
    
            </div>
    
        </div>
    
    </section>
{{-- </div> --}}




<x-custom.call-to-action></x-custom.call-to-action>
@endsection