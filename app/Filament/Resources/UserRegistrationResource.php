<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserRegistrationResource\Pages;
use App\Filament\Resources\UserRegistrationResource\RelationManagers;
use App\Models\UserRegistration;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Hidden;
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
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class UserRegistrationResource extends Resource
{
    protected static ?string $model = UserRegistration::class;

    protected static ?string $pluralLabel = 'Data Pendaftaran';
    protected static ?string $navigationLabel = 'Data Pendaftaran';

    protected static ?string $navigationIcon = 'heroicon-o-identification';
    protected static ?string $navigationGroup = 'Program';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('id_admin')
                    ->default(Auth::user()->id_admin)
                    ->required(),
                Hidden::make('statusRegistration.id_admin')
                    ->default(Auth::user()->id_admin),
                TextInput::make('nama_anak')
                    ->label('Nama Anak')
                    ->required()
                    ->maxLength(255),
                TextInput::make('no_hp')
                    ->label('Nomer Telepon')
                    ->required()
                    ->maxLength(255),
                TextInput::make('nama_wali')
                    ->label('Nama Wali')
                    ->required()
                    ->maxLength(255),
                TextInput::make('no_hp_wali')
                    ->label('Nomer Telepon Wali')
                    ->required()
                    ->maxLength(255),
                TextInput::make('email_anak')
                    ->label('Email Anak')
                    ->email()
                    ->required()
                    ->maxLength(255),
                TextInput::make('tempat_lahir')
                    ->label('Tempat Lahir')
                    ->required()
                    ->maxLength(255),
                DatePicker::make('tanggal_lahir')
                    ->label('Tanggal Lahir')
                    ->required(),
                TextInput::make('NIK')
                    ->label('Nomer Induk Keluarga (NIK)')
                    ->required()
                    ->maxLength(16),
                TextInput::make('nama_sekolah_asal')
                    ->label('Nama Sekolah Asal (Boleh Kosong)')
                    ->maxLength(255)
                    ->default(null),
                TextInput::make('NPSN_sekolah_asal')
                    ->label('NPSN Sekolah Asal (Boleh Kosong)')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_anak')
                    ->label('Nama Anak')
                    ->searchable(),
                TextColumn::make('no_hp')
                    ->label('Nomer Telepon')
                    ->searchable(),
                TextColumn::make('nama_wali')
                    ->label('Nama Wali')
                    ->searchable(),
                TextColumn::make('no_hp_wali')
                    ->label('Nomer Telepon Wali')
                    ->searchable(),
                TextColumn::make('email_anak')
                    ->label('Email Anak')
                    ->searchable(),
                TextColumn::make('tempat_lahir')
                    ->label('Tempat Lahir')
                    ->searchable(),
                TextColumn::make('tanggal_lahir')
                    ->label('Tanggal Lahir')
                    ->date()
                    ->sortable(),
                TextColumn::make('NIK')
                    ->label('Nomer Induk Keluarga (NIK)')
                    ->searchable(),
                TextColumn::make('nama_sekolah_asal')
                    ->label('Nama Sekolah Asal (Boleh Kosong)')
                    ->searchable(),
                TextColumn::make('NPSN_sekolah_asal')
                    ->label('NPSN Sekolah Asal (Boleh Kosong)')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->label('Tanggal Dibuat')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('updated_at')
                    ->label('Tanggal Diubah')
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
            'index' => Pages\ListUserRegistrations::route('/'),
            'create' => Pages\CreateUserRegistration::route('/create'),
            'view' => Pages\ViewUserRegistration::route('/{record}'),
            'edit' => Pages\EditUserRegistration::route('/{record}/edit'),
        ];
    }
}
