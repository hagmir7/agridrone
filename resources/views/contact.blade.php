<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact — AgriDrone</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600&display=swap"
        rel="stylesheet">
    <script>
        tailwind.config = {
    theme: {
      extend: {
        colors: {
          forest: { 900: '#0d2418', 800: '#123524', 700: '#1b4a32', 600: '#28603f' },
          lime: { 400: '#a3e635', 500: '#84cc16' },
          cream: { 50: '#f7f5ee' }
        },
        fontFamily: {
          display: ['"Space Grotesk"', 'sans-serif'],
          body: ['Inter', 'sans-serif']
        }
      }
    }
  }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3,
        .font-display {
            font-family: 'Space Grotesk', sans-serif;
        }

        /* Ticket / mission-sheet signature: perforated notches + dashed tear line */
        .ticket {
            position: relative;
            background: #fff;
            border-radius: 22px;
            box-shadow: 0 20px 45px -20px rgba(18, 53, 36, 0.35);
        }

        .ticket::before,
        .ticket::after {
            content: "";
            position: absolute;
            width: 34px;
            height: 34px;
            background: #f7f5ee;
            border-radius: 999px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 2;
        }

        .ticket::before {
            left: -17px;
        }

        .ticket::after {
            right: -17px;
        }

        @media (max-width: 900px) {

            .ticket::before,
            .ticket::after {
                display: none;
            }
        }

        .tear-line {
            border-left: 2px dashed rgba(18, 53, 36, 0.2);
        }

        @media (max-width: 900px) {
            .tear-line {
                border-left: none;
                border-top: 2px dashed rgba(18, 53, 36, 0.2);
            }
        }

        .field {
            border-bottom: 1.5px solid rgba(18, 53, 36, 0.18);
            background: transparent;
        }

        .field:focus {
            outline: none;
            border-color: #84cc16;
        }

        .stamp {
            transform: rotate(-8deg);
        }
    </style>
</head>

