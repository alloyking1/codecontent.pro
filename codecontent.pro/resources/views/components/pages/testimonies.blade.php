@props([
    'bgColor' => 'purple',
    'company' => '',
    'mainText' => '',
    'name' => '',
    'position' => '',
    'img' => ''
])

<div {{ $attributes->class(['bg-[#FFC8EB]' => $bgColor == 'purple', 'bg-[#ffe14f]' => $bgColor == 'yellow', 'p-12']) }} >
    <div class="grid md:grid-cols-2 gap-2 p-16">
        <div class="mx-auto my-auto">
            <p class="text-5xl font-bold">company name</p>
            <h2 class="text-3xl font-bold py-16">
                “We launched on beehiiv with nothing, scaled to over 250,000 subscribers, and got acquired all in under a year. beehiiv is that powerful.”
            </h2>
            <p class="text-2xl font-bold">Name</p>
            <p class="font-thin">Position</p>
        </div>
        <div class="hidden md:block mx-auto my-auto">
            <img 
            class="w-auto h-auot"
            src="https://media.beehiiv.com/cdn-cgi/image/fit=scale-down,onerror=redirect,format=auto,width=1080,quality=75/www/quote-headshots/Shaan-1.png" 
            alt="">
        </div>
    </div>
</div>