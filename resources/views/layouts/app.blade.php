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

    {{ vite_assets() }}

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @includeWhen(request()->hasCookie(config('cookie-consent.cookie_name')), 'components.cookies.analytics')
</head>

<body :class="{ 'dark': darkMode }">
@if(request()->hasCookie(config('cookie-consent.cookie_name')))
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{ config('web.tracking.google_tag_manager') }}"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
@endif
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
