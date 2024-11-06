<nav class="bg-white border-b-2 border-black fixed w-full" x-data="{ open: false }">
    
    <div class="mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-between">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <button x-on:click="open = ! open" type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!--
              Icon when menu is closed.
  
              Menu open: "hidden", Menu closed: "block"
            -->
            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!--
              Icon when menu is open.
  
              Menu open: "block", Menu closed: "hidden"
            -->
            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-between">
          <div class="flex flex-shrink-0 items-center">
            <a href="{{ route('pages.index') }}" class="font-bold text-2xl">
              {{ env('APP_NAME') }}
            </a>
          </div>
          <div class="hidden sm:ml-6 sm:block">
            <div class="flex space-x-4">
              <a href="{{ route('pages.index') }}/#service" class="text-grey-900 rounded-md px-3 py-2 text-sm font-medium">Services</a>
              <a href="{{ route('pages.index') }}/#portfolio" class="text-grey-900 rounded-md px-3 py-2 text-sm font-medium">Portfolio</a>
              <a href="{{ route('pages.index') }}/#testimony" class="text-grey-900 rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Testimonies</a>
              <a href="{{ route('pages.price') }}" class="text-grey-900 rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Pricing</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  
    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" x-show="open">
      <div class="space-y-1 px-2 pb-3 pt-2">
        <a x-on:click="open = ! open" href="{{ route('pages.index') }}/#service" class="text-gray-300 block rounded-md px-3 py-2 text-base font-medium">Services</a>
        <a x-on:click="open = ! open" href="{{ route('pages.index') }}/#portfolio" class="text-gray-300 block rounded-md px-3 py-2 text-base font-medium">Portfolio</a>
        <a x-on:click="open = ! open" href="{{ route('pages.index') }}/#testimony" class="text-gray-300 block rounded-md px-3 py-2 text-base font-medium">Testimonies</a>
        <a href="{{ route('pages.price') }}" class="text-gray-300 block rounded-md px-3 py-2 text-base font-medium">Pricing</a>
      </div>
    </div>
  </nav>
  