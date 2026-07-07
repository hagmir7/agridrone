<?php

namespace App\Filament\Resources\Interventions\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class InterventionInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('full_name')
                    ->label('Nom complet'),
                TextEntry::make('phone')
                    ->label('Téléphone'),
                TextEntry::make('email')
                    ->label('Adresse e-mail')
                    ->placeholder('-'),
                TextEntry::make('city_province')
                    ->label('Ville / Province'),
                TextEntry::make('address')
                    ->label('Adresse')
                    ->columnSpanFull(),
                TextEntry::make('crop_type')
                    ->label('Type de culture'),
                TextEntry::make('area_hectares')
                    ->label('Superficie (ha)')
                    ->numeric(),
                TextEntry::make('preferred_intervention_date')
                    ->label('Date d\'intervention souhaitée')
                    ->date(),
                TextEntry::make('created_at')
                    ->label('Créé le')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->label('Modifié le')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
