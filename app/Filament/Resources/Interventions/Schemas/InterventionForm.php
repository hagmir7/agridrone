<?php

namespace App\Filament\Resources\Interventions\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class InterventionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('full_name')
                    ->label('Nom complet')
                    ->required(),
                TextInput::make('phone')
                    ->label('Téléphone')
                    ->tel()
                    ->required(),
                TextInput::make('email')
                    ->label('Adresse e-mail')
                    ->email(),
                TextInput::make('city_province')
                    ->label('Ville / Province')
                    ->required(),
                Textarea::make('address')
                    ->label('Adresse')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('crop_type')
                    ->label('Type de culture')
                    ->required(),
                TextInput::make('area_hectares')
                    ->label('Superficie (hectares)')
                    ->required()
                    ->numeric(),
                DatePicker::make('preferred_intervention_date')
                    ->label('Date d\'intervention souhaitée')
                    ->required(),
            ]);
    }
}
