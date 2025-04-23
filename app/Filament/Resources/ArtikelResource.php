<?php

namespace App\Filament\Resources;

use App\Filament\Exports\ArtikelExporter;
use App\Filament\Resources\ArtikelResource\Pages;
use App\Filament\Resources\ArtikelResource\RelationManagers;
use App\Models\Artikel;
use App\Models\GambarArtikel;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Repeater;
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
use Filament\Tables\Actions\ExportAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\textarea;

class ArtikelResource extends Resource
{
    protected static ?string $model = Artikel::class;

    protected static ?string $pluralLabel = 'Daftar Artikel';
    protected static ?string $navigationLabel = 'Artikel';

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';
    protected static ?string $navigationGroup = 'Publikasi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('id_admin')
                    ->default(Auth::user()->id_admin),
                textarea::make('judul')
                    ->label('Judul Artikel')
                    ->required()
                    ->maxLength(255),
                
                RichEditor::make('content')
                    ->label('Konten Artikel')
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

                    FileUpload::make('slug')
                    ->label('Thumbnail Gambar Artikel (Slug)')
                    ->image()
                    ->imageEditor()
                    ->directory('artikel')
                    ->visibility('public')
                    ->columnSpanFull(),
                    
                    Repeater::make('gambarartikels')
                    ->relationship('gambarartikels')
                    ->schema([
                        FileUpload::make('gambar_url')
                        ->label('Gambar Artikel')
                        ->image()
                        ->imageEditor()
                        ->directory('artikel')
                        ->visibility('public'),

                        Textarea::make('caption')
                        ->label('Keterangan')
                        ->required()
                        ->maxLength(255),
                    ]), 
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')
                    ->label('Judul Artikel')  
                    ->searchable(),
                ImageColumn::make('slug')
                    ->label('Thumbnail Artikel')
                    ->searchable(),
                ImageColumn::make('gambarartikels.gambar_url')
                    ->label('Gambar Artikel')
                    ->searchable()
                    ->stacked(),
                TextColumn::make('users.name')
                    ->label('Pembuat Artikel')
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
            ->headerActions([
                ExportAction::make()->exporter(ArtikelExporter::class)
                    ->label('Ekspor')
                    ->icon('heroicon-o-arrow-down-tray')
                    ->color('success')
                    ->iconPosition('before')
                    ->modalHeading('Ekspor Data Donatur'),
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
            'index' => Pages\ListArtikels::route('/'),
            'create' => Pages\CreateArtikel::route('/create'),
            'view' => Pages\ViewArtikel::route('/{record}'),
            'edit' => Pages\EditArtikel::route('/{record}/edit'),
        ];
    }
}
