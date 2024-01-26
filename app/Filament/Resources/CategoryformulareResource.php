<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryformulareResource\Pages;
use App\Filament\Resources\CategoryformulareResource\RelationManagers;
use App\Models\Categoryformulare;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CategoryformulareResource extends Resource
{
    protected static ?string $model = Categoryformulare::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCategoryformulares::route('/'),
            'create' => Pages\CreateCategoryformulare::route('/create'),
            'edit' => Pages\EditCategoryformulare::route('/{record}/edit'),
        ];
    }
}
