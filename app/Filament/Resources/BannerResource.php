<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BannerResource\Pages;
use App\Filament\Resources\BannerResource\RelationManagers;
use App\Models\Banner;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
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
use Illuminate\Support\Facades\Auth;

class BannerResource extends Resource
{
    protected static ?string $model = Banner::class;

    protected static ?string $pluralLabel = 'Banner';
    protected static ?string $navigationLabel = 'Banner';

    protected static ?string $navigationIcon = 'heroicon-o-viewfinder-circle';
    protected static ?string $navigationGroup = 'Publikasi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('id_admin')
                ->default(Auth::user()->id_admin),
                FileUpload::make('banner')
                    ->label('Pilih Gambar Banner')
                    ->required()
                    ->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '19:6'
                    ])
                    ->imageEditorViewportWidth('1900')
                    ->imageEditorViewportHeight('600')
                    ->directory('banner')
                    ->visibility('public'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('banner')
                    ->label('Gambar Banner')
                    ->searchable()
                    ->stacked(),
                TextColumn::make('users.name')
                    ->label('Pengupload Banner')
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
            'index' => Pages\ListBanners::route('/'),
            'create' => Pages\CreateBanner::route('/create'),
            'view' => Pages\ViewBanner::route('/{record}'),
            'edit' => Pages\EditBanner::route('/{record}/edit'),
        ];
    }
}
