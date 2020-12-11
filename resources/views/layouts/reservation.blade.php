@extends('layouts.app')


@section('body')
    <body class="min-h-full h-screen font-sans antialiased items-center text-center leading-normal tracking-wider bg-cover">
    <header class="mt-5 mb-3">
        Mennoniten-Brüdergemeinde Neuwied-Gladbach
    </header>
    <div class="flex-grow">
        <div class="place-self-center flex-auto mx-auto">
            <!--Main Col-->
            <div class="sm:container mx-auto">
                <div class="p-2 sm:p-4 md:px-12 text-center">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <div class="footer mt-16  ">
        <a href="{{ route('legal.privacy') }}">Datenschutz</a>
        |
        <a href="{{ route('legal.imprint') }}">Impressum</a>
    </div>
    </body>
@endsection
