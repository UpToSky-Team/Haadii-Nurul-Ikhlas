<?php

namespace App\Filament\Exports;

use App\Models\Artikel;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class ArtikelExporter extends Exporter
{
    protected static ?string $model = Artikel::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('judul')->label('Judul Artikel'),
            ExportColumn::make('content')->label('Isi Artikel'),
            ExportColumn::make('users.name')->label('Nama Admin'),
            ExportColumn::make('created_at')->label('Tanggal Dibuat'),
            ExportColumn::make('updated_at')->label('Tanggal Diperbarui'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your artikel export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}
