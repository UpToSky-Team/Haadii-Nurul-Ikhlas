<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DokumenRegisResource\Pages;
use App\Filament\Resources\DokumenRegisResource\RelationManagers;
use App\Models\DokumenRegis;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DokumenRegisResource extends Resource
{
    protected static ?string $model = DokumenRegis::class;
    protected static ?string $pluralLabel = 'Tamplate Dokumen Tulis';
    protected static ?string $navigationLabel = 'Tamplate Dokumen Tulis';

    protected static ?string $navigationIcon = 'heroicon-o-identification';
    protected static ?string $navigationGroup = 'Program';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('dokumen')
                    ->label('Dokumen')
                    ->required()
                    ->disk('public')
                    ->directory('dokumen_regis')
                    ->preserveFilenames()
                    ->acceptedFileTypes(['application/pdf'])
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('dokumen')
                    ->label('Dokumen')
                    ->url(fn($record) => asset('storage/' . $record->dokumen))
                    ->openUrlInNewTab()
                    ->formatStateUsing(fn(string $state) => 'Lihat')
                    ->color('primary') // -> warna teksnya
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
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
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageDokumenRegis::route('/'),
        ];
    }
}
