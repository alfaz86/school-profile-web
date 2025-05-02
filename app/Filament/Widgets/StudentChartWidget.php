<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Student;
use Carbon\Carbon;

class StudentChartWidget extends ChartWidget
{
    protected static ?string $heading = 'Total Siswa per Kelas';

    protected function getType(): string
    {
        return 'bar';
    }

    protected function getData(): array
    {
        $classes = ['1', '2', '3', '4', '5', '6'];

        $data = Student::selectRaw('class, COUNT(*) as total')
            ->whereIn('class', $classes)
            ->groupBy('class')
            ->pluck('total', 'class');

        $counts = collect($classes)->map(fn($class) => $data[$class] ?? 0);

        return [
            'labels' => $classes,
            'datasets' => [
                [
                    'label' => 'Jumlah Siswa per Kelas',
                    'data' => $counts,
                    'backgroundColor' => 'rgba(56, 162, 255, 0.2)',
                    'borderColor' => 'rgba(56, 162, 255, 1)',
                ],
            ],
        ];
    }

    public function getColumnSpan(): int|string|array
    {
        return 'full';
    }
}
