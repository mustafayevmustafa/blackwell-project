<?php

namespace App\Filament\Resources\PanaProductResource\Pages;

use App\Filament\Resources\PanaProductResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPanaProducts extends ListRecords
{
    protected static string $resource = PanaProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
