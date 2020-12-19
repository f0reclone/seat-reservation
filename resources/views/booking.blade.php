@extends('layouts.reservation')


@section('content')
    <h1 class="text-2xl opacity-70 font-bold pt-8 border-b-4 as-element-light">Adventssingen 2020</h1>

    <div id="imagecard" class=" max-h-screen ">
        <img class=" " src="./media/card.png"
             alt="Jesus Christus - das Licht - sein Leben - unser Lied"/>
    </div>

    <div class="mx-auto mt-8 pt-0  as-element-light">
        <p class="p-4  text-center">
            Auch dieses Jahr wollen wir Sie nicht ohne die
            frohe Weihnachtsbotschaft lassen.
            Herzlich sind Sie eingeladen, den wohlklingenden Liedern und
            der segensreichen Botschaft
            per Live-Übertragung zu lauschen!
        </p>
    </div>

    <div class="mt-8 border-b-8 p-4 as-border text-5xl m-4<"><i class="far fa-calendar-alt"></i></div>

    <div class="mt-4 mb-8 as-element-dark">
        <h3 class="text-xl">Die Termine</h3>
        <ul class=" grid grid-cols-2 pt-8 text-md text-3xl  ">
            <li class="col-start-1 m-4 md:mr-2 md:ml-0 border-l-4 border-r-4 as-border p-4 handwriting">
                <div class="text-5xl">19.12.</div>
                um 18 Uhr
            </li>
            <li class="col-start-2 m-4 md:ml-2 md:mr-0 border-l-4 border-r-4 as-border pr-0  p-4 handwriting">
                <div class="text-5xl">20.12.</div>
                um 18 Uhr
            </li>
        </ul>
    </div>
    <div class="my-4 as-element-light">
        <p class=" pt-4 text-sm">Nutzen Sie gerne unseren
            <a title="Versammlungen der MBG Neuwied-Gladbach"
               class="underline"
               href="https://www.internet-radio.com/station/mbgng/">Radio-Stream</a>
            oder den Player unten, um live mitzuhören.
        </p>
        <div class="pt-8 pb-4 text-2xl">
            <div id="lunaradio" style='width:100%; height:70px;
-webkit-border-top-left-radius: 0px;
  -webkit-border-top-right-radius: 0px;
  -webkit-border-bottom-right-radius: 0px;
  -webkit-border-bottom-left-radius: 0px;
  -moz-border-radius-topleft: 0px;
  -moz-border-radius-topright: 0px;
  -moz-border-radius-bottomright: 0px;
  -moz-border-radius-bottomleft: 0px;
  border-top-left-radius: 0px;
  border-top-right-radius: 0px;
  border-bottom-right-radius: 0px;
  border-bottom-left-radius: 0px;
  border: none;'>
                <div style="overflow:hidden; height:0px; width:0px;"></div>
            </div>
        </div>
    </div>

    <div class=" grid 	 grid-cols-2 mt-16 as-element-dark as-border border-2 p-4 text-xl">
        <span class="m-auto h-fill text-center text-4xl"><i class="fas fa-bible"></i></span>
        <span>
                    <p>
                        In ihm war das Leben, und das Leben war das Licht der Menschen.</p>
                    <div class="text-sm">Johannes 1,4</div>

                    </span>
    </div>
    <div class="mt-8">
        <p>
            Wir freuen uns, Sie im nächsten
            Jahr wieder wohlbehalten in
            unserer Mitte zu begrüßen.
        <div class="text-xs">Die Mennoniten-Brüdergemeinde
            Neuwied-Gladbach
        </div>
        </p>
    </div>
@stop

@section('scripts')
    <script src="/js/lunaradio.min.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $("#lunaradio").lunaradio({
                token: "{{ config('services.lunaradio.token') }}",
                userinterface: "small",
                backgroundcolor: "rgba(243,227,185,1)",
                fontcolor: "#1a3a4f",
                hightlightcolor: "#1a3a4f",
                fontname: "ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,",
                googlefont: "",
                fontratio: "0.4",
                radioname: "Adventssingen 2020",
                scroll: "false",
                coverimage: "/icons/android-icon-192x192.png",
                onlycoverimage: "true",
                coverstyle: "circle",
                usevisualizer: "fake",
                visualizertype: "0",
                multicolorvisualizer: "false",
                color1: "#e66c35",
                color2: "#d04345",
                color3: "#85a752",
                color4: "#067dcc",
                visualizeropacity: "0.4",
                itunestoken: "",
                metadatatechnic: "fallback",
                ownmetadataurl: "",
                streamurl: "https://uk3.internet-radio.com/proxy/mbgng?mp=",
                streamtype: "shoutcast2",
                icecastmountpoint: "/live",
                radionomyid: "",
                radionomyapikey: "",
                radiojarid: "",
                radiocoid: "sdef46f462",
                shoutcastpath: "/live",
                shoutcastid: "1",
                streamsuffix: "",
                metadatainterval: "20000",
                volume: "100",
                debug: "false",
                autoplay: "false",
                displayliveicon: "true",
                displayvisualizericon: "false",
                usestreamcorsproxy: "false",
                corsproxy: "",
            });
        });
    </script>
@endsection
