<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GaleriResource\Pages;
use App\Filament\Resources\GaleriResource\RelationManagers;
use App\Models\Galeri;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
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
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GaleriResource extends Resource
{
    protected static ?string $model = Galeri::class;
    protected static ?string $pluralLabel = 'Daftar Galeri';
    protected static ?string $navigationLabel = 'Galeri';
    protected static ?string $navigationGroup = 'Publikasi';
    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('galeri_url')
                    ->label('Foto atau Video')
                    ->required()
                    ->disk('public')
                    ->directory(fn($get) => self::getStoragePath($get))
                    ->imageEditor()
                    ->afterStateUpdated(function ($state, callable $set) {
                        // Tentukan jenis file berdasarkan ekstensi setelah upload
                        $jenis = self::getFileType($state);
                        $set('jenis', $jenis); // Set field hidden 'jenis' dengan nilai 'gambar' atau 'video'
                    }),
                Textarea::make('caption')
                    ->label('Keterangan')
                    ->required()
                    ->columnSpanFull(),
                Hidden::make('jenis')
                    ->default(fn($get) => self::getFileType($get('galeri_url'))),
                Hidden::make('id_admin')
                    ->default(Auth::user()->id_admin),
            ]);
    }

    private static function getStoragePath($get): string
    {
        $file = $get('galeri_url');

        // Cek apakah file adalah array dan ambil elemen pertama
        if (is_array($file) && !empty($file)) {
            $file = reset($file);
        }

        // Jika file adalah objek atau path pendek, konversi ke path lengkap
        if ($file instanceof \Illuminate\Http\UploadedFile) {
            $file = $file->getClientOriginalName();
        } elseif (!is_string($file) || empty($file)) {
            return 'other'; // Default jika tidak ada file
        }

        // Pastikan mendapatkan path file yang benar
        $extension = pathinfo(Storage::path($file), PATHINFO_EXTENSION);

        return in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp']) ? 'galeri/gambar' : 'galeri/video';
    }


    public static function getFileType($file): string
    {

        // Cek apakah file adalah array dan ambil elemen pertama
        if (is_array($file) && !empty($file)) {
            $file = reset($file);
        }

        // Jika file adalah objek atau path pendek, konversi ke path lengkap
        if ($file instanceof UploadedFile) {
            $file = $file->getClientOriginalName();
        } elseif (!is_string($file) || empty($file)) {
            return 'other'; // Default jika tidak ada file
        }

        // Pastikan mendapatkan path file yang benar
        $extension = pathinfo(Storage::path($file), PATHINFO_EXTENSION);

        return in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp']) ? 'gambar' : 'video';
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('galeri_url')
                    ->label('File')
                    ->size(150)
                    ->rounded(),
                TextColumn::make('caption')
                    ->label('Keterangan')
                    ->wrap(),
                TextColumn::make('jenis')
                    ->label('Jenis'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('users.name')
                    ->label('Di Uploded')
                    ->wrap(),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->contentGrid([
                'sm' => 2,
                'md' => 3,
                'lg' => 4,
                'xl' => 5,
            ])
            ->filters([
                SelectFilter::make('jenis')
                    ->label('Filter Jenis')
                    ->options([
                        'gambar' => 'Gambar',
                        'video' => 'Video',
                    ]),
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
            'index' => Pages\ListGaleris::route('/'),
            'create' => Pages\CreateGaleri::route('/create'),
            'view' => Pages\ViewGaleri::route('/{record}'),
            'edit' => Pages\EditGaleri::route('/{record}/edit'),
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
