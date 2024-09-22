<?php

namespace App\Filament\Resources\PotentialClientResource\Pages;

use App\Filament\Resources\PotentialClientResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Models\PotentialClient;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BooleanColumn;


class CreatePotentialClient extends CreateRecord
{
    protected static string $resource = PotentialClientResource::class;{
    return $form
        ->schema([
            TextInput::make('name')
                ->label('Nombre')
                ->required(),
            TextInput::make('email')
                ->label('Correo Electrónico')
                ->required(),
            TextInput::make('phone')
                ->label('Teléfono')
                ->nullable(),
            Select::make('deal_closed')
                ->label('Negocio Cerrado')
                ->options([
                    '0' => 'No',
                    '1' => 'Sí',
                ])
                ->default('0'),
        ]);
}



