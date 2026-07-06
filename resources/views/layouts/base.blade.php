<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'AgriDrone Atlas | Agricultural Drone Solutions') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        forest: {
                            50: '#eef6ee',
                            100: '#d3e8d2',
                            600: '#1f5c3d',
                            700: '#1a4a32',
                            800: '#153c28',
                            900: '#0c1f15',
                        },
                        lime: {
                            400: '#8fc93a',
                            500: '#7bb62b',
                            600: '#679d20',
                        }
                    },
                    fontFamily: {
                        sans: ['Poppins', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .dot-grid {
            background-image: radial-gradient(circle, #cbd5c9 1.5px, transparent 1.5px);
            background-size: 10px 10px;
        }

        .dotted-line {
            background-image: linear-gradient(to right, #1f5c3d 0 6px, transparent 6px 14px);
            background-size: 14px 2px;
            background-repeat: repeat-x;
        }
    </style>
</head>

<body class="bg-white text-slate-800 antialiased">

    <header class="fixed top-5 left-0 right-0 z-50">
        <nav id="navbar" class="mx-auto max-w-7xl transition-all duration-500 rounded-2xl border border-white/10
            bg-emerald-950/60 backdrop-blur-xl px-6">

            <div class="flex items-center justify-between h-20">

                <!-- Logo -->
                <a href="/" class="group">
                    <img src="/imgs/logo-transparent.png"
                        class="w-28 transition duration-500 group-hover:scale-105 group-hover:-rotate-2" alt="">
                </a>

                <!-- Desktop Menu -->
                <ul class="hidden lg:flex items-center gap-8">

                    <li>
                        <a href="/"
                            class="relative text-white font-medium after:absolute after:left-0 after:-bottom-2 after:h-[2px] after:w-0 after:bg-lime-400 after:transition-all hover:text-lime-400 hover:after:w-full">
                            Accueil
                        </a>
                    </li>

                    <li>
                        <a href="/about"
                            class="relative text-white font-medium after:absolute after:left-0 after:-bottom-2 after:h-[2px] after:w-0 after:bg-lime-400 after:transition-all hover:text-lime-400 hover:after:w-full">
                            À propos
                        </a>
                    </li>

                    <li>
                        <a href="/#services"
                            class="relative text-white font-medium after:absolute after:left-0 after:-bottom-2 after:h-[2px] after:w-0 after:bg-lime-400 after:transition-all hover:text-lime-400 hover:after:w-full">
                            Services
                        </a>
                    </li>

                    <li>
                        <a href="/contact"
                            class="relative text-white font-medium after:absolute after:left-0 after:-bottom-2 after:h-[2px] after:w-0 after:bg-lime-400 after:transition-all hover:text-lime-400 hover:after:w-full">
                            Contactez-nous
                        </a>
                    </li>

                    <li>
                        <a href="/#faq"
                            class="relative text-white font-medium after:absolute after:left-0 after:-bottom-2 after:h-[2px] after:w-0 after:bg-lime-400 after:transition-all hover:text-lime-400 hover:after:w-full">
                            FAQ
                        </a>
                    </li>

                </ul>

                <!-- Right -->
                <div class="flex items-center gap-4">

                    <a href="/#demande"
                        class="hidden lg:flex items-center rounded-full bg-lime-400 px-6 py-3 font-semibold text-emerald-950 transition duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-lime-500/30">
                        Demander un devis
                    </a>

                    <!-- Mobile -->
                    <button id="menuBtn"
                        class="lg:hidden rounded-xl border border-white/10 bg-white/5 p-3 text-white transition hover:bg-white/10">

                        <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">

                            <path stroke-linecap="round" d="M4 6h16M4 12h16M4 18h16" />

                        </svg>

                    </button>

                </div>

            </div>

            <!-- Mobile Menu -->
            <div id="mobileMenu" class="grid overflow-hidden transition-all duration-500 ease-in-out grid-rows-[0fr]">

                <div class="overflow-hidden">

                    <div class="flex flex-col gap-2 py-5 border-t border-white/10">

                        <a href="#home" class="rounded-lg px-4 py-3 text-white transition hover:bg-white/10">
                            Accueil
                        </a>

                        <a href="#about" class="rounded-lg px-4 py-3 text-white transition hover:bg-white/10">
                            À propos
                        </a>

                        <a href="#services" class="rounded-lg px-4 py-3 text-white transition hover:bg-white/10">
                            Services
                        </a>

                        <a href="#projects" class="rounded-lg px-4 py-3 text-white transition hover:bg-white/10">
                            Projets
                        </a>

                        <a href="#fleet" class="rounded-lg px-4 py-3 text-white transition hover:bg-white/10">
                            Flotte
                        </a>

                        <a href="#gallery" class="rounded-lg px-4 py-3 text-white transition hover:bg-white/10">
                            Galerie
                        </a>

                        <a href="#faq" class="rounded-lg px-4 py-3 text-white transition hover:bg-white/10">
                            FAQ
                        </a>

                        <a href="#contact"
                            class="mt-3 rounded-full bg-lime-400 py-3 text-center font-semibold text-emerald-950">
                            Demander un devis
                        </a>

                    </div>

                </div>

            </div>

        </nav>
    </header>
    @yield('content')

    <x-footer />

    <script>
        document.getElementById('menuBtn').addEventListener('click', () => {
            document.getElementById('mobileMenu').classList.toggle('hidden');
            document.getElementById('mobileMenu').classList.toggle('flex');
        });
    </script>

    @livewireScripts
</body>

</html>
