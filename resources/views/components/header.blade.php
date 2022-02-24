<div x-data="{ mobileMenuOpen: false }" class="relative bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="{{ route('home') }}">
                    <img class="h-8 w-auto sm:h-10 inline" src="{{ asset('adriacanal_logo.png') }}" alt="Adrià Canal">
                    <span class="text-2xl font-noto font-bold text-green-800 align-middle">Adrià Canal</span>
                </a>
            </div>
            <div class="-mr-2 -my-2 md:hidden">
                <button @click="mobileMenuOpen = true" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-500 hover:text-gray-500 hover:bg-gray-100" aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            <x-navigation.desktop />
        </div>
    </div>

    <div style="display: none" x-show="mobileMenuOpen" x-transition:enter="duration-200 ease-out"
         x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
            <div class="pt-5 pb-6 px-5">
                <div class="flex items-center justify-between">
                    <div>
                        <img class="h-8 w-auto" src="{{ asset('adriacanal_logo.png') }}" alt="Adrià Canal">
                    </div>
                    <div class="-mr-2">
                        <button @click="mobileMenuOpen = false" type="button"
                                class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-500 hover:text-gray-500 hover:bg-gray-100">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="mt-6">
                    <x-navigation.mobile />
                </div>
            </div>
        </div>
    </div>
</div>
