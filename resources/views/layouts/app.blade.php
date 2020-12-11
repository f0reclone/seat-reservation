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
