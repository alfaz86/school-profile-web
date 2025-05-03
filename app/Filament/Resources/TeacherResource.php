<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeacherResource\Pages;
use App\Models\Image;
use App\Models\Teacher;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Placeholder;
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
use Illuminate\Support\HtmlString;

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

                        Placeholder::make('')
                            ->content(function ($record, $state, $get) {
                                $imageId = $record->image->id ?? $get('image_id');
                                if ($imageId === null) {
                                    return null;
                                }
                                $image   = Image::where('id', $imageId)->first();

                                return new HtmlString(
                                    view('livewire.components.image-preview', [
                                        'fileName' => $image->file_name ?? null,
                                        'imageUrl' => $imageId ? route('image.stream', [
                                            'id' => $imageId,
                                            'v' => $image->updated_at->timestamp
                                        ]) : null,
                                    ])->render()
                                );
                            })
                            ->visible(function ($record, $livewire, $state, $get) {
                                if ($livewire instanceof \Filament\Resources\Pages\EditRecord) {
                                    return $record?->image?->id !== null;
                                }
                                return false;
                            }),
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
                        $image = $record->image;
                        if (! $image) {
                            return null;
                        }
                        return route('image.stream', [
                            'id' => $image->id,
                            'v' => $image->updated_at->timestamp
                        ]);
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
