@props([
    'header' => true,
])

@php
    $companies = [
        ['name' => 'MongoDB', 'logo' => asset('images/logos/mongodb.svg')],
        ['name' => 'Twilio', 'logo' => asset('images/logos/twilio.svg')],
        ['name' => 'Laravel News', 'logo' => asset('images/logos/laravel-news.svg')],
        ['name' => 'Strapi', 'logo' => asset('images/logos/strapi.svg')],
        ['name' => 'DataCamp', 'logo' => asset('images/logos/datacamp.svg')],
    ];
@endphp

<section class="py-20">
    <div class="site-shell">

        @if ($header)
            <div class="mx-auto mb-14 max-w-3xl text-center">
                <p class="font-heading mb-4 text-4xl font-thin font-medium">
                    Technical Content Published by Industry-Leading Developer Platforms
                </p>

                <p class="text-base pt-2 text-gray-600">
                    Technical Content for Leading Developer Companies
                </p>
            </div>
        @endif

        <div
            x-data="{
                logos: {{ Js::from(array_merge($companies, $companies)) }},
            }"
            class="relative overflow-hidden"
        >
            <div
                class="flex w-max items-center gap-16"
                style="animation: marquee 28s linear infinite;"
            >
                <template x-for="(company, index) in logos" :key="index">
                    <div class="flex h-14 items-center opacity-70 transition hover:opacity-100">
                        <img
                            :src="company.logo"
                            :alt="company.name"
                            class="h-8 w-auto grayscale transition hover:grayscale-0"
                        >
                    </div>
                </template>
            </div>
        </div>

    </div>
</section>

<style>
@keyframes marquee {
    from {
        transform: translateX(0);
    }

    to {
        transform: translateX(-50%);
    }
}
</style>