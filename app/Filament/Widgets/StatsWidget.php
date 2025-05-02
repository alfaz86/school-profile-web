<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\StudentResource;
use App\Filament\Resources\TeacherResource;
use App\Filament\Resources\UserResource;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsWidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Jumlah Pengguna', User::where('role', 'admin')->count())
                ->description('Klik untuk melihat')
                ->url(UserResource::getUrl())
                ->icon('heroicon-o-user'),
            Stat::make('Jumlah Siswa', Student::count())
                ->description('Klik untuk melihat')
                ->url(StudentResource::getUrl())
                ->icon('heroicon-o-user'),
            Stat::make('Jumlah Guru', Teacher::count())
                ->description('Klik untuk melihat')
                ->url(TeacherResource::getUrl())
                ->icon('heroicon-o-user'),
        ];
    }
}
