<?php

namespace App\Filament\Resources\CategoryformulareResource\Pages;

use App\Filament\Resources\CategoryformulareResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCategoryformulare extends EditRecord
{
    protected static string $resource = CategoryformulareResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
