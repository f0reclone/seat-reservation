@extends('layouts.app')


@section('body')
    <body class="font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover"
          style="background-image:url('https://source.unsplash.com/PzhmEp_aDU4');">


    <div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">

        <!--Main Col-->
        <div id="profile"
             class="w-full lg:w-3/5 rounded-lg lg:rounded-l-lg shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">


            <div class="p-4 md:p-12 text-center lg:text-left">
                <!-- Image for mobile view-->
                <div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center"
                     style="background-image: url('https://source.unsplash.com/Wreb4Gwyf-M')"></div>


                @yield('content')
                <div class="text-right mt-5">
                    <a class="text-teal-600" href="{{ route('legal.privacy') }}">Datenschutz</a>
                    |
                    <a class="text-teal-600" href="{{ route('legal.imprint') }}">Impressum</a>
                </div>
            </div>

        </div>

        <!--Img Col-->
        <div class="w-full lg:w-2/5">
            <!-- Big profile image for side bar (desktop) -->
            <img src="https://source.unsplash.com/Wreb4Gwyf-M"
                 class="rounded-none lg:rounded-lg lg:rounded-l-none shadow-2xl hidden lg:block">
        </div>

    </div>
    </body>
@endsection