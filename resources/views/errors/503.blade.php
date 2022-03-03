<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Error 503 - {{ config('app.name') }}</title>

    <meta name="description" content="Page in maintenance">

    <link rel="canonical" href="{{ url()->current() }}" />

    @livewireStyles

    {{ vite_assets() }}

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="h-full">
<div class="bg-white min-h-full px-4 py-16 sm:px-6 sm:py-24 md:grid md:place-items-center lg:px-8">
    <div class="max-w-max mx-auto">
        <main class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24">
            <div class="text-center">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block text-green-800 xl:inline">Soon...</span>
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    Sorry for the inconvenience but I'm performing some maintenance at the moment. If you need to you can always contact me, otherwise I'll be back online shortly!
                </p>
                <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                    <div class="rounded-md shadow">
                        <a href="mailto:{{ config('web.contact.mail') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-800 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                            Contact
                            <svg height="24" width="24" class="-mr-1 ml-2 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@livewireScripts
</body>
</html>
