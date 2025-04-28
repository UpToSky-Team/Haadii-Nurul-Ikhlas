<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SejarahResource\Pages;
use App\Filament\Resources\SejarahResource\RelationManagers;
use App\Models\Sejarah;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
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

class SejarahResource extends Resource
{
    protected static ?string $model = Sejarah::class;
    protected static ?string $pluralLabel = 'Daftar Sejarah';
    protected static ?string $navigationLabel = 'Sejarah';

    protected static ?string $navigationIcon = 'heroicon-o-clock';
    protected static ?string $navigationGroup = 'Profile';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('id_admin')
                    ->default(Auth::user()->id_admin),
                RichEditor::make('konten')
                    ->label('Konten Sejarah')
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
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('gambar_url')
                    ->label('Gambar Sejarah Jika Ada')
                    ->image()
                    ->imageEditor()
                    ->directory('sejarah')
                    ->visibility('public'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('gambar_url')
                    ->label('Gambar'),
                TextColumn::make('users.name')
                    ->label('Pembuat'),
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
            'index' => Pages\ListSejarahs::route('/'),
            'create' => Pages\CreateSejarah::route('/create'),
            'view' => Pages\ViewSejarah::route('/{record}'),
            'edit' => Pages\EditSejarah::route('/{record}/edit'),
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
