<div>
    <section id="contact" class="pb-8">
        <div class="site-shell">
            <div class="card overflow-hidden">
                <div class="grid gap-0 lg:grid-cols-[1.1fr_0.9fr] lg:items-stretch">
                    <div class="p-8 sm:p-10 lg:p-12">
                        <div class="eyebrow">
                            <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
                            Join the list
                        </div>
                        <h2 id="contact-heading" class="mt-4 max-w-xl text-3xl font-semibold tracking-tight text-[#0A0A0A] sm:text-4xl">
                            Get practical technical writing and developer education insights.
                        </h2>
                        <p class="mt-4 max-w-2xl text-base leading-7 text-[#525252] sm:text-lg">
                            Share your details and we will keep you posted with useful ideas, product education updates, and learning resources.
                        </p>

                        <div class="mt-8 flex flex-wrap items-center gap-x-6 gap-y-3 text-sm text-[#525252]">
                            <span class="inline-flex items-center gap-2.5">
                                <span class="inline-flex h-6 w-6 items-center justify-center rounded-full border border-[#E5E5E5] bg-[#F8F8F8]">
                                    <svg class="h-3.5 w-3.5 text-[#0A0A0A]" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6">
                                        <path d="M4 10h12M10 4l6 6-6 6" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                Useful updates only
                            </span>
                            <span class="inline-flex items-center gap-2.5">
                                <span class="inline-flex h-6 w-6 items-center justify-center rounded-full border border-[#E5E5E5] bg-[#F8F8F8]">
                                    <svg class="h-3.5 w-3.5 text-[#0A0A0A]" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6">
                                        <path d="M4 10h12M10 4l6 6-6 6" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                No spam, ever
                            </span>
                        </div>
                    </div>

                    <div class="border-t border-[#E5E5E5] bg-[#F8F8F8] p-8 lg:border-l lg:border-t-0 lg:p-10" aria-labelledby="contact-heading">
                        <form x-data="emailListForm('{{ route('email-list.store') }}')" x-ref="form" @submit.prevent="submit" class="space-y-4">
                            @csrf
                            <div>
                                <label for="email-list-name" class="mb-2 block text-sm font-medium text-[#0A0A0A]">Name</label>
                                <input x-model="name" id="email-list-name" name="name" type="text" required class="w-full rounded-2xl border border-[#E5E5E5] bg-white px-4 py-3 text-sm outline-none transition focus:border-[#FACC15] focus:ring-2 focus:ring-[#FACC15]/20" placeholder="Your name" />
                            </div>

                            <div>
                                <label for="email-list-email" class="mb-2 block text-sm font-medium text-[#0A0A0A]">Email</label>
                                <input x-model="email" id="email-list-email" name="email" type="email" required class="w-full rounded-2xl border border-[#E5E5E5] bg-white px-4 py-3 text-sm outline-none transition focus:border-[#FACC15] focus:ring-2 focus:ring-[#FACC15]/20" placeholder="you@example.com" />
                            </div>

                            <div>
                                <label for="email-list-job-role" class="mb-2 block text-sm font-medium text-[#0A0A0A]">Job role</label>
                                <input x-model="job_role" id="email-list-job-role" name="job_role" type="text" required class="w-full rounded-2xl border border-[#E5E5E5] bg-white px-4 py-3 text-sm outline-none transition focus:border-[#FACC15] focus:ring-2 focus:ring-[#FACC15]/20" placeholder="Developer Experience Lead" />
                            </div>

                            <div x-show="feedback" x-cloak :class="feedbackClasses" class="rounded-2xl border px-4 py-3 text-sm" x-text="feedback"></div>

                            <button type="submit" :disabled="isSubmitting" class="button-primary w-full sm:w-auto" x-text="isSubmitting ? 'Submitting...' : 'Join the list'"></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>