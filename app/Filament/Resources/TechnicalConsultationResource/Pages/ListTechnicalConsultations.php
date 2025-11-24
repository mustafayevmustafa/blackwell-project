<?php

namespace App\Filament\Resources\TechnicalConsultationResource\Pages;

use App\Filament\Resources\TechnicalConsultationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTechnicalConsultations extends ListRecords
{
    protected static string $resource = TechnicalConsultationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
