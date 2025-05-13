<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StrukturResource\Pages;
use App\Filament\Resources\StrukturResource\RelationManagers;
use App\Models\Struktur;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\DeleteAction;
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

class StrukturResource extends Resource
{
    protected static ?string $model = Struktur::class;
    protected static ?string $pluralLabel = 'Struktur Organisasi';
    protected static ?string $navigationLabel = 'Struktur Organisasi';

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = 'Profile';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->required()
                    ->maxLength(255)
                    ->rule('regex:/^[a-zA-Z\s\p{P}]+$/u'),
                TextInput::make('jabatan')
                    ->required()
                    ->maxLength(255),
                TextInput::make('level')
                    ->required()
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(10)
                    ->default(0)
                    ->label('Level (0-10)'),
                FileUpload::make('gambar_url')
                    ->label('Foto')
                    ->image()
                    ->disk('public')
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '6:6'
                    ])
                    ->imageEditorViewportWidth('600')
                    ->imageEditorViewportHeight('600')
                    ->directory('Struktur'),
                Hidden::make('id_admin')
                    ->default(Auth::user()->id_admin),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->searchable(),
                TextColumn::make('jabatan')
                    ->searchable(),
                ImageColumn::make('gambar_url')
                    ->label('Foto')
                    ->searchable()
                    ->circular(),
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
            'index' => Pages\ListStrukturs::route('/'),
            'create' => Pages\CreateStruktur::route('/create'),
            'view' => Pages\ViewStruktur::route('/{record}'),
            'edit' => Pages\EditStruktur::route('/{record}/edit'),
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
