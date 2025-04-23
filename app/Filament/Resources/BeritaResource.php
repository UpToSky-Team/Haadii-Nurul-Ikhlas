<?php

namespace App\Filament\Resources;

use App\Filament\Exports\BeritaExporter;
use App\Filament\Resources\BeritaResource\Pages;
use App\Filament\Resources\BeritaResource\RelationManagers;
use App\Models\Berita;
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

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;

    protected static ?string $pluralLabel = 'Daftar Berita';
    protected static ?string $navigationLabel = 'Berita';

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationGroup = 'Publikasi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('id_admin')
                ->default(Auth::user()->id_admin),
                Textarea::make('judul')
                ->label('Judul Berita')
                ->required()
                ->maxLength(255),
            
                RichEditor::make('content')
                ->label('Konten Berita')
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
                    ->label('Thumbnail Gambar Berita (Slug)')
                    ->image()
                    ->imageEditor()
                    ->directory('berita')
                    ->visibility('public')
                    ->columnSpanFull(),

                Repeater::make('gambarberitas')
                    ->label('Gambar Berita')
                    ->relationship('gambarberitas')
                    ->schema([
                    FileUpload::make('gambar_url')
                        ->label('Gambar Berita')
                        ->image()
                        ->imageEditor()
                        ->directory('berita')
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
                ImageColumn::make('gambarberitas.gambar_url')
                    ->label('Gambar Berita')
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
                ExportAction::make()->exporter(BeritaExporter::class)
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
            'index' => Pages\ListBeritas::route('/'),
            'create' => Pages\CreateBerita::route('/create'),
            'view' => Pages\ViewBerita::route('/{record}'),
            'edit' => Pages\EditBerita::route('/{record}/edit'),
        ];
    }
}
