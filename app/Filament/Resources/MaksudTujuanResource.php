<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MaksudTujuanResource\Pages;
use App\Filament\Resources\MaksudTujuanResource\RelationManagers;
use App\Models\MaksudTujuan;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
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
                RichEditor::make('maksud')
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
                RichEditor::make('tujuan')
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
                FileUpload::make('gambar_url')
                    ->label('Foto')
                    ->image()
                    ->imageEditor()
                    ->disk('public')
                    ->directory('MaksudTujuan'),
                Hidden::make('id_admin')
                    ->default(Auth::user()->id_admin),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('gambar_url')
                    ->label('Gambar')
                    ->searchable(),
                TextColumn::make('users.name')
                    ->label('Pembuat')
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
            'index' => Pages\ListMaksudTujuans::route('/'),
            'create' => Pages\CreateMaksudTujuan::route('/create'),
            'view' => Pages\ViewMaksudTujuan::route('/{record}'),
            'edit' => Pages\EditMaksudTujuan::route('/{record}/edit'),
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
