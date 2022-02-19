<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name') }}</title>

    <meta name="description" content="{{ $description ?? config('web.description') }}">

    <link rel="canonical" href="{{ url()->current() }}" />

    @livewireStyles

    {{ vite_assets() }}

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
<x-header />

{!! $slot !!}

<x-footer />
@livewireScripts
</body>
</html>
