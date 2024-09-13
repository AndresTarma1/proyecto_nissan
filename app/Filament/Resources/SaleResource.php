<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SaleResource\Pages;
use App\Filament\Resources\SaleResource\RelationManagers;
use App\Models\Sale;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SaleResource extends Resource
{
    protected static ?string $model = Sale::class;

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
                Tables\Columns\TextColumn::make('customer.name')->label('Comprador'),
                Tables\Columns\TextColumn::make('seller.name')->label('Vendedor'),
                Tables\Columns\TextColumn::make('fecha_venta')->label('Fecha de compra')->sortable(),
                Tables\Columns\TextColumn::make('vehicle.model')->label('Vehiculo comprado'),
                Tables\Columns\TextColumn::make('total')->label('Total'),
            ])
            ->filters([
                //

            ])
            ->actions([
                Tables\Actions\EditAction::make()->hidden(),
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
            'index' => Pages\ListSales::route('/'),
            'create' => Pages\CreateSale::route('/create'),
            // 'edit' => Pages\EditSale::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return __('Ventas');
    }


}
