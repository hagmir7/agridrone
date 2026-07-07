<?php

namespace App\Filament\Resources\Interventions;

use App\Filament\Resources\Interventions\Pages\CreateIntervention;
use App\Filament\Resources\Interventions\Pages\EditIntervention;
use App\Filament\Resources\Interventions\Pages\ListInterventions;
use App\Filament\Resources\Interventions\Pages\ViewIntervention;
use App\Filament\Resources\Interventions\Schemas\InterventionForm;
use App\Filament\Resources\Interventions\Schemas\InterventionInfolist;
use App\Filament\Resources\Interventions\Tables\InterventionsTable;
use App\Models\Intervention;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Override;

class InterventionResource extends Resource
{
    protected static ?string $model = Intervention::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBellAlert;
    // bell-alert

    #[Override]
    public static function canCreate(): bool
    {
        return false;
    }

    protected static ?string $recordTitleAttribute = 'full_name';

    public static function form(Schema $schema): Schema
    {
        return InterventionForm::configure($schema);
    }


    #[Override]
    public static function getModelLabel(): string
    {
        return __("Intervention");
    }

    public static function infolist(Schema $schema): Schema
    {
        return InterventionInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return InterventionsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListInterventions::route('/'),
            'create' => CreateIntervention::route('/create'),
            // 'view' => ViewIntervention::route('/{record}'),
            // 'edit' => EditIntervention::route('/{record}/edit'),
        ];
    }
}
