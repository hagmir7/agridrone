<?php

namespace App\Filament\Resources\Contacts\Schemas;

use App\Models\Contact;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ContactInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('full_name')
                    ->label('Nom complet'),
                TextEntry::make('subject')
                    ->label('Sujet'),
                TextEntry::make('phone')
                    ->label('Téléphone'),
                TextEntry::make('message')
                    ->label('Message')
                    ->columnSpanFull(),
                TextEntry::make('status')
                    ->label('Statut')
                    ->badge()
                    ->formatStateUsing(fn(string $state): string => match ($state) {
                        Contact::STATUS_TO_PROCESS => 'À traiter',
                        Contact::STATUS_IN_PROGRESS => 'En cours',
                        Contact::STATUS_DONE => 'Traité',
                        default => $state,
                    })
                    ->color(fn(string $state): string => match ($state) {
                        Contact::STATUS_TO_PROCESS => 'danger',
                        Contact::STATUS_IN_PROGRESS => 'warning',
                        Contact::STATUS_DONE => 'success',
                        default => 'gray',
                    }),
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
