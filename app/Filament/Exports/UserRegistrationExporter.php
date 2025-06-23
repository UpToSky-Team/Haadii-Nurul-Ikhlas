<?php

namespace App\Filament\Exports;

use App\Models\UserRegistration;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class UserRegistrationExporter extends Exporter
{
    protected static ?string $model = UserRegistration::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('nama_anak')->label('Nama Anak'),
            ExportColumn::make('no_hp')->label('No. HP'),
            ExportColumn::make('nama_wali')->label('Nama Wali'),
            ExportColumn::make('no_hp_wali')->label('No. HP Wali'),
            ExportColumn::make('email_anak')->label('Email Anak'),
            ExportColumn::make('tempat_lahir')->label('Tempat Lahir'),
            ExportColumn::make('tanggal_lahir')->label('Tanggal Lahir'),
            ExportColumn::make('NIK')->label('NIK'),
            ExportColumn::make('nama_sekolah_asal')->label('Nama Sekolah Asal'),
            ExportColumn::make('NPSN_sekolah_asal')->label('NPSN Sekolah Asal'),
            ExportColumn::make('status_berkas')
                ->label('Status Berkas')
                ->formatStateUsing(fn(string $state): string => match ($state) {
                    'Complete' => 'Lengkap',
                    'notComplete' => 'Belum Lengkap',
                    default => 'Tidak Diketahui',
                }),
            ExportColumn::make('created_at')
                ->label('Dibuat Pada')
                ->formatStateUsing(fn(string $state): string => \Carbon\Carbon::parse($state)->format('d-m-Y H:i')),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your user registration export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}
