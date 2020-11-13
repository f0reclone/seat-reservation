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

@yield('styles.before')
<!-- Font Awesome if you need it
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  -->
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css">
    <!--Replace with your tailwind.css once created-->
    <!-- App Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>


<body class="font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover"
      style="background-image:url('https://source.unsplash.com/PzhmEp_aDU4');">


<div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">

    <!--Main Col-->
    <div id="profile"
         class="w-full lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">


        <div class="p-4 md:p-12 text-center lg:text-left">
            <!-- Image for mobile view-->
            <div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center"
                 style="background-image: url('https://source.unsplash.com/Wreb4Gwyf-M')"></div>


            @yield('content')

        </div>

    </div>

    <!--Img Col-->
    <div class="w-full lg:w-2/5">
        <!-- Big profile image for side bar (desktop) -->
        <img src="https://source.unsplash.com/Wreb4Gwyf-M"
             class="rounded-none lg:rounded-lg shadow-2xl hidden lg:block">
    </div>

</div>
</body>

@include('partials.scripts')
@yield('scripts')

</html>
