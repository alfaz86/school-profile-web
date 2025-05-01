<?php

namespace App\Filament\Widgets;

use App\Models\Student as ModelsStudent;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class StudentWidget extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';
    protected static ?int $sort = 1;
    protected static ?string $heading = 'Siswa';
    public function table(Table $table): Table
    {
        return $table
            ->query(ModelsStudent::query())
            ->columns([
                TextColumn::make('name')
                    ->label('Nama Siswa')
                    ->sortable()
                    ->searchable()
                    ->weight('bold'),

                TextColumn::make('nis')
                    ->label('NIS')
                    ->searchable()
                    ->copyable()
                    ->copyMessage('NIS disalin ke clipboard')
                    ->alignCenter(),

                TextColumn::make('gender')
                    ->label('Jenis Kelamin')
                    ->alignCenter()
                    ->sortable()->formatStateUsing(function ($state) {
                        return match ($state) {
                            'male'   => 'Laki-laki',
                            'female' => 'Perempuan',
                        };
                    }),

                TextColumn::make('class')
                    ->label('Kelas')
                    ->sortable()
                    ->alignCenter(),

                TextColumn::make('created_at')
                    ->label('Bergabung')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->alignCenter(),
            ])
            ->striped()
            ->deferLoading()
            ->defaultSort('created_at', 'desc')
            ->emptyStateHeading('Belum ada data siswa')
            ->emptyStateIcon('heroicon-o-user-group');
    }
}
