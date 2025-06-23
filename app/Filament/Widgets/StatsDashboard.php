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
use Illuminate\Support\Facades\Auth;

class StatsDashboard extends BaseWidget
{
    protected static bool $isLazy = false;
    protected static ?int $sort = 1;
    protected function getStats(): array
    {
        if (Auth::user()->role == 'admin') {
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
                Stat::make('Total Donasi', 'Rp ' . number_format(UserDonatur::sum('jumlah_donasi'), 0, ',', '.'))
                    ->description('Jumlah total donasi')
                    ->descriptionIcon('heroicon-m-currency-dollar', IconPosition::Before)
                    ->color('primary'),

                Stat::make('Donasi Hari Ini', 'Rp ' . number_format(UserDonatur::whereDate('created_at', now()->toDateString())->sum('jumlah_donasi'), 0, ',', '.'))
                    ->description('Jumlah donasi yang diterima hari ini')
                    ->descriptionIcon('heroicon-m-calendar-days', IconPosition::Before)
                    ->color('success'),

                Stat::make('Donasi Minggu Ini', 'Rp ' . number_format(UserDonatur::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->sum('jumlah_donasi'), 0, ',', '.'))
                    ->description('Jumlah donasi yang diterima minggu ini')
                    ->descriptionIcon('heroicon-m-calendar', IconPosition::Before)
                    ->color('info'),

                Stat::make('Donasi Bulan Ini', 'Rp ' . number_format(UserDonatur::whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->sum('jumlah_donasi'), 0, ',', '.'))
                    ->description('Jumlah donasi yang diterima bulan ini')
                    ->descriptionIcon('heroicon-m-calendar', IconPosition::Before)
                    ->color('warning'),
                Stat::make('Jumlah Pendaftar', UserRegistration::count())
                    ->description('Jumlah total pendaftar')
                    ->descriptionIcon('heroicon-m-user-plus', IconPosition::Before)
                    ->color('primary'),

                Stat::make('Pendaftar Hari Ini', UserRegistration::whereDate('created_at', now()->toDateString())->count())
                    ->description('Jumlah pendaftar baru hari ini')
                    ->descriptionIcon('heroicon-m-calendar-days', IconPosition::Before)
                    ->color('success'),

                Stat::make('Pendaftar Minggu Ini', UserRegistration::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->count())
                    ->description('Jumlah pendaftar baru minggu ini')
                    ->descriptionIcon('heroicon-m-calendar', IconPosition::Before)
                    ->color('info'),

                Stat::make('Pendaftar Bulan Ini', UserRegistration::whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->count())
                    ->description('Jumlah pendaftar baru bulan ini')
                    ->descriptionIcon('heroicon-m-calendar', IconPosition::Before)
                    ->color('warning'),
                Stat::make('Total Pengguna', User::count())
                    ->description('Jumlah pengguna terdaftar')
                    ->descriptionIcon('heroicon-m-user-group', IconPosition::Before)
                    ->color('warning'),
            ];
        }

        if (Auth::user()->role == 'bendahara') {
            return [
                Stat::make('Total Donasi', 'Rp ' . number_format(UserDonatur::sum('jumlah_donasi'), 0, ',', '.'))
                    ->description('Jumlah total donasi')
                    ->descriptionIcon('heroicon-m-currency-dollar', IconPosition::Before)
                    ->color('primary'),

                Stat::make('Donasi Hari Ini', 'Rp ' . number_format(UserDonatur::whereDate('created_at', now()->toDateString())->sum('jumlah_donasi'), 0, ',', '.'))
                    ->description('Jumlah donasi yang diterima hari ini')
                    ->descriptionIcon('heroicon-m-calendar-days', IconPosition::Before)
                    ->color('success'),

                Stat::make('Donasi Minggu Ini', 'Rp ' . number_format(UserDonatur::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->sum('jumlah_donasi'), 0, ',', '.'))
                    ->description('Jumlah donasi yang diterima minggu ini')
                    ->descriptionIcon('heroicon-m-calendar', IconPosition::Before)
                    ->color('info'),

                Stat::make('Donasi Bulan Ini', 'Rp ' . number_format(UserDonatur::whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->sum('jumlah_donasi'), 0, ',', '.'))
                    ->description('Jumlah donasi yang diterima bulan ini')
                    ->descriptionIcon('heroicon-m-calendar', IconPosition::Before)
                    ->color('warning'),
            ];
        }


        if (Auth::user()->role == 'humas') {
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
            ];
        }

        if (Auth::user()->role == 'regis') {
            return [
                Stat::make('Jumlah Pendaftar', UserRegistration::count())
                    ->description('Jumlah total pendaftar')
                    ->descriptionIcon('heroicon-m-user-plus', IconPosition::Before)
                    ->color('primary'),

                Stat::make('Pendaftar Hari Ini', UserRegistration::whereDate('created_at', now()->toDateString())->count())
                    ->description('Jumlah pendaftar baru hari ini')
                    ->descriptionIcon('heroicon-m-calendar-days', IconPosition::Before)
                    ->color('success'),

                Stat::make('Pendaftar Minggu Ini', UserRegistration::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->count())
                    ->description('Jumlah pendaftar baru minggu ini')
                    ->descriptionIcon('heroicon-m-calendar', IconPosition::Before)
                    ->color('info'),

                Stat::make('Pendaftar Bulan Ini', UserRegistration::whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->count())
                    ->description('Jumlah pendaftar baru bulan ini')
                    ->descriptionIcon('heroicon-m-calendar', IconPosition::Before)
                    ->color('warning'),
            ];
        }

        return [
            ''
        ];
    }
}
