@extends('layouts.app')

@section('body')

    <body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <nav id="header" class="fixed w-full z-10 top-0">
        <div
                id="progress"
                class="h-1 z-20 top-0"
                style="
          background: linear-gradient(
            to right,
            #4dc0b5 var(--scroll),
            transparent 0
          );
        "
        ></div>

        <div
                class="w-full md:max-w-4xl mx-auto flex flex-wrap items-center justify-between mt-0 py-3"
        >
            <div class="pl-4">
                <a
                        class="text-gray-900 text-base no-underline hover:no-underline font-extrabold text-xl"
                        href="#"
                >
                    Mennoniten Brüdergemeinde Neuwied-Gladbach
                </a>
            </div>

            <div class="block lg:hidden pr-4">
                <button
                        id="nav-toggle"
                        class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-teal-500 appearance-none focus:outline-none"
                >
                    <svg
                            class="fill-current h-3 w-3"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                    >
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                    </svg>
                </button>
            </div>

            <div
                    id="nav-content"
                    class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-gray-100 md:bg-transparent z-20"
            >
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <li class="mr-3">
                        <a
                                class="inline-block py-2 px-4 text-gray-900 font-bold no-underline"
                                href="{{ route('booking.index') }}"
                        > Adventssingen
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Container-->
    <div class="container w-full md:max-w-4xl mx-auto pt-20">
        <div
                class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal"
                style="font-family: Georgia, serif">
            <!--Title-->
            <div class="font-sans">
                <h1 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2 text-3xl md:text-4xl">
                    Impressum
                </h1>
                <h2 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2 text-2xl md:text-3xl">
                    Angaben gemäß § 5 TMG
                </h2>

                <p class="py-6">Mennoniten-Br&uuml;dergemeinde Neuwied-Gladbach e.V.<br/>
                    Pablo-Picasso-Stra&szlig;e 5<br/>
                    56566 Neuwied</p>

                <p><strong>Vertreten durch:</strong><br/>
                    Jakob Thiessen</p>


                <h2
                        class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2 text-2xl md:text-3xl"
                >
                    Kontakt
                </h2>

                <p>Telefon: 02631 46706<br/>
                    E-Mail: kontakt@mbg-gladbach.de</p>
                <h2
                        class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2 text-2xl md:text-3xl"
                >
                    EU-Streitschlichtung
                </h2>

                <p>Die Europ&auml;ische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit: <a
                            href="https://ec.europa.eu/consumers/odr" target="_blank" rel="noopener noreferrer">https://ec.europa.eu/consumers/odr</a>.<br/>
                    Unsere E-Mail-Adresse finden Sie oben im Impressum.</p>
                <h2>Verbraucher&shy;streit&shy;beilegung/Universal&shy;schlichtungs&shy;stelle</h2>
                <p>Wir sind nicht bereit oder verpflichtet, an Streitbeilegungsverfahren vor einer
                    Verbraucherschlichtungsstelle teilzunehmen.</p>

                <h3>Haftung f&uuml;r Inhalte</h3>
                <p>Als Diensteanbieter sind wir gem&auml;&szlig; &sect; 7 Abs.1 TMG f&uuml;r eigene Inhalte auf diesen
                    Seiten nach den allgemeinen Gesetzen verantwortlich. Nach &sect;&sect; 8 bis 10 TMG sind wir als
                    Diensteanbieter jedoch nicht verpflichtet, &uuml;bermittelte oder gespeicherte fremde Informationen
                    zu &uuml;berwachen oder nach Umst&auml;nden zu forschen, die auf eine rechtswidrige T&auml;tigkeit
                    hinweisen.</p>
                <p>Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen
                    Gesetzen bleiben hiervon unber&uuml;hrt. Eine diesbez&uuml;gliche Haftung ist jedoch erst ab dem
                    Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung m&ouml;glich. Bei Bekanntwerden von
                    entsprechenden Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.</p>
                <h3>Haftung f&uuml;r Links</h3>
                <p>Unser Angebot enth&auml;lt Links zu externen Websites Dritter, auf deren Inhalte wir keinen Einfluss
                    haben. Deshalb k&ouml;nnen wir f&uuml;r diese fremden Inhalte auch keine Gew&auml;hr &uuml;bernehmen.
                    F&uuml;r die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der
                    Seiten verantwortlich. Die verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf m&ouml;gliche
                    Rechtsverst&ouml;&szlig;e &uuml;berpr&uuml;ft.
            </div>
            <!--/Next & Prev Links-->
        </div>
        <!--/container-->

        <footer class="mt-5">

        </footer>

        <script>
            /* Progress bar */
            // Source: https://alligator.io/js/progress-bar-javascript-css-variables/
            var h = document.documentElement,
                b = document.body,
                st = 'scrollTop',
                sh = 'scrollHeight',
                progress = document.querySelector('#progress'),
                scroll;
            var scrollpos = window.scrollY;
            var header = document.getElementById('header');
            var navcontent = document.getElementById('nav-content');

            document.addEventListener('scroll', function () {
                /* Refresh scroll % width */
                scroll = ((h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight)) * 100;
                progress.style.setProperty('--scroll', scroll + '%');

                /* Apply classes for slide in bar */
                scrollpos = window.scrollY;

                if (scrollpos > 10) {
                    header.classList.add('bg-white');
                    header.classList.add('shadow');
                    navcontent.classList.remove('bg-gray-100');
                    navcontent.classList.add('bg-white');
                } else {
                    header.classList.remove('bg-white');
                    header.classList.remove('shadow');
                    navcontent.classList.remove('bg-white');
                    navcontent.classList.add('bg-gray-100');
                }
            });

            // Javascript to toggle the menu
            document.getElementById('nav-toggle').onclick = function () {
                document.getElementById('nav-content').classList.toggle('hidden');
            };
        </script>
    </body>
@endsection