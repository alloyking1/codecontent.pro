@props([
    'bgColor' => 'purple',
    'company' => '',
    'mainText' => '',
    'name' => '',
    'position' => '',
    'img' => ''
])

<div id="testimony">

    <div {{ $attributes->class(['bg-[#FFC8EB]' => $bgColor == 'purple', 'bg-[#ffe14f]' => $bgColor == 'yellow', 'md:p-12 p-6']) }} >
        <div class="px-4">
            <div class="pb-4 pt-4">
    
                <h2 class="text-5xl text-bold">Testimonies</h2>
            </div>
            <hr class="border-black border-2">
        </div>
        <div class="grid md:grid-cols-2 gap-2 md:p-16 p-4">
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
                class="w-auto h-auot rounded-full"
                src="https://images.pexels.com/photos/5271121/pexels-photo-5271121.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
                alt="">
            </div>
        </div>
    </div>
</div>