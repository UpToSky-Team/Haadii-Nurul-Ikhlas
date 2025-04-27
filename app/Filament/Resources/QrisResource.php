<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QrisResource\Pages;
use App\Filament\Resources\QrisResource\RelationManagers;
use App\Models\Qris;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class QrisResource extends Resource
{
    protected static ?string $model = Qris::class;

    protected static ?string $pluralLabel = 'Qris';
    protected static ?string $navigationLabel = 'Qris';

    protected static ?string $navigationIcon = 'heroicon-o-qr-code';
    protected static ?string $navigationGroup = 'Donasi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('gambar_qris')
                    ->label('Foto Siswa')
                    ->image()
                    ->imageEditor()
                    ->directory('qris')
                    ->visibility('public'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('gambar_qris')
                    ->label('Barcode Qris')
                    ->url(fn($record) => asset('storage/' . $record->gambar_qris)) // gambar jadi link
                    ->openUrlInNewTab()
                    ->searchable()
                    ->size(100)
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListQris::route('/'),
            'create' => Pages\CreateQris::route('/create'),
            'view' => Pages\ViewQris::route('/{record}'),
            'edit' => Pages\EditQris::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
