@extends('layouts.app')


@section('body')

<body class="min-h-full h-screen font-sans antialiased items-center text-center leading-normal tracking-wider bg-cover">
<header>
    Mennoniten-Brüdergemeinde Neuwied-Gladbach
</header>
<div class="flex-grow">
    <div class="place-self-center flex-auto mx-auto">

        <!--Main Col-->
        <div id="profile" class="w-full  ">

            <div class="p-4 md:px-12 text-center">

                @yield('content')
    </div>
        </div>
    </div>
</div>
<div class="footer mt-16  ">
    <a href="https://www.mbg-gladbach.de/datenschutz">Datenschutz</a>
    |
    <a href="https://www.mbg-gladbach.de/impressum">Impressum</a>
</div>


</body>
@endsection
