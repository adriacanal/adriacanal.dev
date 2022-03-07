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

    @includeWhen(request()->hasCookie(config('cookie-consent.cookie_name')), 'components.cookies.analytics')
</head>

<body>
@if(request()->hasCookie(config('cookie-consent.cookie_name')))
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{ config('web.tracking.google_tag_manager') }}"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
@endif
<x-header />

{!! $slot !!}

<x-footer />
@livewireScripts
</body>
</html>
