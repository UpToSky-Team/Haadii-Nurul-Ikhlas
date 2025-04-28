<?php

namespace App\Filament\Exports;

use App\Models\Berita;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class BeritaExporter extends Exporter
{
    protected static ?string $model = Berita::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('judul')->label('Judul Berita'),
            ExportColumn::make('slug')->label('Slug'),
            ExportColumn::make('content')->label('Isi Konten'),
            ExportColumn::make('users.name')->label('Nama Admin'),
            ExportColumn::make('created_at')->label('Tanggal Dibuat'),
            ExportColumn::make('updated_at')->label('Tanggal Diperbarui'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your berita export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}
