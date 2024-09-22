<?php

namespace App\Filament\Resources\PotentialClientResource\Pages;

use App\Filament\Resources\PotentialClientResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPotentialClient extends EditRecord
{
    protected static string $resource = PotentialClientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
