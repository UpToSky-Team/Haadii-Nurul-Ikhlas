<?php

namespace App\Filament\Resources;

use App\Filament\Exports\UserDonaturExporter;
use App\Filament\Resources\UserDonaturResource\Pages;
use App\Filament\Resources\UserDonaturResource\RelationManagers;
use App\Models\UserDonatur;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ExportAction;
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
use Illuminate\Support\Facades\Auth;

class UserDonaturResource extends Resource
{
    protected static ?string $model = UserDonatur::class;

    protected static ?string $pluralLabel = 'Data Donasi';
    protected static ?string $navigationLabel = 'Data Donasi';

    protected static ?string $navigationIcon = 'heroicon-o-document-currency-dollar';
    protected static ?string $navigationGroup = 'Donasi';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('id_admin')
                    ->default(Auth::user()->id_admin),
                Hidden::make('statusDonasi.id_admin')
                    ->default(Auth::user()->id_admin),
                TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                TextInput::make('email')
                    ->label('Email (Boleh tidak di isi)')
                    ->email()
                    ->maxLength(255)
                    ->default(null),
                TextInput::make('phone')
                    ->label('Nomer Telepon')
                    ->tel()
                    ->maxLength(255)
                    ->prefix('+62')
                    ->required(),
                Select::make('id_jenis_donasi')
                    ->label('Jenis Donasi')
                    ->relationship('jenisDonasis', 'jenis')
                    ->searchable()
                    ->preload()
                    ->native(false),
                Select::make('id_bank')
                    ->label('Nama Bank')
                    ->relationship('bank', 'nama_bank')
                    ->searchable()
                    ->preload()
                    ->required()
                    ->native(false),
                TextInput::make('jumlah_donasi')
                    ->label('Jumah Donasi')
                    ->maxLength(255)
                    ->required(),
                FileUpload::make('bukti_transfer')
                    ->label('Bukti Transfer (JPG, PNG, PDF)')
                    ->image()
                    ->imageEditor()
                    ->directory('bukti_transfer')
                    ->visibility('public')
                    ->columnSpanFull()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->searchable(),
                TextColumn::make('email')
                    ->searchable(),
                TextColumn::make('phone')
                    ->label('Nomer Telepon')
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
                TextColumn::make('bank.nama_bank')
                    ->label('Nama Bank')
                    ->searchable(),
                TextColumn::make('jumlah_donasi')
                    ->searchable()
                    ->formatStateUsing(fn($state) => number_format($state, 0, ',', '.')),
                TextColumn::make('bukti_transfer')
                    ->label('Bukti Transfer')
                    ->url(fn($record) => asset('storage/' . $record->bukti_transfer))
                    ->openUrlInNewTab()
                    ->formatStateUsing(fn(string $state) => 'Lihat')
                    ->color('primary') // -> warna teksnya
                    ->searchable()
                    ->sortable(),
                TextColumn::make('statusDonasi.status'),
                TextColumn::make('statusDonasi.users.name')
                    ->label('Di Verifikasi Oleh')
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
            ->headerActions([
                ExportAction::make()->exporter(UserDonaturExporter::class)
                    ->label('Ekspor')
                    ->icon('heroicon-o-arrow-down-tray')
                    ->color('success')
                    ->iconPosition('before')
                    ->modalHeading('Ekspor Data Donatur'),
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
            'index' => Pages\ListUserDonaturs::route('/'),
            'create' => Pages\CreateUserDonatur::route('/create'),
            'view' => Pages\ViewUserDonatur::route('/{record}'),
            'edit' => Pages\EditUserDonatur::route('/{record}/edit'),
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
