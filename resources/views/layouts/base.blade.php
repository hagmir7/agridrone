<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary SEO Meta -->
    <title>AgriDrone Atlas | Solutions de Drones Agricoles</title>
    <meta name="description"
        content="AgriDrone Atlas propose des solutions de drones agricoles pour l'épandage, la cartographie et la surveillance des cultures au Maroc. Augmentez vos rendements avec des technologies de précision.">
    <meta name="keywords"
        content="drone agricole, épandage par drone, agriculture de précision, cartographie agricole, drone Maroc, surveillance des cultures, drone pulvérisation, AgriDrone Atlas">
    <meta name="author" content="AgriDrone Atlas">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicon (using logo) -->
    <link rel="icon" type="image/png" href="/imgs/dark-logo.png">
    <link rel="shortcut icon" type="image/png" href="/imgs/dark-logo.png">
    <link rel="apple-touch-icon" href="/imgs/dark-logo.png">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ config('app.name', 'AgriDrone Atlas | Solutions de Drones Agricoles') }}">
    <meta property="og:description"
        content="Solutions de drones agricoles pour l'épandage, la cartographie et la surveillance des cultures au Maroc.">
    <meta property="og:image" content="{{ asset('imgs/dark-logo.png') }}">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:site_name" content="AgriDrone Atlas">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ config('app.name', 'AgriDrone Atlas | Solutions de Drones Agricoles') }}">
    <meta name="twitter:description"
        content="Solutions de drones agricoles pour l'épandage, la cartographie et la surveillance des cultures au Maroc.">
    <meta name="twitter:image" content="{{ asset('imgs/dark-logo.png') }}">

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

    <header x-data="{ open: false }" @keydown.escape.window="open = false" class="fixed top-5 left-0 right-0 z-50">
        <nav
            class="mx-auto max-w-7xl rounded-2xl border border-white/10 bg-emerald-950/60 backdrop-blur-xl px-6 transition-all duration-500">
            <div class="flex h-20 items-center justify-between">

                <!-- Logo -->
                <a href="/" class="group">
                    <img src="/imgs/dark-logo.png"
                        class="w-28 transition duration-500 group-hover:scale-105 group-hover:-rotate-2" alt="">
                </a>

                <!-- Desktop -->
                <ul class="hidden lg:flex items-center gap-8">

                    <li><a href="/" class="text-white hover:text-lime-400">Accueil</a></li>

                    <li><a href="/about" class="text-white hover:text-lime-400">À propos</a></li>

                    <li><a href="/#services" class="text-white hover:text-lime-400">Services</a></li>

                    <li><a href="/contact" class="text-white hover:text-lime-400">Contactez-nous</a></li>

                    <li><a href="/#faq" class="text-white hover:text-lime-400">FAQ</a></li>

                </ul>

                <div class="flex items-center gap-4">

                    <a href="/#demande"
                        class="hidden lg:flex items-center rounded-full bg-lime-400 px-6 py-3 font-semibold text-emerald-950 transition hover:-translate-y-1 hover:shadow-xl hover:shadow-lime-500/30">
                        Demander un devis
                    </a>

                    <!-- Mobile Button -->
                    <button @click="open = !open"
                        class="lg:hidden rounded-xl border border-white/10 bg-white/5 p-3 text-white">

                        <!-- Hamburger -->
                        <svg x-show="!open" x-transition class="h-6 w-6" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>

                        <!-- Close -->
                        <svg x-show="open" x-transition class="h-6 w-6" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24" style="display:none">
                            <path stroke-linecap="round" d="M6 6L18 18M6 18L18 6" />
                        </svg>

                    </button>

                </div>

            </div>

            <!-- Mobile Menu -->
            <div x-show="open" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-4"
                @click.outside="open = false" class="lg:hidden border-t border-white/10 py-5" style="display:none">

                <div class="flex flex-col gap-2">

                    <a @click="open=false" href="/" class="rounded-lg px-4 py-3 text-white hover:bg-white/10">
                        Accueil
                    </a>

                    <a @click="open=false" href="/about" class="rounded-lg px-4 py-3 text-white hover:bg-white/10">
                        À propos
                    </a>

                    <a @click="open=false" href="/#services" class="rounded-lg px-4 py-3 text-white hover:bg-white/10">
                        Services
                    </a>

                    <a @click="open=false" href="/contact" class="rounded-lg px-4 py-3 text-white hover:bg-white/10">
                        Contactez-nous
                    </a>

                    <a @click="open=false" href="/#faq" class="rounded-lg px-4 py-3 text-white hover:bg-white/10">
                        FAQ
                    </a>

                    <a @click="open=false" href="/#demande"
                        class="mt-3 rounded-full bg-lime-400 py-3 text-center font-semibold text-emerald-950">
                        Demander un devis
                    </a>

                </div>

            </div>

        </nav>
    </header>
    @yield('content')

    <x-footer />

    @livewireScripts
</body>

</html>
