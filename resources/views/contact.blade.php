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
            <a href="#" class="flex items-center gap-2 text-white font-display font-bold text-lg">
                AgriDrone
            </a>
            <button id="menuBtn" class="lg:hidden text-white">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M4 6h16M4 12h16M4 18h16" stroke-linecap="round" />
                </svg>
            </button>
            <ul class="hidden lg:flex items-center gap-7 text-sm font-medium text-white">
                <li><a href="#" class="hover:text-lime-400 transition">Accueil</a></li>
                <li><a href="#" class="hover:text-lime-400 transition">À propos</a></li>
                <li><a href="#" class="hover:text-lime-400 transition">Services</a></li>
                <li><a href="#" class="hover:text-lime-400 transition">Projets</a></li>
                <li><a href="#" class="hover:text-lime-400 transition">Flotte</a></li>
                <li><a href="#" class="hover:text-lime-400 transition">Galerie</a></li>
                <li><a href="#" class="hover:text-lime-400 transition">FAQ</a></li>
                <li><a href="#" class="text-lime-400">Contact</a></li>
            </ul>
        </nav>
        <ul id="mobileMenu"
            class="hidden lg:hidden flex-col gap-1 bg-forest-800 mx-4 mb-4 rounded-xl px-6 py-4 text-white font-medium">
            <li><a href="#" class="block py-2 border-b border-white/10">Accueil</a></li>
            <li><a href="#" class="block py-2 border-b border-white/10">À propos</a></li>
            <li><a href="#" class="block py-2 border-b border-white/10">Services</a></li>
            <li><a href="#" class="block py-2 border-b border-white/10">Flotte</a></li>
            <li><a href="#" class="block py-2 border-b border-white/10">Processus</a></li>
            <li><a href="#" class="block py-2">Contact</a></li>
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
                <span
                    class="w-11 h-11 rounded-full bg-forest-800/5 flex items-center justify-center text-lg mb-3">📞</span>
                <p class="text-xs uppercase tracking-wide text-forest-700/60 font-semibold mb-1">Téléphone</p>
                <p class="font-display font-semibold">+212 5 36 12 34 56</p>
            </div>
            <div class="bg-white rounded-2xl p-6 shadow-lg shadow-forest-900/5">
                <span
                    class="w-11 h-11 rounded-full bg-forest-800/5 flex items-center justify-center text-lg mb-3">✉️</span>
                <p class="text-xs uppercase tracking-wide text-forest-700/60 font-semibold mb-1">Email</p>
                <p class="font-display font-semibold">contact@agridrone.ma</p>
            </div>
            <div class="bg-white rounded-2xl p-6 shadow-lg shadow-forest-900/5">
                <span
                    class="w-11 h-11 rounded-full bg-forest-800/5 flex items-center justify-center text-lg mb-3">📍</span>
                <p class="text-xs uppercase tracking-wide text-forest-700/60 font-semibold mb-1">Base opérationnelle</p>
                <p class="font-display font-semibold">Zone agricole de la Vallée, Nador</p>
            </div>
        </div>
    </section>

    <!-- ============ MISSION TICKET FORM ============ -->
    <section class="max-w-7xl mx-auto px-6 py-20">
        <div class="ticket grid md:grid-cols-[1.3fr_1fr] overflow-hidden">

            <!-- form side -->
            <form class="p-8 md:p-10">
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <p class="text-xs uppercase tracking-widest text-lime-500 font-semibold">Fiche de mission</p>
                        <h2 class="font-display font-bold text-2xl text-forest-900">Décrivez votre parcelle</h2>
                    </div>
                    <span
                        class="hidden sm:block stamp border-2 border-forest-800/20 text-forest-800/40 text-[10px] font-bold uppercase tracking-widest rounded-full px-3 py-1">
                        À traiter
                    </span>
                </div>

                <div class="grid sm:grid-cols-2 gap-x-6 gap-y-6">
                    <div>
                        <label class="block text-xs font-semibold text-forest-700/60 uppercase tracking-wide mb-2">Nom
                            complet</label>
                        <input type="text" placeholder="Votre nom"
                            class="field w-full py-2 text-forest-900 placeholder:text-forest-900/30">
                    </div>
                    <div>
                        <label
                            class="block text-xs font-semibold text-forest-700/60 uppercase tracking-wide mb-2">Exploitation
                            agricole</label>
                        <input type="text" placeholder="Nom de la ferme"
                            class="field w-full py-2 text-forest-900 placeholder:text-forest-900/30">
                    </div>
                    <div>
                        <label
                            class="block text-xs font-semibold text-forest-700/60 uppercase tracking-wide mb-2">Téléphone</label>
                        <input type="tel" placeholder="+212 6 00 00 00 00"
                            class="field w-full py-2 text-forest-900 placeholder:text-forest-900/30">
                    </div>
                    <div>
                        <label
                            class="block text-xs font-semibold text-forest-700/60 uppercase tracking-wide mb-2">Superficie
                            (ha)</label>
                        <input type="number" placeholder="Ex. 25"
                            class="field w-full py-2 text-forest-900 placeholder:text-forest-900/30">
                    </div>
                    <div class="sm:col-span-2">
                        <label
                            class="block text-xs font-semibold text-forest-700/60 uppercase tracking-wide mb-2">Service
                            souhaité</label>
                        <select class="field w-full py-2 text-forest-900 bg-transparent">
                            <option>Pulvérisation de précision</option>
                            <option>Cartographie et imagerie aérienne</option>
                            <option>Épandage de semences</option>
                            <option>Diagnostic de culture</option>
                            <option>Autre demande</option>
                        </select>
                    </div>
                    <div class="sm:col-span-2">
                        <label
                            class="block text-xs font-semibold text-forest-700/60 uppercase tracking-wide mb-2">Détails
                            de la mission</label>
                        <textarea rows="3"
                            placeholder="Type de culture, période souhaitée, contraintes particulières..."
                            class="field w-full py-2 text-forest-900 placeholder:text-forest-900/30 resize-none"></textarea>
                    </div>
                </div>

                <button type="submit"
                    class="mt-8 inline-flex items-center gap-2 bg-forest-800 hover:bg-forest-700 transition text-white pl-6 pr-5 py-4 rounded-full font-semibold">
                    Envoyer la demande
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                        <path d="M5 12h14M13 6l6 6-6 6" stroke="white" stroke-width="2" stroke-linecap="round"></path>
                    </svg>
                </button>
            </form>

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
                src="https://www.openstreetmap.org/export/embed.html?bbox=-2.98%2C35.14%2C-2.90%2C35.20&layer=mapnik&marker=35.1688%2C-2.9330"
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
