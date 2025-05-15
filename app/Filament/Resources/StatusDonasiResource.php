<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StatusDonasiResource\Pages;
use App\Filament\Resources\StatusDonasiResource\RelationManagers;
use App\Models\StatusDonasi;
use Filament\Forms;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ForceDeleteAction;
use Filament\Tables\Actions\ForceDeleteBulkAction;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Actions\RestoreBulkAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class StatusDonasiResource extends Resource
{
    protected static ?string $model = StatusDonasi::class;

    protected static ?string $pluralLabel = 'Status Donasi';
    protected static ?string $navigationLabel = 'Status Donasi';

    protected static ?string $navigationIcon = 'heroicon-o-check-circle';
    protected static ?string $navigationGroup = 'Donasi';


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
                    ->native(false)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('userDonaturs.nama')
                    ->label('Nama Donatur')
                    ->searchable(),

                TextColumn::make('status')
                    ->sortable(),

                TextColumn::make('users.name')  // Menampilkan nama admin
                    ->label('Diverifikasi Oleh')
                    ->searchable(),

            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->actions([
                ViewAction::make()
                    ->label('Lihat'),
                EditAction::make()
                    ->label('Edit'),
                ForceDeleteAction::make(),
                RestoreAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->with(['users', 'userDonaturs'])
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
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
            'index' => Pages\ListStatusDonasis::route('/'),
            'view' => Pages\ViewStatusDonasi::route('/{record}'),
            'edit' => Pages\EditStatusDonasi::route('/{record}/edit'),
        ];
    }
}
