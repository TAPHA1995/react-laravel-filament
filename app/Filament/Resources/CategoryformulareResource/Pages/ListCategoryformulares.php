<?php

namespace App\Filament\Resources\CategoryformulareResource\Pages;

use App\Filament\Resources\CategoryformulareResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategoryformulares extends ListRecords
{
    protected static string $resource = CategoryformulareResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
