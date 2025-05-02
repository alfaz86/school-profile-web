<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeacherResource\Pages;
use App\Models\Image;
use App\Models\Teacher;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\View;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;

class TeacherResource extends Resource
{
    protected static ?string $model = Teacher::class;

    protected static ?int $navigationSort = 2;

    public static function getModelLabel(): string
    {
        return 'Guru';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Guru';
    }

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $navigationLabel = 'Guru';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informasi Guru')
                    ->description('Lengkapi data guru berikut ini.')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('name')
                                    ->label('Nama')
                                    ->placeholder('Contoh: John Doe')
                                    ->required(),

                                TextInput::make('position')
                                    ->label('Jabatan')
                                    ->placeholder('Contoh: Guru Kelas 1')
                                    ->required(),
                            ]),
                    ]),

                Section::make('Foto Guru')
                    ->description('Upload foto terbaru guru.')
                    ->schema([
                        FileUpload::make('image.file_data')
                            ->label('Upload Foto Baru')
                            ->preserveFilenames()
                            ->image()
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg'])
                            ->rules(['image', 'mimes:jpeg,png,jpg', 'max:5120'])
                            ->saveUploadedFileUsing(function ($file, $get, $set) {
                                $path = Storage::disk('public')->putFile('', $file);

                                session()->flash('image_data', [
                                    'file_data' => file_get_contents($file->getRealPath()),
                                    'file_name' => $file->getClientOriginalName(),
                                    'file_path' => $path,
                                ]);

                                return $path;
                            }),

                        View::make('livewire.components.image-preview')
                            ->hidden(fn($record) => ! $record)
                            ->viewData([
                                'fileData' => $form->getRecord()?->image?->file_data ?? null,
                                'fileName' => $form->getRecord()?->image?->file_name ?? null,
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
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
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListTeachers::route('/'),
            'create' => Pages\CreateTeacher::route('/create'),
            'edit'   => Pages\EditTeacher::route('/{record}/edit'),
        ];
    }
}
