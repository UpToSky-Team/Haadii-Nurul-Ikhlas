<?php

namespace App\Filament\Widgets;

use App\Models\UserDonatur;
use Filament\Widgets\ChartWidget;

class DonasiChart extends ChartWidget
{
    protected static ?string $heading = 'Donasi';
    protected static bool $isLazy = false;
    protected static ?int $sort = 2;

    protected function getData(): array
    {
        $donasiPerBulan = UserDonatur::selectRaw('MONTH(created_at) as bulan, SUM(jumlah_donasi) as Total')->groupBy('bulan')->orderBy('bulan')->pluck('Total', 'bulan');

        $data = array_fill(1, 12, 0);
        foreach ($donasiPerBulan as $bulan => $total) {
            $data[$bulan] = $total;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Total Donasi (Rp)',
                    'data' => array_values($data),
                    'backgroundColor' => '#34D399', // green-400
                    'borderColor' => '#10B981',     // green-500
                ],
            ],
            'labels' => [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'Mei',
                'Jun',
                'Jul',
                'Agu',
                'Sep',
                'Okt',
                'Nov',
                'Des'
            ],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
