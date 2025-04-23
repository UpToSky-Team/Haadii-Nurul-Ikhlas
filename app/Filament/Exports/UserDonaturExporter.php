<?php

namespace App\Filament\Exports;

use App\Models\UserDonatur;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class UserDonaturExporter extends Exporter
{
    protected static ?string $model = UserDonatur::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('nama')->label('Nama Donatur'),
            ExportColumn::make('email'),
            ExportColumn::make('phone'),
            ExportColumn::make('jenisDonasis.jenis')->label('Jenis Donasi'),
            ExportColumn::make('bank_name')->label('Nama Bank'),
            ExportColumn::make('jumlah_donasi')->label('Jumlah Donasi'),
            ExportColumn::make('status_verifikasi')->label('Status Verifikasi'),
            ExportColumn::make('users.name')->label('Admin Name')->label('Admin'),
            ExportColumn::make('created_at'),
            ExportColumn::make('updated_at'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your user donatur export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}
