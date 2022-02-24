<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Error 404 - {{ config('app.name') }}</title>

    <meta name="description" content="Page not found.">

    <link rel="canonical" href="{{ url()->current() }}" />

    @livewireStyles

    {{ vite_assets() }}

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="h-full">
<div class="bg-white min-h-full px-4 py-16 sm:px-6 sm:py-24 md:grid md:place-items-center lg:px-8">
    <div class="max-w-max mx-auto">
        <main class="sm:flex">
            <p class="text-4xl font-extrabold text-green-800 sm:text-5xl">404</p>
            <div class="sm:ml-6">
                <div class="sm:border-l sm:border-gray-200 sm:pl-6">
                    <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight sm:text-5xl">Page not found</h1>
                    <p class="mt-1 text-base text-gray-500">Please check the URL in the address bar and try again.</p>
                </div>
                <div class="mt-10 flex space-x-3 sm:border-l sm:border-transparent sm:pl-6">
                    <a href="{{ route('home') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-800 hover:bg-green-600">
                        Go back home
                    </a>
                    <a href="{{ route('contact') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-green-700 bg-green-100 hover:bg-green-200">
                        Contact support
                    </a>
                </div>
            </div>
        </main>
    </div>
</div>
@livewireScripts
</body>
</html>
