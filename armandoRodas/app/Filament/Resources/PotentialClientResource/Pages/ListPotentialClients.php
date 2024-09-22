<?php

namespace App\Filament\Resources\PotentialClientResource\Pages;

use App\Filament\Resources\PotentialClientResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPotentialClients extends ListRecords
{
    protected static string $resource = PotentialClientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
