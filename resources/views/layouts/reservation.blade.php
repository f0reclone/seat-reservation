@extends('layouts.app')


@section('body')
    <body class="font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover"
          style="background-image:url('/media/background.jpg');background-size: cover;background-position: center center;height: 100vh;">


    <div class="max-w-2xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-16 lg:my-0">

        <!--Main Col-->
        <div id="profile"
             class="w-full rounded-lg lg:rounded-l-lg shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">


            <div class="p-4 md:p-12 text-center lg:text-left">
                <!-- Image for mobile view-->


                @yield('content')
                <div class="text-right mt-5">
                    <a class="text-teal-600" href="{{ route('legal.privacy') }}">Datenschutz</a>
                    |
                    <a class="text-teal-600" href="{{ route('legal.imprint') }}">Impressum</a>
                </div>
            </div>

        </div>

    </div>
    </body>
@endsection
