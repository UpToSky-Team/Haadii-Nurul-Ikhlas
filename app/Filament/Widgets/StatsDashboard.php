<?php

namespace App\Filament\Widgets;

use App\Models\Artikel;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\User;
use App\Models\UserDonatur;
use App\Models\UserRegistration;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsDashboard extends BaseWidget
{
    protected static bool $isLazy = false;
    protected static ?int $sort = 1;
    protected function getStats(): array
    {
        $countBerita = Berita::count();
        return [
            Stat::make('Total Berita', Berita::count())
                ->description('Jumlah semua berita')
                ->descriptionIcon('heroicon-m-newspaper', IconPosition::Before)
                ->color('info'),
            
                Stat::make('Total Artikel', value: Artikel::count())
                ->description('Jumlah semua artikel')
                ->descriptionIcon('heroicon-m-document-text', position: IconPosition::Before)
                ->color('success'),

            Stat::make('Total Galeri', Galeri::count())
                ->description('Jumlah gambar & video')
                ->descriptionIcon('heroicon-m-photo', IconPosition::Before)
                ->color('success'),

            Stat::make('Total Pengguna', User::count())
                ->description('Jumlah pengguna terdaftar')
                ->descriptionIcon('heroicon-m-user-group', IconPosition::Before)
                ->color('warning'),

            Stat::make('Total Donasi', 'Rp ' . number_format(UserDonatur::sum('jumlah_donasi'), 0, ',', '.'))
                ->description('Jumlah total donasi')
                ->descriptionIcon('heroicon-m-currency-dollar', IconPosition::Before)
                ->color('primary'),

            Stat::make('Jumlah Pendaftar', UserRegistration::count())
                ->description('Jumlah total pendaftar')
                ->descriptionIcon('heroicon-m-user-plus', IconPosition::Before)
                ->color('primary'),
        ];
    }
}
