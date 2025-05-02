<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\StatsWidget;
use App\Filament\Widgets\StudentChartWidget;
use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Widgets\AccountWidget;

class Dashboard extends BaseDashboard
{
    public function getWidgets(): array
    {
        return [
            AccountWidget::class,
            StatsWidget::class,
            StudentChartWidget::class,
        ];
    }
}