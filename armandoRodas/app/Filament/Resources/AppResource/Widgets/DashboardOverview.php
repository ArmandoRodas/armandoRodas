<?php

namespace App\Filament\Resources\AppResource\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Widgets\Widget;

class DashboardOverview extends BaseWidget
{
    protected static string $view = 'filament.widgets.dashboard-overview';

    public function getData(): array
    {
        return [
            'totalClients' => \App\Models\PotentialClient::count(),
            'closedDeals' => \App\Models\PotentialClient::where('deal_closed', true)->count(),
        ];
    }
}
