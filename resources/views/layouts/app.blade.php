<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      x-data="{ darkMode: false }"
      x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name') }}</title>

    <meta name="description" content="{{ $description ?? config('web.description') }}">

    <link rel="canonical" href="{{ url()->current() }}" />

    @laravelPWA

    @livewireStyles

    @vite

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <x-analytics />
</head>

<body :class="{ 'dark': darkMode }">
<x-header />

@if (isset($slot) && $slot !== null)
{!! $slot !!}
@else
@yield('content')
@endif

<x-footer />
@livewireScripts
</body>
</html>
