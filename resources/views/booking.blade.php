@extends('layouts.reservation')


@section('content')
    <h1 class="text-3xl font-bold pt-8 lg:pt-0">Adventssingen 2020</h1>
    <div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-green-500 opacity-25"></div>
    <p class="pt-8 text-md text-center">Auch dieses Jahr wollen wir Sie nicht ohne die
        frohe Weihnachtsbotschaft lassen.
        Herzlich sind Sie eingeladen, den wohlklingenden Liedern und
        der segensreichen Botschaft
        per Live-Übertragung zu lauschen! </p>
    <p class="pt-8 text-md text-left">Die Termine:</p>
    <ul class="pt-8 text-md text-left">
        <li>19.12. um 18 Uhr</li>
        <li>20.12. um 18 Uhr</li>
    </ul>

    <p class="pt-8 text-sm">Nutzen Sie gerne unseren <a title="Versammlungen der MBG Neuwied-Gladbach" class="text-green-600" href="https://www.internet-radio.com/station/mbgng/">Radio-Stream</a> oder den Player unten um live mitzuhören.</p>
   <div class="pt-8 text-center">
       <audio controls class="mx-auto">
           <source src="https://uk3.internet-radio.com/proxy/mbgng?mp=/stream" type="audio/mpeg">
       </audio>
   </div>
@stop

@section('scripts')

    <script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/tippy.js@4"></script>

    <script>
        //Init tooltips
        tippy('.link',{
            placement: 'bottom'
        })

        //Toggle mode
        const toggle = document.querySelector('.js-change-theme');
        const body = document.querySelector('body');
        const profile = document.getElementById('profile');


        toggle.addEventListener('click', () => {

            if (body.classList.contains('text-gray-900')) {
                toggle.innerHTML = "☀️";
                body.classList.remove('text-gray-900');
                body.classList.add('text-gray-100');
                profile.classList.remove('bg-white');
                profile.classList.add('bg-gray-900');
            } else
            {
                toggle.innerHTML = "🌙";
                body.classList.remove('text-gray-100');
                body.classList.add('text-gray-900');
                profile.classList.remove('bg-gray-900');
                profile.classList.add('bg-white');

            }
        });

    </script>

@endsection
