<?php

namespace App\Filament\Resources;

use App\Filament\Resources\YayasanResource\Pages;
use App\Filament\Resources\YayasanResource\RelationManagers;
use App\Models\Yayasan;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class YayasanResource extends Resource
{
    protected static ?string $model = Yayasan::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-library';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->label('Nama Yayasan')
                    ->maxLength(255)
                    ->default(null),
                Textarea::make('alamat')
                    ->maxLength(255)
                    ->default(null),
                TextInput::make('email')
                    ->email()
                    ->maxLength(255)
                    ->default(null),
                Textarea::make('deskripsi')
                    ->columnSpanFull(),
                FileUpload::make('logo')
                    ->label('Logo Yayasan')
                    ->image()
                    ->imageEditor()
                    ->disk('public')
                    ->directory('yayasan'),
                TextInput::make('no_telepon')
                    ->tel()
                    ->maxLength(255)
                    ->default(null),
                TextInput::make('instagram')
                    ->maxLength(255)
                    ->default(null),
                TextInput::make('twitter')
                    ->maxLength(255)
                    ->default(null),
                TextInput::make('youtube')
                    ->maxLength(255)
                    ->default(null),
                TextInput::make('facebook')
                    ->maxLength(255)
                    ->default(null),
                TextInput::make('tiktok')
                    ->maxLength(255)
                    ->default(null),
                TextInput::make('maps')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->searchable(),
                TextColumn::make('alamat')
                    ->searchable(),
                TextColumn::make('email')
                    ->searchable(),
                ImageColumn::make('logo')
                    ->label('Logo Yayasan'),
                TextColumn::make('no_telepon')
                    ->searchable(),
                TextColumn::make('instagram')
                    ->searchable(),
                TextColumn::make('twitter')
                    ->searchable(),
                TextColumn::make('youtube')
                    ->searchable(),
                TextColumn::make('facebook')
                    ->searchable(),
                TextColumn::make('tiktok')
                    ->searchable(),
                TextColumn::make('maps')
                    ->searchable(),
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
            'index' => Pages\ListYayasans::route('/'),
            'create' => Pages\CreateYayasan::route('/create'),
            'view' => Pages\ViewYayasan::route('/{record}'),
            'edit' => Pages\EditYayasan::route('/{record}/edit'),
        ];
    }
}
