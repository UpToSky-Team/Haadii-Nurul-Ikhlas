<?php

namespace App\Filament\Resources;

use App\Filament\Resources\YayasanResource\Pages;
use App\Filament\Resources\YayasanResource\RelationManagers;
use App\Models\Yayasan;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ForceDeleteAction;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
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
                TextInput::make('no_telepon')
                    ->label('Nomer Telepon Yayasan')
                    ->tel()
                    ->maxLength(255)
                    ->prefix('+62')
                    ->default(null),
                
                RichEditor::make('deskripsi')
                    ->label('Deskripsi Yayasan')
                    ->toolbarButtons([
                        'blockquote',
                        'bold',
                        'bulletList',
                        'h1',
                        'h2',
                        'h3',
                        'italic',
                        'link',
                        'orderedList',
                        'redo',
                        'strike',
                        'underline',
                        'undo',
                    ])
                    ->required(),
                FileUpload::make('logo')
                    ->label('Logo Yayasan')
                    ->image()
                    ->imageEditor()
                    ->disk('public')
                    ->directory('yayasan')
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
                Textarea::make('maps')
                    ->label('Maps Yayasan')
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
                    ->url(fn($record) => asset('storage/' . $record->logo)) // gambar jadi link
                    ->openUrlInNewTab()
                    ->searchable()
                    ->size(150)
                    ->rounded()
                    ->sortable(),
                TextColumn::make('alamat')
                    ->label('Alamat Yayasan')
                    ->searchable()
                    ->limit(100),
                TextColumn::make('deskripsi')
                    ->label('Deskripsi Yayasan')
                    ->formatStateUsing(fn($state) => strip_tags($state))
                    ->wrap()
                    ->limit(100)
                    ->searchable(),
                TextColumn::make('email')
                    ->label('E-mail Yayasan')
                    ->searchable(),
                TextColumn::make('no_telepon')
                    ->label('Nomer Telepon Yayasan')
                    ->searchable()
                    ->formatStateUsing(function ($state) {
                        if (!$state) {
                            return '-';
                        }
                
                        // Kalau sudah +62, tampilkan langsung
                        if (str_starts_with($state, '+62')) {
                            return $state;
                        }
                
                        // Kalau mulai 0, ganti 0 dengan +62
                        if (str_starts_with($state, '0')) {
                            return '+62' . substr($state, 1);
                        }
                
                        // Kalau nomor lain, langsung +62 di depan
                        return '+62' . $state;
                    }),
                 
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
                    ->searchable()
                    ->limit(100),
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
                TrashedFilter::make(),
            ])
            ->actions([
                ViewAction::make()
                    ->label('Lihat'),
                EditAction::make()
                    ->label('Edit'),
                DeleteAction::make()
                    ->label('Hapus'),
                ForceDeleteAction::make(),
                RestoreAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
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
            'index' => Pages\ListYayasans::route('/'),
            'create' => Pages\CreateYayasan::route('/create'),
            'view' => Pages\ViewYayasan::route('/{record}'),
            'edit' => Pages\EditYayasan::route('/{record}/edit'),
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
