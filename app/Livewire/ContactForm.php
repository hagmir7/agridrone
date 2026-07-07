<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactForm extends Component
{
    public string $full_name = '';
    public string $subject = '';
    public string $phone = '';
    public string $message = '';

    public bool $submitted = false;

    protected function rules(): array
    {
        return [
            'full_name' => ['required', 'string', 'max:255'],
            'subject'   => ['required', 'string', 'max:255'],
            'phone'     => ['required', 'string', 'max:30'],
            'message'   => ['required', 'string', 'max:2000'],
        ];
    }

    protected function messages(): array
    {
        return [
            'full_name.required' => 'Le nom complet est requis.',
            'subject.required'   => 'Le sujet est requis.',
            'phone.required'     => 'Le numéro de téléphone est requis.',
            'message.required'   => 'Merci de décrire votre demande.',
        ];
    }

    public function submit(): void
    {
        $validated = $this->validate();

        Contact::create($validated);

        $this->reset(['full_name', 'subject', 'phone', 'message']);
        $this->submitted = true;
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
