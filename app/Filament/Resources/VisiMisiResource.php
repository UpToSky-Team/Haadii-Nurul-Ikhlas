<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisiMisiResource\Pages;
use App\Filament\Resources\VisiMisiResource\RelationManagers;
use App\Models\VisiMisi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VisiMisiResource extends Resource
{
    protected static ?string $model = VisiMisi::class;

    protected static ?string $pluralLabel = 'Visi Misi';
    protected static ?string $navigationLabel = 'Visi Misi';

    protected static ?string $navigationIcon = 'heroicon-o-rocket-launch';
    protected static ?string $navigationGroup = 'Profile';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id_visi_misi')
                    ->required()
                    ->maxLength(36),
                Forms\Components\Textarea::make('visi')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('misi')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('gambar_url')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('id_admin')
                    ->required()
                    ->maxLength(36),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_visi_misi')
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
            'index' => Pages\ListVisiMisis::route('/'),
            'create' => Pages\CreateVisiMisi::route('/create'),
            'view' => Pages\ViewVisiMisi::route('/{record}'),
            'edit' => Pages\EditVisiMisi::route('/{record}/edit'),
        ];
    }
}
