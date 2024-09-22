<?php

namespace App\Filament\Resources\App\FilamentResource\Widgets;

use Filament\Widgets\ChartWidget;

class DashboardOverview extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
