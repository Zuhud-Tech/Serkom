<?php

namespace App\Filament\Widgets;

use App\Models\Artikel;
use App\Models\Galeri;
use App\Models\Layanan;
use App\Models\Penilaian;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Support\Icons\Heroicon;

class StatsDashbord extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Artikel',Artikel::count())
            ->description('Jumlah seluruh artikel')
            ->icon('heroicon-o-document-text'),
                
            Stat::make('Total Galeri', Galeri::count())
            ->description('Jumlah seluruh galeri')
            ->icon('heroicon-o-photo'),

            Stat::make('Total Layanan', Layanan::count())
            ->description('Jumlah seluruh layanan')
            ->icon('heroicon-o-user-group') ,

            Stat::make('Total Penilaian', Penilaian::count())
            ->description('Jumlah seluruh penilaian'),
                
        ];
    }
}
