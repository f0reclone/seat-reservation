@extends('layouts.reservation')


@section('content')
    <h1 class="text-3xl font-bold pt-8 lg:pt-0">Adventssingen 2020</h1>
    <div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-teal-500 opacity-25"></div>
    <p class="pt-8 text-md">Vielen Dank für Ihre Anmeldung!</p>
    {!! $additionalInformation !!}
    <p class="pt-8 text-md">Sie können nun ein Blatt herunterladen und ausgefüllt mitbringen, damit wir Ihre Anwesenheit
        nicht vor Ort erfassen müssen.</p>
    <br>
    <a class="pt-8 text-teal-500" href="/media/Dokumentation_der_Anwesenheit.pdf">Dokumentation der Anwesenheit</a>
@endsection

