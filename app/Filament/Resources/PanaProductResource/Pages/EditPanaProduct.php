<?php

namespace App\Filament\Resources\PanaProductResource\Pages;

use App\Filament\Resources\PanaProductResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPanaProduct extends EditRecord
{
    protected static string $resource = PanaProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
