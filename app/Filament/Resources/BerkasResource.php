<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BerkasResource\Pages;
use App\Filament\Resources\BerkasResource\RelationManagers;
use App\Models\Berkas;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
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
use SebastianBergmann\CodeUnit\FileUnit;

class BerkasResource extends Resource
{
    protected static ?string $model = Berkas::class;

    protected static ?string $pluralLabel = 'Daftar Berkas';
    protected static ?string $navigationLabel = 'Berkas';

    protected static ?string $navigationIcon = 'heroicon-o-folder';
    protected static ?string $navigationGroup = 'Program';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('id_registration')
                    ->label('Nama Anak')
                    ->relationship('userRegistration', 'nama_anak')
                    ->searchable()
                    ->preload()
                    ->native(false)
                    ->default(null),
                FileUpload::make('foto_siswa')
                    ->label('Foto Siswa')
                    ->image()
                    ->imageEditor()
                    ->directory('berkas/foto_siswa')
                    ->visibility('public')
                    ->columnSpanFull()
                    ->default(null),
                FileUpload::make('akta_lahir')
                    ->label('Akta Kelahiran')
                    ->acceptedFileTypes(['application/pdf'])
                    ->maxSize(5000)
                    ->directory('berkas/akta_lahir')
                    ->visibility('public')
                    ->default(null),
                FileUpload::make('kartu_keluarga')
                    ->label('Kartu Keluarga')
                    ->acceptedFileTypes(['application/pdf'])
                    ->maxSize(5000)
                    ->directory('berkas/kartu_keluarga')
                    ->visibility('public')
                    ->default(null),
                FileUpload::make('ijazah')
                    ->label('Ijazah')
                    ->acceptedFileTypes(['application/pdf'])
                    ->maxSize(5000)
                    ->directory('berkas/ijazah')
                    ->visibility('public')
                    ->default(null),
                FileUpload::make('dokumen_tulis')
                    ->label('Dokumen Tulis')
                    ->acceptedFileTypes(['application/pdf'])
                    ->maxSize(5000)
                    ->directory('berkas/dukumen_tulis')
                    ->visibility('public')
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('userRegistration.nama_anak')
                    ->label('Nama Anak')
                    ->searchable(),
                // ImageColumn::make('foto_siswa')
                //     ->label('Foto Siswa')
                //     ->searchable(),
                ImageColumn::make('foto_siswa')
                    ->label('Foto Anak')
                    ->url(fn ($record) => asset('storage/' . $record->foto_siswa)) // gambar jadi link
                    ->openUrlInNewTab()
                    ->searchable()
                    ->sortable(),
                // TextColumn::make('akta_lahir')
                //     ->label('Akta Kelahiran')
                //     ->searchable(),
                TextColumn::make('akta_lahir')
                    ->label('Akta Kelahiran')
                    ->url(fn ($record) => asset('storage/' . $record->akta_lahir))
                    ->openUrlInNewTab()
                    ->formatStateUsing(fn (string $state) => 'Lihat')
                    ->color('primary') // -> warna teksnya
                    ->searchable()
                    ->sortable(),
                // TextColumn::make('kartu_keluarga')
                //     ->label('Kartu Keluarga')
                //     ->searchable(),
                TextColumn::make('kartu_keluarga')
                    ->label('Kartu Keluarga')
                    ->url(fn ($record) => asset('storage/' . $record->kartu_keluarga))
                    ->openUrlInNewTab()
                    ->formatStateUsing(fn (string $state) => 'Lihat')
                    ->color('primary') // -> warna teksnya
                    ->searchable()
                    ->sortable(),
                // TextColumn::make('ijazah')
                //     ->label('Ijazah')
                //     ->searchable(),
                TextColumn::make('ijazah')
                    ->label('Ijazah')
                    ->url(fn ($record) => asset('storage/' . $record->ijazah))
                    ->openUrlInNewTab()
                    ->formatStateUsing(fn (string $state) => 'Lihat')
                    ->color('primary') // -> warna teksnya
                    ->searchable()
                    ->sortable(),
                // TextColumn::make('dukumen_tulis')
                //     ->label('Dokumen Tulis')
                //     ->searchable(),
                TextColumn::make('dokumen_tulis')
                    ->label('Dokumen Tertelis')
                    ->url(fn ($record) => asset('storage/' . $record->dokumen_tulis))
                    ->openUrlInNewTab()
                    ->formatStateUsing(fn (string $state) => 'Lihat')
                    ->color('primary') // -> warna teksnya
                    ->searchable()
                    ->sortable(),
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
            'index' => Pages\ListBerkas::route('/'),
            'create' => Pages\CreateBerkas::route('/create'),
            'view' => Pages\ViewBerkas::route('/{record}'),
            'edit' => Pages\EditBerkas::route('/{record}/edit'),
        ];
    }
}
