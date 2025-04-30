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
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ForceDeleteBulkAction;
use Filament\Tables\Actions\RestoreBulkAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
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
                    ->label('Gambar Qris')
                    ->image()
                    ->imageEditor()
                    ->directory('qris')
                    ->visibility('public')
                    ->columnSpanFull(),
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
                TrashedFilter::make(),
            ])
            ->actions([
                ViewAction::make()
                    ->label('Lihat'),
                EditAction::make()
                    ->label('Edit'),
                DeleteAction::make()
                    ->label('Hapus'),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
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
