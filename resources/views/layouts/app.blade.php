<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($metaDescription) ? $metaDescription : config('content.defaults.title') }}</title>
    <meta name="description"
          content="{{ isset($metaDescription) ? $metaDescription : config('content.defaults.description') }}">
    <title>Adventssingen 2020 Livestream</title>

    <link rel="apple-touch-icon" sizes="57x57" href="/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/icons/ms-icon-144x144.png">

    <!-- Browser color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#1a3a4f">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#1a3a4f">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#1a3a4f">

    @yield('styles.before')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script:wght@700">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>


@yield('body')

@include('partials.scripts')
@yield('scripts')

</html>
