<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MaksudTujuanResource\Pages;
use App\Filament\Resources\MaksudTujuanResource\RelationManagers;
use App\Models\MaksudTujuan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MaksudTujuanResource extends Resource
{
    protected static ?string $model = MaksudTujuan::class;
    protected static ?string $pluralLabel = 'Maksud dan Tujuan';
    protected static ?string $navigationLabel = 'Maksud dan Tujuan';

    protected static ?string $navigationIcon = 'heroicon-o-light-bulb';
    protected static ?string $navigationGroup = 'Profile';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('maksud_tujuan')
                    ->required()
                    ->maxLength(36),
                Forms\Components\Textarea::make('maksud')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('tujuan')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('gambar_url')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('id_admin')
                    ->required()
                    ->maxLength(36),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('maksud_tujuan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gambar_url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('id_admin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListMaksudTujuans::route('/'),
            'create' => Pages\CreateMaksudTujuan::route('/create'),
            'view' => Pages\ViewMaksudTujuan::route('/{record}'),
            'edit' => Pages\EditMaksudTujuan::route('/{record}/edit'),
        ];
    }
}