<body class="bg-cream-50 text-forest-900">

    <!-- ============ NAV ============ -->
    <header class="bg-forest-800 sticky top-0 z-30">
        <nav class="max-w-7xl mx-auto flex items-center justify-between px-6 py-5">
            <a href="/" class="flex items-center gap-2 text-white font-display font-bold text-lg">
                AgriDrone
            </a>
            <button id="menuBtn" class="lg:hidden text-white">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M4 6h16M4 12h16M4 18h16" stroke-linecap="round" />
                </svg>
            </button>
            <ul class="hidden lg:flex items-center gap-7 text-sm font-medium text-white">
                <li><a href="/" class="hover:text-lime-400 transition">Accueil</a></li>
                <li><a href="/about" class="hover:text-lime-400 transition">À propos</a></li>
                <li><a href="/#services" class="hover:text-lime-400 transition">Services</a></li>
                <li><a href="/#faq" class="hover:text-lime-400 transition">FAQ</a></li>
                <li><a href="/contact" class="text-lime-400">Contact</a></li>
            </ul>
        </nav>
        <ul id="mobileMenu"
            class="hidden lg:hidden flex-col gap-1 bg-forest-800 mx-4 mb-4 rounded-xl px-6 py-4 text-white font-medium">
            <li><a href="/" class="block py-2 border-b border-white/10">Accueil</a></li>
            <li><a href="/about" class="block py-2 border-b border-white/10">À propos</a></li>
            <li><a href="/#services" class="block py-2 border-b border-white/10">Services</a></li>
            <li><a href="/contact" class="block py-2">Contact</a></li>
        </ul>
    </header>

    <!-- ============ PAGE HEADER ============ -->
    <section class="bg-forest-800 pb-20 pt-4">
        <div class="max-w-7xl mx-auto px-6">
            <div
                class="inline-flex items-center gap-2 bg-white/10 border border-white/15 text-lime-400 px-4 py-2 rounded-full text-sm font-semibold mb-5">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none">
                    <path d="M4 4l16 8-16 8 4-8-4-8z" stroke="#a3e635" stroke-width="1.8" stroke-linejoin="round">
                    </path>
                </svg>
                Planification de mission
            </div>
            <h1 class="font-display font-bold text-white text-3xl sm:text-4xl md:text-5xl leading-tight max-w-2xl">
                Parlons de votre prochaine mission
            </h1>
            <p class="mt-4 text-white/70 max-w-lg">
                Décrivez votre exploitation et vos besoins : notre équipe revient vers vous sous 24 h avec un plan de
                vol adapté.
            </p>
        </div>
    </section>

    <!-- ============ CONTACT INFO STRIP ============ -->
    <section class="max-w-7xl mx-auto px-6 -mt-12 relative z-10">
        <div class="grid sm:grid-cols-3 gap-4">
            <div class="bg-white rounded-2xl p-6 shadow-lg shadow-forest-900/5">
                <span class="w-11 h-11 rounded-full bg-forest-800/5 flex items-center justify-center text-lg mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                    </svg>
                </span>
                <p class="text-xs uppercase tracking-wide text-forest-700/60 font-semibold mb-1">Téléphone</p>
                <p class="font-display font-semibold">+212 624 366 981</p>
            </div>
            <div class="bg-white rounded-2xl p-6 shadow-lg shadow-forest-900/5">
                <span class="w-11 h-11 rounded-full bg-forest-800/5 flex items-center justify-center text-lg mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-mail">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                        <path d="M3 7l9 6l9 -6" />
                    </svg>
                </span>
                <p class="text-xs uppercase tracking-wide text-forest-700/60 font-semibold mb-1">Email</p>
                <p class="font-display font-semibold">agridroneatlas@gmail.com</p>
            </div>
            <div class="bg-white rounded-2xl p-6 shadow-lg shadow-forest-900/5">
                <span class="w-11 h-11 rounded-full bg-forest-800/5 flex items-center justify-center text-lg mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-map-pin">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                        <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0" />
                    </svg>
                </span>
                <p class="text-xs uppercase tracking-wide text-forest-700/60 font-semibold mb-1">Base opérationnelle</p>
                <p class="font-display font-semibold">Doir Ait frigou guigou</p>
            </div>
        </div>
    </section>

    <!-- ============ MISSION TICKET FORM ============ -->
    <section class="max-w-7xl mx-auto px-6 py-20">
        <div class="ticket grid md:grid-cols-[1.3fr_1fr] overflow-hidden">
           @livewire('contact-form')
            <!-- summary / stub side -->
            <div class="tear-line bg-forest-800 text-white p-8 md:p-10 flex flex-col justify-between">
                <div>
                    <p class="text-xs uppercase tracking-widest text-lime-400 font-semibold mb-4">Ce qui se passe
                        ensuite</p>
                    <ol class="space-y-5">
                        <li class="flex gap-3">
                            <span
                                class="w-6 h-6 rounded-full bg-lime-400 text-forest-900 text-xs font-bold flex items-center justify-center shrink-0">1</span>
                            <p class="text-sm text-white/80">Un pilote certifié étudie votre parcelle et vos objectifs.
                            </p>
                        </li>
                        <li class="flex gap-3">
                            <span
                                class="w-6 h-6 rounded-full bg-lime-400 text-forest-900 text-xs font-bold flex items-center justify-center shrink-0">2</span>
                            <p class="text-sm text-white/80">Vous recevez un plan de vol et un devis sous 24 h.</p>
                        </li>
                        <li class="flex gap-3">
                            <span
                                class="w-6 h-6 rounded-full bg-lime-400 text-forest-900 text-xs font-bold flex items-center justify-center shrink-0">3</span>
                            <p class="text-sm text-white/80">La mission est programmée selon la météo et votre
                                calendrier.</p>
                        </li>
                    </ol>
                </div>

                <div class="mt-10 pt-6 border-t border-white/15">
                    <p class="text-xs uppercase tracking-widest text-white/50 font-semibold mb-2">Horaires</p>
                    <p class="text-sm text-white/80">Lun – Ven : 8h00 – 18h00</p>
                    <p class="text-sm text-white/80">Sam : 9h00 – 13h00</p>
                    <p class="text-sm text-white/60 mt-3">Assistance d'urgence 24/7 pour missions en cours.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ MAP ============ -->
    <section class="max-w-7xl mx-auto px-6 pb-20">
        <div class="rounded-2xl overflow-hidden h-80 border border-forest-900/10">
            <iframe class="w-full h-full grayscale-[15%]"
                src="https://www.openstreetmap.org/export/embed.html?bbox=-5.47393798828125%2C33.00866349457558%2C-4.188537597656251%2C33.742612777346885&amp;layer=mapnik&amp;marker=33.37641235124679%2C-4.83123779296875"
                style="border:0;">
            </iframe>
        </div>
    </section>

    <script>
        document.getElementById('menuBtn').addEventListener('click', () => {
    document.getElementById('mobileMenu').classList.toggle('hidden');
    document.getElementById('mobileMenu').classList.toggle('flex');
  });
    </script>
</body>

</html>
