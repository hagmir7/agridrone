@extends('layouts.base')

@section('content')
<!-- ============ ABOUT HERO ============ -->
<section class="relative bg-forest-800 text-white py-36 overflow-hidden">
    <div class="absolute -top-24 -right-24 w-96 h-96 rounded-full bg-forest-700/40 blur-3xl"></div>
    <div class="absolute -bottom-24 -left-24 w-96 h-96 rounded-full bg-lime-600/10 blur-3xl"></div>
    <div class="relative max-w-4xl mx-auto px-6 text-center">
        <p class="text-lime-400 font-semibold text-xs tracking-[0.2em] mb-4">À PROPOS DE NOUS</p>
        <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-5">L'agriculture de précision, portée par la
            technologie</h1>
        <p class="text-white/70 text-lg">Depuis nos débuts, AgriDrone Atlas accompagne les agriculteurs marocains
            avec des solutions de drones innovantes, fiables et respectueuses de l'environnement.</p>
    </div>
</section>

<!-- ============ OUR STORY ============ -->
<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">
        <div>
            <p class="text-lime-600 font-semibold text-xs tracking-[0.2em] mb-3">NOTRE HISTOIRE</p>
            <h2 class="text-3xl md:text-4xl font-bold text-forest-800 leading-tight mb-5">Une passion pour
                l'agriculture et l'innovation</h2>
            <p class="text-slate-600 mb-4">AgriDrone Atlas est né d'un constat simple : les méthodes agricoles
                traditionnelles, bien qu'efficaces, consomment beaucoup de temps, d'eau et de ressources. Nous avons
                voulu offrir aux agriculteurs marocains une alternative moderne, précise et durable.</p>
            <p class="text-slate-600">Notre mission reste la même depuis le premier jour : améliorer la
                productivité de nos clients tout en réduisant leur impact environnemental.</p>
        </div>
        <div class="relative">
            <div class="dot-grid absolute -right-4 -top-4 w-24 h-24 hidden md:block"></div>
            <div class="rounded-2xl overflow-hidden shadow-xl aspect-video">
                <img src="/imgs/why-us.png" alt="About us" class="w-full h-full object-cover">
            </div>
        </div>
    </div>
</section>

<!-- ============ MISSION / VISION / VALUES ============ -->
<section class="py-20 bg-forest-50">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-14">
            <p class="text-lime-600 font-semibold text-xs tracking-[0.2em] mb-3">NOTRE ENGAGEMENT</p>
            <h2 class="text-3xl md:text-4xl font-bold text-forest-800">Mission, Vision et Valeurs</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white rounded-2xl p-8 shadow-sm">
                <div class="w-14 h-14 rounded-full bg-lime-500/10 flex items-center justify-center mb-5">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#679d20" stroke-width="1.8">
                        <path d="M4 20c4-8 8-12 16-16M9 12l3 3M13 8l3 3" />
                    </svg>
                </div>
                <h3 class="font-bold text-forest-800 text-lg mb-3">Notre Mission</h3>
                <p class="text-sm text-slate-600 leading-relaxed">Fournir aux agriculteurs des solutions de drones
                    accessibles et performantes, afin d'optimiser leurs rendements tout en réduisant les coûts et
                    l'usage des ressources naturelles.</p>
            </div>
            <div class="bg-white rounded-2xl p-8 shadow-sm">
                <div class="w-14 h-14 rounded-full bg-lime-500/10 flex items-center justify-center mb-5">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#679d20" stroke-width="1.8">
                        <path d="M12 3c3 3 5 6 5 9a5 5 0 0 1-10 0c0-3 2-6 5-9z" />
                    </svg>
                </div>
                <h3 class="font-bold text-forest-800 text-lg mb-3">Notre Vision</h3>
                <p class="text-sm text-slate-600 leading-relaxed">Devenir le partenaire de référence en agriculture
                    de précision au Maroc, en généralisant l'usage des drones comme outil quotidien pour chaque
                    exploitant, petit ou grand.</p>
            </div>
            <div class="bg-white rounded-2xl p-8 shadow-sm">
                <div class="w-14 h-14 rounded-full bg-lime-500/10 flex items-center justify-center mb-5">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#679d20" stroke-width="1.8">
                        <path d="M12 2l3 7h7l-5.5 4.5L18 21l-6-4-6 4 1.5-7.5L2 9h7z" />
                    </svg>
                </div>
                <h3 class="font-bold text-forest-800 text-lg mb-3">Nos Valeurs</h3>
                <p class="text-sm text-slate-600 leading-relaxed">Précision, transparence, respect de
                    l'environnement et proximité avec nos clients guident chacune de nos interventions sur le
                    terrain.</p>
            </div>
        </div>
    </div>
</section>

<!-- ============ CTA ============ -->
<section class="bg-forest-900">
    <div class="max-w-6xl mx-auto px-6 py-16 text-center">
        <h3 class="text-2xl md:text-3xl font-bold text-white mb-4">Prêt à moderniser votre exploitation ?</h3>
        <p class="text-white/70 mb-8 max-w-xl mx-auto">Contactez notre équipe dès aujourd'hui pour planifier votre
            première intervention par drone.</p>
        <a href="/#demande"
            class="inline-flex items-center gap-2 bg-lime-500 hover:bg-lime-600 text-white font-semibold px-6 py-3 rounded-lg transition">
            Demander un devis
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M5 12h14M13 6l6 6-6 6" />
            </svg>
        </a>
    </div>
</section>

<!-- ============ WHY CHOOSE US ============ -->
<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">
        <div class="relative order-2 lg:order-1">
            <div class="dot-grid absolute -left-4 -bottom-4 w-24 h-24 hidden md:block"></div>
            <div class="rounded-2xl overflow-hidden shadow-xl aspect-video">
                <img src="/imgs/why-us.png" alt="WHY CHOOSE US"
                    class="w-full h-full object-cover">
            </div>
        </div>
        <div class="order-1 lg:order-2">
            <p class="text-lime-600 font-semibold text-xs tracking-[0.2em] mb-3">POURQUOI NOUS CHOISIR</p>
            <h2 class="text-3xl md:text-4xl font-bold text-forest-800 leading-tight mb-4">Ce qui nous distingue</h2>
            <ul class="grid sm:grid-cols-2 gap-4">
                @foreach ([
                "Pulvérisation de haute précision",
                "Réduction de la consommation d'eau",
                "Diminution des coûts de traitement",
                "Intervention rapide",
                "Respect des cultures et de l'environnement",
                "Sécurité des opérateurs",
                "Équipement de dernière génération",
                "Service professionnel et fiable",
                ] as $item)
                <li class="flex items-start gap-3">
                    <span
                        class="flex items-center justify-center w-6 h-6 rounded-full bg-lime-500 text-white shrink-0 mt-0.5">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="3">
                            <path d="M5 13l4 4L19 7" />
                        </svg>
                    </span>
                    <span class="text-sm text-slate-700 font-medium">{{ $item }}</span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>





@endsection
