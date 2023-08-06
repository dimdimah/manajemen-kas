<?php

namespace App\Filament\Resources\UangKasResource\Pages;

use App\Filament\Resources\UangKasResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUangKas extends EditRecord
{
    protected static string $resource = UangKasResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
