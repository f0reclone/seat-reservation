@extends('layouts.reservation')


@section('content')
    <h1 class="text-3xl font-bold pt-8 lg:pt-0">Adventssingen 2020</h1>
    <div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-teal-500 opacity-25"></div>
    <p class="pt-8 text-md">Das Adventssingen findet dieses Jahr organisiert von der
        Mennoniten-Brüdergemeinde Neuwied-Gladbach an 4 verschiedenen Orten statt.</p>
    <p class="pt-8 text-md">Bitte melden Sie sich an, damit wir die Kapazitäten planen können.</p>
    <div class="mt-5 text-left">
        <form action="{{ route('booking.post') }}" method="POST">
            @csrf
            <div class="mt-4">
                <label for="date_id"
                       class="block text-base font-medium leading-5 text-teal-700">Termin</label>
                <select id="date_id" name="date_id"
                        class="mt-1 block form-select w-full py-3 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-teal focus:border-teal-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    <option value="" hidden>Bitte auswählen</option>
                    @foreach($dates as $date)
                        <option value="{{ $date->id }}">{{ $date->description }}</option>
                    @endforeach
                </select>
                @error('date_id')
                <p class="text-red-500 text-xs italic">Bitte wählen Sie einen Termin aus.</p>
                @enderror
            </div>
            <div class="mt-4">
                <label for="quantity"
                       class="block text-base font-medium leading-5 text-teal-700">Anzahl Personen</label>
                <select id="quantity" name="quantity"
                        class="mt-1 block form-select w-full py-3 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-teal focus:border-teal-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    @for($i = 1; $i < 21; $i++)
                        <option value="{{ $i }}" {{ old('quantity', 1) === $i ? 'selectec="selected"' : '' }}>{{ $i }}</option>
                    @endfor
                </select>
                @error('quantity')
                <p class="text-red-500 text-xs italic">Bitte nennen Sie die Gesamtanzahl der Personen, mit denen Sie teilnehmen möchten.</p>
                @enderror
            </div>
            <div class="mt-4">
                <label for="name" class="block text-base font-medium leading-5 text-teal-700">Name</label>
                <input id="name" name="name"
                       class="mt-1 py-3 px-3 form-input block w-full transition border border-gray-300 rounded-md  focus:outline-none focus:shadow-outline-teal focus:border-teal-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                @error('name')
                <p class="text-red-500 text-xs italic">Bitte geben Sie ihren vollen Namen ein.</p>
                @enderror
            </div>

            <div class="mt-4">
                <label for="email"
                       class="block text-base font-medium leading-5 text-teal-700">E-Mail</label>
                <input id="email" name="email"
                       class="mt-1 py-3 px-3 form-input block w-full transition border border-gray-300 rounded-md  focus:outline-none focus:shadow-outline-teal focus:border-teal-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                @error('email')
                <p class="text-red-500 text-xs italic">Bitte geben Sie Ihre E-Mail Adresse, zwecks Kontaktnachverfolgung ein.</p>
                @enderror
            </div>

            <div class="mt-4">
                <label for="phone"
                       class="block text-base font-medium leading-5 text-teal-700">Telefon</label>
                <input id="phone" name="phone"
                       class="mt-1 py-3 px-3 form-input block w-full transition border border-gray-300 rounded-md  focus:outline-none focus:shadow-outline-teal focus:border-teal-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                @error('email')
                <p class="text-red-500 text-xs italic">Bitte geben Sie Ihre Telefonnummer, zwecks Kontaktnachverfolgung ein.</p>
                @enderror
            </div>
            <p class="pt-8 text-sm">Mit der Angabe meiner Daten erkläre ich mich bereit, dass meine Daten zum Zweck der Kontaktnachverfolgung bis zu 30 Tage nach dem ausgewählten Termin gespeichert werden. Ich akzeptiere die <a class="text-teal-600" href="{{ route('legal.privacy') }}">Datenschutzerklärung</a>.</p>
            <div class="mt-5 bg-gray-50 text-right">
                <button class="py-2 px-4 border border-transparent text-base leading-5 font-medium rounded-md text-white bg-teal-600 shadow-sm hover:bg-teal-500 focus:outline-none focus:shadow-outline-teal active:bg-teal-600 transition duration-150 ease-in-out">
                    Anmelden
                </button>
            </div>
        </form>
    </div>

    <p class="pt-8 text-sm">Falls Sie nicht vor Ort teilnehmen können, nutzen Sie gerne unseren <a title="Versammlungen der MBG Neuwied-Gladbach" class="text-teal-600" href="https://www.internet-radio.com/station/mbgng/">Radio-Stream</a> um live mitzuhören.</p>
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