<?php

use Livewire\Component;
use Model\Intervention;
new class extends Component
{
    public string $full_name = '';
    public string $phone = '';
    public string $email = '';
    public string $city_province = '';
    public string $address = '';
    public string $crop_type = '';
    public $area_hectares = '';
    public string $preferred_intervention_date = '';

    public bool $submitted = false;

    protected function rules(): array
    {
        return [
            'full_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:20'],
            'email' => ['nullable', 'email', 'max:255'],
            'city_province' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:1000'],
            'crop_type' => ['required', 'string', 'max:255'],
            'area_hectares' => ['required', 'numeric', 'min:0.01'],
            'preferred_intervention_date' => ['required', 'date', 'after_or_equal:today'],
        ];
    }

    protected function messages(): array
    {
        return [
            'full_name.required' => 'Le nom complet est requis.',
            'phone.required' => 'Le téléphone est requis.',
            'email.email' => "L'adresse email n'est pas valide.",
            'city_province.required' => 'La ville / province est requise.',
            'address.required' => 'L\'adresse ou localisation de la parcelle est requise.',
            'crop_type.required' => 'Le type de culture est requis.',
            'area_hectares.required' => 'La superficie est requise.',
            'area_hectares.numeric' => 'La superficie doit être un nombre.',
            'preferred_intervention_date.required' => "La date d'intervention est requise.",
            'preferred_intervention_date.after_or_equal' => 'La date doit être aujourd\'hui ou une date future.',
        ];
    }

    public function save()
    {
        $validated = $this->validate();

       Intervention::create($validated);

        $this->reset();
        $this->submitted = true;
    }
};
?>

<section id="demande" class="py-20 bg-forest-50">
    <div class="max-w-3xl mx-auto px-6">

        <div class="text-center mb-10">
            <p class="text-lime-600 font-semibold text-xs tracking-[0.2em] mb-3">DEMANDE D'INTERVENTION</p>
            <h2 class="text-3xl md:text-4xl font-bold text-forest-800">Réservez votre service dès maintenant</h2>
            <p class="text-slate-500 mt-3">Remplissez ce formulaire et notre équipe vous contactera rapidement.</p>
        </div>

        <div class="bg-white rounded-2xl shadow-xl p-8 md:p-10 relative overflow-hidden">
            <div class="dot-grid absolute -right-6 -top-6 w-24 h-24 hidden md:block"></div>

            @if ($submitted)
            <div class="mb-6 flex items-center gap-3 p-4 bg-lime-50 border border-lime-200 text-forest-800 rounded-xl">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#679d20" stroke-width="2"
                    class="shrink-0">
                    <circle cx="12" cy="12" r="9" />
                    <path d="M8 12l3 3 5-6" />
                </svg>
                <span class="text-sm font-medium">Votre demande a été envoyée avec succès !</span>
            </div>
            @endif

            <form wire:submit="save" class="space-y-5 relative">

                <div class="grid sm:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-semibold text-forest-800 mb-1.5">Nom complet *</label>
                        <input type="text" wire:model="full_name"
                            class="w-full border border-slate-200 rounded-lg p-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-lime-500 focus:border-transparent transition">
                        @error('full_name') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-forest-800 mb-1.5">Téléphone *</label>
                        <input type="text" wire:model="phone"
                            class="w-full border border-slate-200 rounded-lg p-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-lime-500 focus:border-transparent transition">
                        @error('phone') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-forest-800 mb-1.5">Email (Optionnel)</label>
                    <input type="email" wire:model="email"
                        class="w-full border border-slate-200 rounded-lg p-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-lime-500 focus:border-transparent transition">
                    @error('email') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-forest-800 mb-1.5">Ville / Province *</label>
                    <input type="text" wire:model="city_province"
                        class="w-full border border-slate-200 rounded-lg p-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-lime-500 focus:border-transparent transition">
                    @error('city_province') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-forest-800 mb-1.5">Adresse ou localisation de la
                        parcelle *</label>
                    <textarea wire:model="address" rows="3"
                        class="w-full border border-slate-200 rounded-lg p-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-lime-500 focus:border-transparent transition"></textarea>
                    @error('address') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                </div>

                <div class="grid sm:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-semibold text-forest-800 mb-1.5">Type de culture *</label>
                        <input type="text" wire:model="crop_type"
                            class="w-full border border-slate-200 rounded-lg p-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-lime-500 focus:border-transparent transition">
                        @error('crop_type') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-forest-800 mb-1.5">Superficie (hectares)
                            *</label>
                        <input type="number" step="0.01" wire:model="area_hectares"
                            class="w-full border border-slate-200 rounded-lg p-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-lime-500 focus:border-transparent transition">
                        @error('area_hectares') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-forest-800 mb-1.5">Date d'intervention souhaitée
                        *</label>
                    <input type="date" wire:model="preferred_intervention_date"
                        class="w-full border border-slate-200 rounded-lg p-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-lime-500 focus:border-transparent transition">
                    @error('preferred_intervention_date') <span class="text-red-500 text-xs mt-1 block">{{ $message
                        }}</span> @enderror
                </div>

                <button type="submit"
                    class="w-full bg-lime-500 hover:bg-lime-600 text-white font-semibold py-3 rounded-lg transition flex items-center justify-center gap-2">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z" />
                    </svg>
                    Envoyer la demande
                </button>

            </form>
        </div>
    </div>
</section>
