@extends('layouts.base')



@section('content')
<x-hero />
<x-why-us />
<x-services />
<x-methode />

<!-- ============ CTA BANNER ============ -->
<section class="bg-forest-900">
    <div class="max-w-7xl mx-auto px-6 py-10 flex flex-col lg:flex-row items-center gap-8">
        <div class="flex items-start gap-4 text-white flex-1">
            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#8fc93a" stroke-width="1.6"
                class="shrink-0 mt-1">
                <path d="M12 3c3 3 5 6 5 9a5 5 0 0 1-10 0c0-3 2-6 5-9z" />
            </svg>
            <div class="flex flex-col sm:flex-row sm:items-center gap-4 sm:gap-8">
                <h3 class="text-xl md:text-2xl font-bold leading-snug shrink-0">Prêt à transformer<br>votre
                    exploitation
                    ?
                </h3>
                <p class="text-white/70 text-sm max-w-xs sm:border-l sm:border-white/20 sm:pl-6">Améliorez
                    votre productivité grâce à une technologie de drone agricole de pointe. </p>
            </div>
        </div>
        <div
            class="bg-lime-500 rounded-xl px-8 py-5 flex flex-wrap justify-center gap-8 text-white text-xs font-semibold w-full lg:w-auto shrink-0">
            <span class="flex flex-col items-center gap-1"><svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.8">
                    <circle cx="12" cy="12" r="9" />
                    <path d="M12 7v5l3 3" />
                </svg>Gain de temps</span>
            <span class="flex flex-col items-center gap-1"><svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.8">
                    <ellipse cx="12" cy="6" rx="7" ry="3" />
                    <path d="M5 6v6c0 1.7 3.1 3 7 3s7-1.3 7-3V6M5 12v6c0 1.7 3.1 3 7 3s7-1.3 7-3v-6" />
                </svg>Coûts réduits</span>
            <span class="flex flex-col items-center gap-1"><svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.8">
                    <path d="M4 19h4v-6H4zM10 19h4v-10H10zM16 19h4v-14H16z" />
                </svg>Meilleurs rendements</span>
            <span class="flex flex-col items-center gap-1"><svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.8">
                    <path d="M12 3c3 3 5 6 5 9a5 5 0 0 1-10 0c0-3 2-6 5-9z" />
                </svg>Écoresponsable</span>
        </div>
    </div>
</section>


<x-faqs />


@livewire('intervention-form')
@endsection
