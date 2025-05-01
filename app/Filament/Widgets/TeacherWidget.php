<?php

namespace App\Filament\Widgets;

use App\Models\Teacher;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Support\HtmlString;

class TeacherWidget extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';
    protected static ?int $sort = 2;
    protected static ?string $heading = 'Daftar Guru';
    protected static ?string $description = 'Data seluruh guru yang terdaftar dalam sistem';

    public function table(Table $table): Table
    {
        return $table
            ->query(Teacher::query())
            ->columns([
                ImageColumn::make('image.file_data')
                    ->label('Foto Guru')
                    ->getStateUsing(function ($record) {
                        // Ambil data binary dari relasi image
                        $fileData = optional($record->image)->file_data;

                        if (! $fileData) {
                            return null;
                        }

                        // Ubah menjadi base64
                        $base64 = base64_encode($fileData);

                        // Tentukan mime type. Misalnya: image/jpeg
                        $mime = 'image/jpeg'; // atau image/png, sesuaikan dengan file asli

                        return "data:{$mime};base64,{$base64}";
                    })
                    ->size(50),

                TextColumn::make('name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('position')
                    ->label('Jabatan')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Tanggal Bergabung')
                    ->dateTime(),

                TextColumn::make('updated_at')
                    ->label('Terakhir Diperbarui')
                    ->dateTime(),
            ])
            ->striped()
            ->deferLoading()
            ->defaultSort('name', 'asc');
    }
}
