<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StatusRegistrationResource\Pages;
use App\Filament\Resources\StatusRegistrationResource\RelationManagers;
use App\Models\StatusRegistration;
use Filament\Forms;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
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
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class StatusRegistrationResource extends Resource
{
    protected static ?string $model = StatusRegistration::class;

    protected static ?string $pluralLabel = 'Status Registrasi';
    protected static ?string $navigationLabel = 'Status Registrasi';

    protected static ?string $navigationIcon = 'heroicon-o-check-circle';
    protected static ?string $navigationGroup = 'Program';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('id_admin')
                    ->default(Auth::user()->id_admin)
                    ->dehydrated(true),
                Select::make('status')
                    ->options([
                        'aprove' => 'Aprove',
                        'pending' => 'Pending',
                        'rejected' => 'Rejected',
                    ])
                    ->native(false),
                RichEditor::make('keterangan')
                    ->label('Keterangan')
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
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('userRegistrations.nama_anak')
                    ->label('Nama Pendaftar')
                    ->searchable(),
                TextColumn::make('status')
                    ->sortable(),
                TextColumn::make('users.name')  // Menampilkan nama admin
                    ->label('Diverifikasi Oleh')
                    ->searchable(),
                TextColumn::make('keterangan')  // Menampilkan nama admin
                    ->label('Keterangan')
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
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->with(['users', 'userRegistrations'])
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);;
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
            'index' => Pages\ListStatusRegistrations::route('/'),
            'create' => Pages\CreateStatusRegistration::route('/create'),
            'view' => Pages\ViewStatusRegistration::route('/{record}'),
            'edit' => Pages\EditStatusRegistration::route('/{record}/edit'),
        ];
    }
}
