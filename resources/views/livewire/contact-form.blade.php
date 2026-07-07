<form wire:submit="submit" class="p-8 md:p-10">
    <div class="flex items-center justify-between mb-8">
        <div>
            <p class="text-xs uppercase tracking-widest text-lime-500 font-semibold">Fiche de contact</p>
            <h2 class="font-display font-bold text-2xl text-forest-900">Décrivez votre parcelle</h2>
        </div>
        <span
            class="hidden sm:block stamp border-2 border-forest-800/20 text-forest-800/40 text-[10px] font-bold uppercase tracking-widest rounded-full px-3 py-1">
            À traiter
        </span>
    </div>

    @if ($submitted)
    <div class="mb-6 rounded-lg bg-lime-50 border border-lime-300 text-forest-800 text-sm px-4 py-3">
        Votre demande a bien été envoyée. Nous vous contacterons rapidement.
    </div>
    @endif

    <div class="grid sm:grid-cols-2 gap-x-6 gap-y-6">
        <div>
            <label class="block text-xs font-semibold text-forest-700/60 uppercase tracking-wide mb-2">Nom
                complet</label>
            <input wire:model="full_name" type="text" placeholder="Votre nom"
                class="field w-full py-2 text-forest-900 placeholder:text-forest-900/30">
            @error('full_name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-xs font-semibold text-forest-700/60 uppercase tracking-wide mb-2">Sujet</label>
            <input wire:model="subject" type="text" placeholder="Sujet de la demande"
                class="field w-full py-2 text-forest-900 placeholder:text-forest-900/30">
            @error('subject') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-xs font-semibold text-forest-700/60 uppercase tracking-wide mb-2">Téléphone</label>
            <input wire:model="phone" type="tel" placeholder="+212 6 00 00 00 00"
                class="field w-full py-2 text-forest-900 placeholder:text-forest-900/30">
            @error('phone') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="sm:col-span-2">
            <label class="block text-xs font-semibold text-forest-700/60 uppercase tracking-wide mb-2">Détails de la
                mission</label>
            <textarea wire:model="message" rows="3"
                placeholder="Type de culture, période souhaitée, contraintes particulières..."
                class="field w-full py-2 text-forest-900 placeholder:text-forest-900/30 resize-none"></textarea>
            @error('message') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>
    </div>

    <button type="submit"
        class="mt-8 inline-flex items-center gap-2 bg-forest-800 hover:bg-forest-700 transition text-white pl-6 pr-5 py-4 rounded-full font-semibold">
        <span wire:loading.remove wire:target="submit">Envoyer la demande</span>
        <span wire:loading wire:target="submit">Envoi en cours...</span>
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
            <path d="M5 12h14M13 6l6 6-6 6" stroke="white" stroke-width="2" stroke-linecap="round"></path>
        </svg>
    </button>
</form>
