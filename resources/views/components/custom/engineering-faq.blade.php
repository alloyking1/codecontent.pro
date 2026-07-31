<section class="bg-[#F8F6F0] py-24">

    <div class="site-shell">

        <div class="grid gap-12 lg:grid-cols-[0.8fr_1.5fr]">

            {{-- Intro --}}
            <div>

                <x-custom.yellow-dot>
                    FAQ
                </x-custom.yellow-dot>

                <h2 class="mt-4 font-heading text-4xl font-semibold leading-tight text-[#0A0A0A]">
                    Questions We Get Asked.
                </h2>

                <p class="mt-5 max-w-md text-base leading-7 text-gray-600">
                    We understand that bringing an external engineering team
                    into your workflow raises important questions. Here are
                    some of the answers.
                </p>

            </div>


            {{-- Questions --}}
            <div
                x-data="{ active: null }"
                class="space-y-3"
            >

                {{-- Question 1 --}}
                <div class="border border-gray-200 bg-white">

                    <button
                        type="button"
                        @click="active = active === 1 ? null : 1"
                        class="flex w-full items-center justify-between gap-6 px-6 py-5 text-left"
                    >
                        <span class="font-heading text-lg font-semibold">
                            Who owns the code and intellectual property?
                        </span>

                        <span
                            class="shrink-0 text-xl transition-transform duration-200"
                            :class="active === 1 ? 'rotate-45' : ''"
                        >
                            +
                        </span>
                    </button>

                    <div
                        x-show="active === 1"
                        x-collapse
                        x-cloak
                        class="border-t border-gray-100 px-6 py-5 text-sm leading-6 text-gray-600"
                    >
                        The client retains ownership of the code and intellectual
                        property produced as part of the engagement, subject to
                        the terms agreed in the project contract.
                    </div>

                </div>


                {{-- Question 2 --}}
                <div class="border border-gray-200 bg-white">

                    <button
                        type="button"
                        @click="active = active === 2 ? null : 2"
                        class="flex w-full items-center justify-between gap-6 px-6 py-5 text-left"
                    >
                        <span class="font-heading text-lg font-semibold">
                            How do you handle sensitive code and data?
                        </span>

                        <span
                            class="shrink-0 text-xl transition-transform duration-200"
                            :class="active === 2 ? 'rotate-45' : ''"
                        >
                            +
                        </span>
                    </button>

                    <div
                        x-show="active === 2"
                        x-collapse
                        x-cloak
                        class="border-t border-gray-100 px-6 py-5 text-sm leading-6 text-gray-600"
                    >
                        We follow secure development practices and can work
                        within your existing access controls, repositories,
                        environments, and security requirements.
                    </div>

                </div>


                {{-- Question 3 --}}
                <div class="border border-gray-200 bg-white">

                    <button
                        type="button"
                        @click="active = active === 3 ? null : 3"
                        class="flex w-full items-center justify-between gap-6 px-6 py-5 text-left"
                    >
                        <span class="font-heading text-lg font-semibold">
                            How quickly can a project start?
                        </span>

                        <span
                            class="shrink-0 text-xl transition-transform duration-200"
                            :class="active === 3 ? 'rotate-45' : ''"
                        >
                            +
                        </span>
                    </button>

                    <div
                        x-show="active === 3"
                        x-collapse
                        x-cloak
                        class="border-t border-gray-100 px-6 py-5 text-sm leading-6 text-gray-600"
                    >
                        After an initial discovery conversation and technical
                        scoping, we'll agree on the appropriate timeline,
                        deliverables, and start date.
                    </div>

                </div>


                {{-- Question 4 --}}
                <div class="border border-gray-200 bg-white">

                    <button
                        type="button"
                        @click="active = active === 4 ? null : 4"
                        class="flex w-full items-center justify-between gap-6 px-6 py-5 text-left"
                    >
                        <span class="font-heading text-lg font-semibold">
                            Can you work alongside our existing team?
                        </span>

                        <span
                            class="shrink-0 text-xl transition-transform duration-200"
                            :class="active === 4 ? 'rotate-45' : ''"
                        >
                            +
                        </span>
                    </button>

                    <div
                        x-show="active === 4"
                        x-collapse
                        x-cloak
                        class="border-t border-gray-100 px-6 py-5 text-sm leading-6 text-gray-600"
                    >
                        Absolutely. We can operate as an extension of your
                        existing engineering, product, documentation, or
                        learning team depending on the engagement.
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>