<x-slot name="title">{{ config('app.name') }}</x-slot>

<div class="bg-gray-50">
    {{-- HERO: presentació + imatge --}}
    <main class="lg:relative">
        <div class="mx-auto max-w-7xl w-full pt-16 pb-20 text-center lg:py-48 lg:text-left">
            <div class="px-4 lg:w-1/2 sm:px-8 xl:pr-16">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl lg:text-5xl xl:text-6xl">
                    <span class="block xl:inline">Hi</span>
                    <span class="block text-green-500 xl:inline"> everybody! 👋🏻</span>
                </h1>
                <p class="mt-3 max-w-md mx-auto text-lg text-gray-500 sm:text-xl md:mt-5 md:max-w-3xl">
                    My name is Adrià Canal and I'm a Web Artisan Developer 👨🏻‍💻
                    I'm a Backend Developer at <a href="https://www.gnahs.com/" rel="noreferrer" target="_blank" class="underline">GNA Hotel Soutions</a> since 2018.
                    If you want to know me better you can visit the About me page!
                </p>
                <div class="mt-10 sm:flex sm:justify-center lg:justify-start">
                    <div class="rounded-md shadow">
                        <a href="{{-- route('page', 'about-me') --}}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-500 hover:bg-green-700 md:py-4 md:text-lg md:px-10">
                            More about me
                            <svg height="24" width="24" viewBox="0 0 20 20" fill="currentColor" class="ml-3 -mr-1 h-5 w-5">
                                <path fill-rule="evenodd" d="M10 2a1 1 0 00-1 1v1a1 1 0 002 0V3a1 1 0 00-1-1zM4 4h3a3 3 0 006 0h3a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2zm2.5 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm2.45 4a2.5 2.5 0 10-4.9 0h4.9zM12 9a1 1 0 100 2h3a1 1 0 100-2h-3zm-1 4a1 1 0 011-1h2a1 1 0 110 2h-2a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative w-full h-64 sm:h-72 md:h-96 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 lg:h-full">
            <img class="absolute inset-0 w-full h-full object-cover" src="https://images.unsplash.com/photo-1520333789090-1afc82db536a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2102&q=80" alt="">
        </div>
    </main>

    {{-- FEATURE: curriculum --}}
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8 lg:grid lg:grid-cols-3 lg:gap-x-8">
            <div>
                <h2 class="text-base font-semibold text-green-500 uppercase tracking-wide">Some of my skills</h2>
                <p class="mt-2 text-3xl font-extrabold text-gray-900">As a developer</p>
                <p class="mt-4 text-lg text-gray-500">Com a Backend developer, els llenguatges de programació, frameworks i software que faig servir més habitualment i que domino són: </p>
            </div>
            <div class="mt-12 lg:mt-0 lg:col-span-2">
                <dl class="space-y-10 sm:space-y-0 sm:grid sm:grid-cols-2 sm:grid-rows-4 sm:grid-flow-col sm:gap-x-6 sm:gap-y-10 lg:gap-x-8">
                    <div class="relative">
                        <dt>
                            <!-- Heroicon name: outline/check -->
                            <svg class="absolute h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <p class="ml-9 text-lg leading-6 font-medium text-gray-900">PHP</p>
                        </dt>
                        <dd class="mt-2 ml-9 text-base text-gray-500">
                            Al cap i a la fi, és el llenguatge de programació amb què treballo i faig els meus projectes personals des de 2015.
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <!-- Heroicon name: outline/check -->
                            <svg class="absolute h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <p class="ml-9 text-lg leading-6 font-medium text-gray-900">Laravel</p>
                        </dt>
                        <dd class="mt-2 ml-9 text-base text-gray-500">
                            El millor Framework de PHP que existeix en l'actualitat. També l'he utilitzat des de 2015 amb la versió 4.2
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <!-- Heroicon name: outline/check -->
                            <svg class="absolute h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <p class="ml-9 text-lg leading-6 font-medium text-gray-900">Livewire</p>
                        </dt>
                        <dd class="mt-2 ml-9 text-base text-gray-500">
                            És relativament nou però molt potent i m'encanta! L'he posat en pràctica precisament amb aquest projecte web i també amb algun projecte de la feina.
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <!-- Heroicon name: outline/check -->
                            <svg class="absolute h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <p class="ml-9 text-lg leading-6 font-medium text-gray-900">SQL</p>
                        </dt>
                        <dd class="mt-2 ml-9 text-base text-gray-500">
                            Les consultes SQL és una cosa que se m'ha donat sempre molt bé.
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <!-- Heroicon name: outline/check -->
                            <svg class="absolute h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <p class="ml-9 text-lg leading-6 font-medium text-gray-900">Git</p>
                        </dt>
                        <dd class="mt-2 ml-9 text-base text-gray-500">
                            El dia a dia del programador web, sense Git no se que seriem. Ja sigui BitBucket o GitHub, amb o sense GUI però es vital, a ser possible a més fent ús de Git Flow
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <!-- Heroicon name: outline/check -->
                            <svg class="absolute h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <p class="ml-9 text-lg leading-6 font-medium text-gray-900">JSON</p>
                        </dt>
                        <dd class="mt-2 ml-9 text-base text-gray-500">
                            Els fitxers Json ja sigui Composer, Package, o bé per enviar/rebre informació és realment útil i simple.
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <!-- Heroicon name: outline/check -->
                            <svg class="absolute h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <p class="ml-9 text-lg leading-6 font-medium text-gray-900">Tailwind CSS</p>
                        </dt>
                        <dd class="mt-2 ml-9 text-base text-gray-500">
                            Framework de CSS molt interessant, miro d'aprendre ràpidament però aquest és el meu primer projecte amb Tailwind CSS 💪🏻
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <!-- Heroicon name: outline/check -->
                            <svg class="absolute h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <p class="ml-9 text-lg leading-6 font-medium text-gray-900">Docker</p>
                        </dt>
                        <dd class="mt-2 ml-9 text-base text-gray-500">
                            Conec alguns conceptes bàsics del Docker i també amb el projecte de la meva web hi he fet algunes proves juntament amb Laravel Sail.
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <div class="bg-gray-50">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                <span class="block">May I help you?</span>
                <span class="block text-green-500">Get in touch with me!</span>
            </h2>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="{{-- route('contact') --}}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-500 hover:bg-green-700">
                        Contact
                        <svg height="24" width="24" class="-mr-1 ml-2 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>


</div>
