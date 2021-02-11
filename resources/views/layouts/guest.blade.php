<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <style>
            .bg-pattern {
                background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='304' height='304'%3E%3Cpath fill='%23a0aec0' fill-opacity='.1' d='M44.1 224a5 5 0 110 2H0v-2h44.1zm160 48a5 5 0 110 2H82v-2h122.1zm57.8-46a5 5 0 110-2H304v2h-42.1zm0 16a5 5 0 110-2H304v2h-42.1zm6.2-114a5 5 0 110 2h-86.2a5 5 0 110-2h86.2zm-256-48a5 5 0 110 2H0v-2h12.1zm185.8 34a5 5 0 110-2h86.2a5 5 0 110 2h-86.2zM258 12.1a5 5 0 11-2 0V0h2v12.1zm-64 208a5 5 0 11-2 0v-54.2a5 5 0 112 0v54.2zm48-198.2V80h62v2h-64V21.9a5 5 0 112 0zm16 16V64h46v2h-48V37.9a5 5 0 112 0zm-128 96V208h16v12.1a5 5 0 11-2 0V210h-16v-76.1a5 5 0 112 0zm-5.9-21.9a5 5 0 110 2H114v48H85.9a5 5 0 110-2H112v-48h12.1zm-6.2 130a5 5 0 110-2H176v-74.1a5 5 0 112 0V242h-60.1zm-16-64a5 5 0 110-2H114v48h10.1a5 5 0 110 2H112v-48h-10.1zM66 284.1a5 5 0 11-2 0V274H50v30h-2v-32h18v12.1zM236.1 176a5 5 0 110 2H226v94h48v32h-2v-30h-48v-98h12.1zm25.8-30a5 5 0 110-2H274v44.1a5 5 0 11-2 0V146h-10.1zm-64 96a5 5 0 110-2H208v-80h16v-14h-42.1a5 5 0 110-2H226v18h-16v80h-12.1zm86.2-210a5 5 0 110 2H272V0h2v32h10.1zM98 101.9V146H53.9a5 5 0 110-2H96v-42.1a5 5 0 112 0zM53.9 34a5 5 0 110-2H80V0h2v34H53.9zm60.1 3.9V66H82v64H69.9a5 5 0 110-2H80V64h32V37.9a5 5 0 112 0zM101.9 82a5 5 0 110-2H128V37.9a5 5 0 112 0V82h-28.1zm16-64a5 5 0 110-2H146v44.1a5 5 0 11-2 0V18h-26.1zm102.2 270a5 5 0 110 2H98v14h-2v-16h124.1zM242 149.9V160h16v34h-16v62h48v48h-2v-46h-48v-66h16v-30h-16v-12.1a5 5 0 112 0zM53.9 18a5 5 0 110-2H64V2H48V0h18v18H53.9zm112 32a5 5 0 110-2H192V0h50v2h-48v48h-28.1zm-48-48a5 5 0 01-9.8-2h2.07a3 3 0 105.66 0H178v34h-18V21.9a5 5 0 112 0V32h14V2h-58.1zm0 96a5 5 0 110-2H137l32-32h39V21.9a5 5 0 112 0V66h-40.17l-32 32H117.9zm28.1 90.1a5 5 0 11-2 0v-76.51L175.59 80H224V21.9a5 5 0 112 0V82h-49.59L146 112.41v75.69zm16 32a5 5 0 11-2 0v-99.51L184.59 96H300.1a5 5 0 013.9-3.9v2.07a3 3 0 000 5.66v2.07a5 5 0 01-3.9-3.9H185.41L162 121.41v98.69zm-144-64a5 5 0 11-2 0v-3.51l48-48V48h32V0h2v50H66v55.41l-48 48v2.69zM50 53.9v43.51l-48 48V208h26.1a5 5 0 110 2H0v-65.41l48-48V53.9a5 5 0 112 0zm-16 16v19.51l-34 34v-2.82l32-32V69.9a5 5 0 112 0zM12.1 32a5 5 0 110 2H9.41L0 43.41V40.6L8.59 32h3.51zm265.8 18a5 5 0 110-2h18.69l7.41-7.41v2.82L297.41 50H277.9zm-16 160a5 5 0 110-2H288v-71.41l16-16v2.82l-14 14V210h-28.1zm-208 32a5 5 0 110-2H64v-22.59L40.59 194H21.9a5 5 0 110-2h19.51L66 216.59V242H53.9zm150.2 14a5 5 0 110 2H96v-56.6L56.6 162H37.9a5 5 0 110-2h19.5L98 200.6V256h106.1zm-150.2 2a5 5 0 110-2H80v-46.59L48.59 178H21.9a5 5 0 110-2h27.51L82 208.59V258H53.9zM34 39.8v1.61L9.41 66H0v-2h8.59L32 40.59V0h2v39.8zM2 300.1a5 5 0 013.9 3.9H3.83A3 3 0 000 302.17V256h18v48h-2v-46H2v42.1zM34 241v63h-2v-62H0v-2h34v1zM17 18H0v-2h16V0h2v18h-1zm273-2h14v2h-16V0h2v16zm-32 273v15h-2v-14h-14v14h-2v-16h18v1zM0 92.1A5.02 5.02 0 016 97a5 5 0 01-6 4.9v-2.07a3 3 0 100-5.66V92.1zM80 272h2v32h-2v-32zm37.9 32h-2.07a3 3 0 00-5.66 0h-2.07a5 5 0 019.8 0zM5.9 0A5.02 5.02 0 010 5.9V3.83A3 3 0 003.83 0H5.9zm294.2 0h2.07A3 3 0 00304 3.83V5.9a5 5 0 01-3.9-5.9zm3.9 300.1v2.07a3 3 0 00-1.83 1.83h-2.07a5 5 0 013.9-3.9zM97 100a3 3 0 100-6 3 3 0 000 6zm0-16a3 3 0 100-6 3 3 0 000 6zm16 16a3 3 0 100-6 3 3 0 000 6zm16 16a3 3 0 100-6 3 3 0 000 6zm0 16a3 3 0 100-6 3 3 0 000 6zm-48 32a3 3 0 100-6 3 3 0 000 6zm16 16a3 3 0 100-6 3 3 0 000 6zm32 48a3 3 0 100-6 3 3 0 000 6zm-16 16a3 3 0 100-6 3 3 0 000 6zm32-16a3 3 0 100-6 3 3 0 000 6zm0-32a3 3 0 100-6 3 3 0 000 6zm16 32a3 3 0 100-6 3 3 0 000 6zm32 16a3 3 0 100-6 3 3 0 000 6zm0-16a3 3 0 100-6 3 3 0 000 6zm-16-64a3 3 0 100-6 3 3 0 000 6zm16 0a3 3 0 100-6 3 3 0 000 6zm16 96a3 3 0 100-6 3 3 0 000 6zm0 16a3 3 0 100-6 3 3 0 000 6zm16 16a3 3 0 100-6 3 3 0 000 6zm16-144a3 3 0 100-6 3 3 0 000 6zm0 32a3 3 0 100-6 3 3 0 000 6zm16-32a3 3 0 100-6 3 3 0 000 6zm16-16a3 3 0 100-6 3 3 0 000 6zm-96 0a3 3 0 100-6 3 3 0 000 6zm0 16a3 3 0 100-6 3 3 0 000 6zm16-32a3 3 0 100-6 3 3 0 000 6zm96 0a3 3 0 100-6 3 3 0 000 6zm-16-64a3 3 0 100-6 3 3 0 000 6zm16-16a3 3 0 100-6 3 3 0 000 6zm-32 0a3 3 0 100-6 3 3 0 000 6zm0-16a3 3 0 100-6 3 3 0 000 6zm-16 0a3 3 0 100-6 3 3 0 000 6zm-16 0a3 3 0 100-6 3 3 0 000 6zm-16 0a3 3 0 100-6 3 3 0 000 6zM49 36a3 3 0 100-6 3 3 0 000 6zm-32 0a3 3 0 100-6 3 3 0 000 6zm32 16a3 3 0 100-6 3 3 0 000 6zM33 68a3 3 0 100-6 3 3 0 000 6zm16-48a3 3 0 100-6 3 3 0 000 6zm0 240a3 3 0 100-6 3 3 0 000 6zm16 32a3 3 0 100-6 3 3 0 000 6zm-16-64a3 3 0 100-6 3 3 0 000 6zm0 16a3 3 0 100-6 3 3 0 000 6zm-16-32a3 3 0 100-6 3 3 0 000 6zm80-176a3 3 0 100-6 3 3 0 000 6zm16 0a3 3 0 100-6 3 3 0 000 6zm-16-16a3 3 0 100-6 3 3 0 000 6zm32 48a3 3 0 100-6 3 3 0 000 6zm16-16a3 3 0 100-6 3 3 0 000 6zm0-32a3 3 0 100-6 3 3 0 000 6zm112 176a3 3 0 100-6 3 3 0 000 6zm-16 16a3 3 0 100-6 3 3 0 000 6zm0 16a3 3 0 100-6 3 3 0 000 6zm0 16a3 3 0 100-6 3 3 0 000 6zM17 180a3 3 0 100-6 3 3 0 000 6zm0 16a3 3 0 100-6 3 3 0 000 6zm0-32a3 3 0 100-6 3 3 0 000 6zm16 0a3 3 0 100-6 3 3 0 000 6zM17 84a3 3 0 100-6 3 3 0 000 6zm32 64a3 3 0 100-6 3 3 0 000 6zm16-16a3 3 0 100-6 3 3 0 000 6z'/%3E%3C/svg%3E");
            }
            .inter {
                font-family: Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color emoji
            }
            .progress {
                background: linear-gradient(to right, #F9EC31 var(--scroll), transparent 0);
                background-repeat: no-repeat;
                position: fixed;
                width: 100%;
                height: 4px;
                z-index: 1;
            }
        </style>
    </head>
    <body class="antialiased">
    <div class="bg-gray-100 overflow-x-hidden">
        <header class="fixed top-0 right-0 left-0 mb-1 z-10">
            <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                <div class="flex flex-col container mx-auto px-5 md:px-0 md:flex-row md:items-center md:justify-between">
                    <div class="flex justify-between h-16 w-full">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="flex-shrink-0 flex items-center">
                                <a href="{{ route('dashboard') }}">
                                    <x-jet-application-mark class="block h-9 w-auto" />
                                </a>
                            </div>
                        </div>

                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <a class="inter block px-4 py-2 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" href="" active="request()->urlIs('')">
                                {{ __('Link One') }}
                            </a>

                            <a class="inter block px-4 py-2 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" href="" active="request()->urlIs('')">
                                {{ __('Link Two') }}
                            </a>
                        </div>

                        <!-- Hamburger -->
                        <div class="-mr-2 flex items-center sm:hidden">
                            <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-200">
                        <a class="inter block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out" href="" active="request()->urlIs('')">
                            {{ __('Link One') }}
                        </a>
                        <a class="inter block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out" href="" active="request()->urlIs('')">
                            {{ __('Link Two') }}
                        </a>
                    </div>
                </div>
            </nav>
            <div id="progress" class="h-1 z-20 top-0" style="background:linear-gradient(to right, #4dc0b5 var(--scroll), transparent 0);"></div>
        </header>
        <main class="pt-14">
            {{ $slot }}
        </main>
    </div>
    <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script>
            var h = document.documentElement,
                b = document.body,
                st = 'scrollTop',
                sh = 'scrollHeight',
                progress = document.getElementById('progress'),
                scroll;

            document.addEventListener('scroll', function() {
                scroll = (h[st]||b[st]) / ((h[sh]||b[sh]) - h.clientHeight) * 100;
                progress.style.setProperty('--scroll', scroll + '%');
            });
        </script>
    </body>
</html>
