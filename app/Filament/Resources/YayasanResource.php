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
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class YayasanResource extends Resource
{
    protected static ?string $model = Yayasan::class;

    protected static ?string $pluralLabel = 'Yayasan';
    protected static ?string $navigationLabel = 'Yayasan';

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
                    ->label('Alamat Yayasan')
                    ->maxLength(255)
                    ->default(null),
                TextInput::make('email')
                    ->label('E-mail Yayasan')
                    ->email()
                    ->maxLength(255)
                    ->default(null),
                Textarea::make('deskripsi')
                    ->label('Deskripsi Yayasan')
                    ->required()
                    ->maxLength(255)
                    ->default(null),
                FileUpload::make('logo')
                    ->label('Logo Yayasan')
                    ->image()
                    ->imageEditor()
                    ->disk('public')
                    ->directory('yayasan')
                    ->default(null),
                TextInput::make('no_telepon')
                    ->label('Nomer Telepon Yayasan')
                    ->tel()
                    ->maxLength(255)
                    ->default(null),
                TextInput::make('instagram')
                    ->label('Instagram Yayasan')
                    ->maxLength(255)
                    ->default(null),
                TextInput::make('twitter')
                    ->label('Twitter Yayasan')
                    ->maxLength(255)
                    ->default(null),
                TextInput::make('youtube')
                    ->label('YouTube Yayasan')
                    ->maxLength(255)
                    ->default(null),
                TextInput::make('facebook')
                    ->label('Facebook Yayasan')
                    ->maxLength(255)
                    ->default(null),
                TextInput::make('tiktok')
                    ->label('TikTok Yayasan')
                    ->maxLength(255)
                    ->default(null),
                TextInput::make('maps')
                    ->label('Maps Yayasan')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Nama Yayasan')
                    ->searchable(),
                ImageColumn::make('logo')
                    ->label('Logo Yayasan')
                    ->size(150)
                    ->rounded(),
                TextColumn::make('alamat')
                    ->label('Alamat Yayasan')
                    ->searchable(),
                TextColumn::make('deskripsi')
                    ->label('Deskripsi Yayasan')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('E-mail Yayasan')
                    ->searchable(),
                TextColumn::make('no_telepon')
                    ->label('Nomer Telepon Yayasan')
                    ->searchable(),
                TextColumn::make('instagram')
                    ->label('Instagram Yayasan')
                    ->searchable(),
                TextColumn::make('twitter')
                    ->label('Twitter Yayasan') 
                    ->searchable(),
                TextColumn::make('youtube')
                    ->label('YouTube Yayasan')
                    ->searchable(),
                TextColumn::make('facebook')
                    ->label('Facebook Yayasan')
                    ->searchable(),
                TextColumn::make('tiktok')
                    ->label('TikTok Yayasan')
                    ->searchable(),
                TextColumn::make('maps')
                    ->label('Masp Yayasan')
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
