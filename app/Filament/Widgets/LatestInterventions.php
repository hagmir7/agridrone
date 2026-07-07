<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\Interventions\InterventionResource;
use App\Models\Intervention;
use Filament\Actions\ViewAction;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Grid;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Override;

class LatestInterventions extends BaseWidget
{
    protected static ?string $heading = 'Dernières interventions';

    protected int|string|array $columnSpan = 'full';

    protected static ?int $sort = 0;

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Intervention::query()->latest()->limit(10)
            )
            ->paginated(false)
            ->columns([
                Tables\Columns\TextColumn::make('full_name')
                    ->label('Nom complet')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->label('Téléphone'),
                Tables\Columns\TextColumn::make('city_province')
                    ->label('Ville / Province'),
                Tables\Columns\TextColumn::make('crop_type')
                    ->label('Type de culture'),
                Tables\Columns\TextColumn::make('area_hectares')
                    ->label('Superficie (ha)')
                    ->numeric(),
                Tables\Columns\TextColumn::make('preferred_intervention_date')
                    ->label('Date souhaitée')
                    ->date(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Créé le')
                    ->dateTime()
                    ->sortable(),
            ])
            ->recordActions([

                ViewAction::make()
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextEntry::make('full_name')->label('Nom complet'),
                                TextEntry::make('phone')->label('Téléphone'),
                                TextEntry::make('city_province')->label('Ville / Province'),
                                TextEntry::make('crop_type')->label('Type de culture'),
                                TextEntry::make('area_hectares')->label('Superficie (ha)'),
                                TextEntry::make('preferred_intervention_date')->label('Date souhaitée')->date(),
                                TextEntry::make('created_at')->label('Créé le')->dateTime(),
                            ]),
                    ]),
            ]);
    }
}
