@props([
    'yellowDotText' => 'Services',
])

<div class="p-4">
    <section class="py-20 bg-gray-100 rounded-2xl">

        <div class="container mx-auto px-4 max-w-6xl">
            <x-custom.yellow-dot class="">{{ $yellowDotText }}</x-custom.yellow-dot>
            <h2 class="text-6xl font-bold mb-12">
                Who We Help
            </h2>
    
            <div class="grid md:grid-cols-3 gap-8">
                
                <div class="border-r md:border-gray-300 pr-4">
                    <ul class="space-y-4 text-lg text-gray-600">
                        <li>✓ SaaS Companies</li>
                        <li>✓ Developer Tool Companies</li>
                        <li>✓ AI Platforms</li>
                        <li>✓ Engineering Teams</li>
                    </ul>
                </div>
                <div class="border-r md:border-gray-300 pr-4">
                    <ul class="space-y-4 text-lg text-gray-600">
                        <li>✓ Developer Relations Teams</li>
                        <li>✓ Learning & Development Teams</li>
                        <li>✓ Product Enablement Teams</li>
                        <li>✓ Technical Training Organisations</li>
                    </ul>
                </div>
                <div class="">
                    <ul class="space-y-4 text-lg text-gray-600">
                        <li>✓ Developer Relations Teams</li>
                        <li>✓ Learning & Development Teams</li>
                        <li>✓ Product Enablement Teams</li>
                        <li>✓ Technical Training Organisations</li>
                    </ul>
                </div>
    
            </div>
    
        </div>
    
    </section>
</div>