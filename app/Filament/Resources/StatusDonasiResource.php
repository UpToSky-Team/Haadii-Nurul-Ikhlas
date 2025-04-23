<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StatusDonasiResource\Pages;
use App\Filament\Resources\StatusDonasiResource\RelationManagers;
use App\Models\StatusDonasi;
use Filament\Forms;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class StatusDonasiResource extends Resource
{
    protected static ?string $model = StatusDonasi::class;

    protected static ?string $pluralLabel = 'Status Donasi';
    protected static ?string $navigationLabel = 'Status Donasi';

    protected static ?string $navigationIcon = 'heroicon-o-check-circle';
    protected static ?string $navigationGroup = 'Donasi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('id_admin')
                    ->default(Auth::user()->id_admin),
                TextInput::make('status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_status_donasi')
                    ->searchable(),
                TextColumn::make('id_admin')
                    ->searchable(),
                TextColumn::make('status'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
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
            'index' => Pages\ListStatusDonasis::route('/'),
            'create' => Pages\CreateStatusDonasi::route('/create'),
            'view' => Pages\ViewStatusDonasi::route('/{record}'),
            'edit' => Pages\EditStatusDonasi::route('/{record}/edit'),
        ];
    }
}
