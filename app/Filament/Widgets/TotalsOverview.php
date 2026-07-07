<?php

namespace App\Filament\Widgets;

use App\Models\Contact;
use App\Models\Intervention;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TotalsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Utilisateurs', User::count())
                ->description('Total des utilisateurs')
                ->descriptionIcon('heroicon-m-users')
                ->color('primary'),

            Stat::make('Contacts', Contact::count())
                ->description('Total des demandes de contact')
                ->descriptionIcon('heroicon-m-envelope')
                ->color('success'),

            Stat::make('Interventions', Intervention::count())
                ->description('Total des interventions')
                ->descriptionIcon('heroicon-m-bell-alert')
                ->color('warning'),
        ];
    }
}
