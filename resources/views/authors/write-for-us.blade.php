@extends('layouts.app')

@section('title', 'Write for us | CodeContent.pro')
@section('meta_description', 'Request to become a contributor and share your expertise with the CodeContent.pro audience.')
@section('canonical_url', route('authors.write-for-us'))

@section('content')
    <section class="section-pad pt-20 sm:pt-24 lg:pt-28">
        <div class="site-shell">
            <div class="max-w-3xl">
                <div class="eyebrow">
                    <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
                    Write for us
                </div>

                <h1 class="mt-6 text-4xl font-semibold tracking-tight text-[#0A0A0A] sm:text-5xl lg:text-6xl">
                    Become an author
                </h1>

                <p class="mt-6 text-base leading-8 text-muted sm:text-lg">
                    Share your perspective with our audience. Tell us about your background, the kind of work you do, and the ideas you would like to publish.
                </p>
            </div>

            <div class="mt-12 card overflow-hidden border-[#E7E1C3] bg-white/90 p-8 shadow-[0_12px_30px_rgba(0,0,0,0.04)] sm:p-10">
                <form x-data="authorRequestForm('{{ route('author-requests.store') }}')" @submit.prevent="submit" class="grid gap-5 md:grid-cols-2">
                    @csrf

                    <div>
                        <label for="author-request-name" class="mb-2 flex items-center gap-2 text-sm font-medium text-[#0A0A0A]">
                            <span>Name</span>
                            <span class="text-xs font-semibold uppercase tracking-[0.12em] text-[#B45309]">Required</span>
                        </label>
                        <input x-model="name" id="author-request-name" name="name" type="text" required class="w-full rounded-2xl border border-[#E5E5E5] bg-[#F8F8F8] px-4 py-3 text-sm outline-none transition focus:border-[#FACC15] focus:ring-2 focus:ring-[#FACC15]/20" placeholder="Your name" />
                    </div>

                    <div>
                        <label for="author-request-email" class="mb-2 flex items-center gap-2 text-sm font-medium text-[#0A0A0A]">
                            <span>Email</span>
                            <span class="text-xs font-semibold uppercase tracking-[0.12em] text-[#B45309]">Required</span>
                        </label>
                        <input x-model="email" id="author-request-email" name="email" type="email" required class="w-full rounded-2xl border border-[#E5E5E5] bg-[#F8F8F8] px-4 py-3 text-sm outline-none transition focus:border-[#FACC15] focus:ring-2 focus:ring-[#FACC15]/20" placeholder="you@example.com" />
                    </div>

                    <div>
                        <label for="author-request-job-role" class="mb-2 flex items-center gap-2 text-sm font-medium text-[#0A0A0A]">
                            <span>Job role</span>
                            <span class="text-xs font-semibold uppercase tracking-[0.12em] text-[#525252]">Optional</span>
                        </label>
                        <input x-model="job_role" id="author-request-job-role" name="job_role" type="text" class="w-full rounded-2xl border border-[#E5E5E5] bg-[#F8F8F8] px-4 py-3 text-sm outline-none transition focus:border-[#FACC15] focus:ring-2 focus:ring-[#FACC15]/20" placeholder="Developer Advocate" />
                    </div>

                    <div>
                        <label for="author-request-website" class="mb-2 flex items-center gap-2 text-sm font-medium text-[#0A0A0A]">
                            <span>Website URL</span>
                            <span class="text-xs font-semibold uppercase tracking-[0.12em] text-[#525252]">Optional</span>
                        </label>
                        <input x-model="website_url" id="author-request-website" name="website_url" type="url" class="w-full rounded-2xl border border-[#E5E5E5] bg-[#F8F8F8] px-4 py-3 text-sm outline-none transition focus:border-[#FACC15] focus:ring-2 focus:ring-[#FACC15]/20" placeholder="https://example.com" />
                    </div>

                    <div class="md:col-span-2">
                        <label for="author-request-message" class="mb-2 flex items-center gap-2 text-sm font-medium text-[#0A0A0A]">
                            <span>Tell us about yourself</span>
                            <span class="text-xs font-semibold uppercase tracking-[0.12em] text-[#B45309]">Required</span>
                        </label>
                        <textarea x-model="message" id="author-request-message" name="message" rows="5" required class="w-full rounded-2xl border border-[#E5E5E5] bg-[#F8F8F8] px-4 py-3 text-sm outline-none transition focus:border-[#FACC15] focus:ring-2 focus:ring-[#FACC15]/20" placeholder="Share a bit about yourself and why you want to write with us."></textarea>
                    </div>

                    <div class="md:col-span-2">
                        <label for="author-request-publications" class="mb-2 flex items-center gap-2 text-sm font-medium text-[#0A0A0A]">
                            <span>Previous publications</span>
                            <span class="text-xs font-semibold uppercase tracking-[0.12em] text-[#525252]">Optional</span>
                        </label>
                        <textarea x-model="publications" id="author-request-publications" name="publications" rows="3" class="w-full rounded-2xl border border-[#E5E5E5] bg-[#F8F8F8] px-4 py-3 text-sm outline-none transition focus:border-[#FACC15] focus:ring-2 focus:ring-[#FACC15]/20" placeholder="Add links to your previous work, separated by commas."></textarea>
                        <p class="mt-2 text-sm text-muted">Include links to your previous publications, separated by commas.</p>
                    </div>

                    <div class="md:col-span-2">
                        <div x-show="feedback" x-cloak :class="feedbackClasses" class="rounded-2xl border px-4 py-3 text-sm" x-text="feedback"></div>
                    </div>

                    <div class="md:col-span-2">
                        <button type="submit" :disabled="isSubmitting" class="button-primary" x-text="isSubmitting ? 'Submitting...' : 'Send request'"></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
