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
                <p class="text-5xl font-bold">Laraveldev.pro</p>
                <h2 class="text-3xl font-bold py-16">
                    “Working with CodeContent was a game-changer for our business. Moses and his team delivered a high-quality, custom website that perfectly captures our brand. Their expertise in PHP, Laravel, and no-code tools made the whole process smooth and efficient. The result is a stunning, easy-to-manage site that our customers love. Highly recommended!"
                </h2>
                <p class="text-2xl font-bold">Keshi</p>
                <p class="font-thin">CEO</p>
            </div>
            <div class="hidden md:block mx-auto my-auto border rounded-full p-4 bg-white">
                <img 
                class="w-auto h-[50%] rounded-full"
                src="https://images.pexels.com/photos/7752895/pexels-photo-7752895.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
                alt="">
            </div>
        </div>
    </div>
</div>