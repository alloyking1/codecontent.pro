<div class="bg-black text-white p-8">
    <div class="grid md:grid-cols-2">
        <div class="py-16 lg:py-20">
            <h1 class="text-2xl font-extrabold text-grey-lighter">{{ env('APP_NAME') }}</h1>
            <hr class="pr-16">
            <h1
                class="pt-5 font-body text-4xl font-semibold text-primary dark:text-white md:text-5xl lg:text-6xl"
            >
                News Letter
            </h1>
        
            <div class="pt-3 sm:w-3/4">
                <p class="font-body text-xl font-light text-primary dark:text-white">
                Articles, tutorials, snippets, rants, and everything else. Subscribe for
                updates as they happen.
                </p>
            </div>
        
            <form class="flex flex-col py-12 sm:flex-row">
                <input
                type="email"
                id="subscribe"
                placeholder="Drop that email here…"
                class="w-full border border-primary bg-grey-lightest px-5 py-4 font-body font-light text-primary placeholder-primary transition-colors focus:border-secondary focus:outline-none focus:ring-2 focus:ring-secondary dark:border-secondary sm:w-1/2"
                />
                <button
                type="submit"
                class="mt-5 border-2 bg-secondary px-10 py-4 font-body text-xl font-semibold text-white hover:bg-green sm:mt-0 md:text-2xl"
                >
                Subscribe
                </button>
            </form>
        </div>

        <div class="py-16 lg:py-20">
            <div class="md:flex md:justify-end">
                <h1 class="text-2xl font-extrabold text-grey-lighter">Resources</h1>
            </div>
            <hr class="pr-16">
            <div class="md:justify-end md:flex mt-4">
                <ul class="py-6">
                    <li class="text-3xl py-4">
                        <a href="#">About</a>
                    </li>
                    <li class="text-3xl py-4">
                        <a href="#">join Us</a>
                    </li>
                    <li class="text-3xl py-4">
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="-pt-4">
        &copy {{ date("Y") }} {{ env('APP_NAME') }} <p class="text-xs">All rights reserved</p>
    </div>
</div>
