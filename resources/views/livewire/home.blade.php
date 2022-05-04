<x-slot name="title">{{ config('app.name') }}</x-slot>

<div class="bg-gray-50 dark:bg-slate-800">
    {{-- HERO: presentació + imatge --}}
    <main class="lg:relative">
        <div class="mx-auto max-w-7xl w-full pt-16 pb-20 text-center lg:py-48 lg:text-left">
            <div class="px-4 lg:w-1/2 sm:px-8 xl:pr-16">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white sm:text-5xl md:text-6xl lg:text-5xl xl:text-6xl">
                    <span class="block xl:inline">Hi</span>
                    <span class="block text-sky-800 dark:text-sky-400 xl:inline"> everybody! 👋🏻</span>
                </h1>
                <p class="mt-3 max-w-md mx-auto text-lg text-gray-500 dark:text-slate-400 sm:text-xl md:mt-5 md:max-w-3xl">
                    My name is Adrià Canal and I'm a Web Artisan Developer 👨🏻‍💻
                    I'm a Backend Developer at <a href="https://www.gnahs.com/" title="GNA Hotel Solutions" rel="noreferrer" target="_blank" class="underline">GNA Hotel Soutions</a> since 2018.
                    If you want to know me better you can visit the About me page!
                </p>
                <div class="mt-10 sm:flex sm:justify-center lg:justify-start">
                    <div class="rounded-md shadow">
                        <a href="{{ route('page', 'about-me') }}" title="Moure about me" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-sky-800 hover:bg-sky-700 md:py-4 dark:bg-sky-400 dark:text-slate-800 md:text-lg md:px-10">
                            More about me
                            <svg height="24" width="24" viewBox="0 0 20 20" fill="currentColor" class="ml-3 -mr-1 h-5 w-5">
                                <path fill-rule="evenodd" d="M10 2a1 1 0 00-1 1v1a1 1 0 002 0V3a1 1 0 00-1-1zM4 4h3a3 3 0 006 0h3a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2zm2.5 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm2.45 4a2.5 2.5 0 10-4.9 0h4.9zM12 9a1 1 0 100 2h3a1 1 0 100-2h-3zm-1 4a1 1 0 011-1h2a1 1 0 110 2h-2a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @if(file_exists(public_path('storage/adria_canal.jpg')))
        <div class="relative w-full h-screen md:h-96 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 lg:h-full">
            <x-picture
                name="adria_canal.jpg"
                :sizes="[
                '1440' => [
                    'width' => 720,
                    'height' => 650
                ],
                '1200' => [
                    'width' => 600,
                    'height' => 714
                ],
                '1024' => [
                    'width' => 512,
                    'height' => 714
                ],
                '768' => [
                    'width' => 768,
                    'height' => 384
                ]
            ]"
                :default-sizes="['width' => 720, 'height' => 650]"
                :alt="config('web.description')"
                class="absolute inset-0 w-full h-full object-cover"
                width="100%"
                height="100%"
            />
        </div>
        @endif
    </main>

    {{-- FEATURE: curriculum --}}
    <div class="bg-white dark:bg-slate-900">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8 lg:grid lg:grid-cols-3 lg:gap-x-8">
            <div>
                <h2 class="text-base font-semibold text-sky-800 dark:text-sky-400 uppercase tracking-wide">Some of my skills</h2>
                <p class="mt-2 text-3xl font-extrabold text-gray-900 dark:text-white">As a developer</p>
                <p class="mt-4 text-lg text-gray-500 dark:text-slate-400">As a Backend developer, the programming languages, frameworks and software that I most use and that I master are:</p>
            </div>
            <div class="mt-12 lg:mt-0 lg:col-span-2">
                <dl class="space-y-10 sm:space-y-0 sm:grid sm:grid-cols-2 sm:grid-rows-4 sm:grid-flow-col sm:gap-x-6 sm:gap-y-10 lg:gap-x-8">
                    <div class="relative">
                        <dt>
                            <!-- Heroicon name: outline/check -->
                            <svg class="absolute h-6 w-6 text-sky-500 dark:text-sky-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <p class="ml-9 text-lg leading-6 font-medium text-gray-900 dark:text-white">Laravel</p>
                        </dt>
                        <dd class="mt-2 ml-9 text-base text-gray-500 dark:text-slate-400">
                            I have been working with the Laravel framework since 2015. It's the most PHP powerful framework. 😎
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <!-- Heroicon name: outline/check -->
                            <svg class="absolute h-6 w-6 text-sky-500 dark:text-sky-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <p class="ml-9 text-lg leading-6 font-medium text-gray-900 dark:text-white">Eloquent</p>
                        </dt>
                        <dd class="mt-2 ml-9 text-base text-gray-500 dark:text-slate-400">
                            It is the Laravel ORM and the easiest way to connect any Laravel project to the database without having to do complex SQL queries. 🔍
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <!-- Heroicon name: outline/check -->
                            <svg class="absolute h-6 w-6 text-sky-500 dark:text-sky-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <p class="ml-9 text-lg leading-6 font-medium text-gray-900 dark:text-white">Git</p>
                        </dt>
                        <dd class="mt-2 ml-9 text-base text-gray-500 dark:text-slate-400">
                            Is the best VCS software unquestionably 👑 <br> I think all developers use Git either CLI or GUI.
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <!-- Heroicon name: outline/check -->
                            <svg class="absolute h-6 w-6 text-sky-500 dark:text-sky-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <p class="ml-9 text-lg leading-6 font-medium text-gray-900 dark:text-white">Alpine JS</p>
                        </dt>
                        <dd class="mt-2 ml-9 text-base text-gray-500 dark:text-slate-400">
                            It is simple, powerful and useful 💪🏻. It is the ultimate frontend tool for backend programmers
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <!-- Heroicon name: outline/check -->
                            <svg class="absolute h-6 w-6 text-sky-500 dark:text-sky-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <p class="ml-9 text-lg leading-6 font-medium text-gray-900 dark:text-white">Livewire</p>
                        </dt>
                        <dd class="mt-2 ml-9 text-base text-gray-500 dark:text-slate-400">
                            A way to develop dynamic interfaces without using Vue or React ⚛️ It has been a great discovery.
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <!-- Heroicon name: outline/check -->
                            <svg class="absolute h-6 w-6 text-sky-500 dark:text-sky-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <p class="ml-9 text-lg leading-6 font-medium text-gray-900 dark:text-white">SQL</p>
                        </dt>
                        <dd class="mt-2 ml-9 text-base text-gray-500 dark:text-slate-400">
                            Where Eloquent does not work, SQL knowledge is required. And I've always been fascinated by databases, transactions and sub-queries, I consider myself a whole SherlockQL 🕵🏻‍♂️
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <!-- Heroicon name: outline/check -->
                            <svg class="absolute h-6 w-6 text-sky-500 dark:text-sky-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <p class="ml-9 text-lg leading-6 font-medium text-gray-900 dark:text-white">Web Performance</p>
                        </dt>
                        <dd class="mt-2 ml-9 text-base text-gray-500 dark:text-slate-400">
                            Every project I do I apply the best performance techniques and aim to get optimal scores for the Core Web Vitals 📈 This site is proof of that.
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <!-- Heroicon name: outline/check -->
                            <svg class="absolute h-6 w-6 text-sky-500 dark:text-sky-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <p class="ml-9 text-lg leading-6 font-medium text-gray-900 dark:text-white">Tailwind CSS</p>
                        </dt>
                        <dd class="mt-2 ml-9 text-base text-gray-500 dark:text-slate-400">
                            Similar to Alpine but with CSS. Tailwind is a great help to style without much hassle! 👨🏻‍🎨
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <div class="bg-gray-50 dark:bg-slate-800">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                <span class="block">Does your project needs some love?</span>
                <span class="block text-sky-800 dark:text-sky-400">Get in touch with me!</span>
            </h2>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="{{ route('contact') }}" title="Contact" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-sky-800 hover:bg-sky-700 dark:bg-sky-400 dark:text-slate-800">
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
