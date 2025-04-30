<?php
namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Models\Gallery;
use App\Models\Image;
use Filament\Forms\Components\FileUpload;
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

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?int $navigationSort = 4;

    public static function getModelLabel(): string
    {
        return 'Galeri';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Galeri';
    }

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informasi Galeri')
                    ->description('Masukkan detail galeri foto')
                    ->icon('heroicon-o-photo')
                    ->schema([
                        TextInput::make('title')
                            ->label('Judul Galeri')
                            ->placeholder('Contoh: Guru, Siswa, Pramuka')
                            ->required()
                            ->columnSpan(1),

                        TextInput::make('headline')
                            ->label('Headline')
                            ->placeholder('Contoh: Kegiatan Pramuka, Kegiatan Belajar Mengajar')
                            ->required()
                            ->columnSpan(1),

                        TextInput::make('description')
                            ->label('Deskripsi')
                            ->placeholder('Contoh: Beberapa Foto Guru dan Siswa')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Foto Galeri')
                    ->description('Unggah dan lihat foto galeri')
                    ->icon('heroicon-o-camera')
                    ->schema([
                        FileUpload::make('images.file_data')
                            ->label('Upload Foto Baru')
                            ->preserveFilenames()
                            ->image()
                            ->columnSpanFull()
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
                        // dd($form->getRecord()->images),
                        View::make('livewire.components.image-preview')
                            ->hidden(fn($record) => ! $record || $record->images->isEmpty())
                            ->viewData([
                                'fileData' => $form->getRecord()?->images->first()?->file_data,
                                'fileName' => $form->getRecord()?->images->first()?->file_name,
                            ])
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('images.file_data')
                    ->label('Foto Guru')
                    ->getStateUsing(function ($record) {
                        // Ambil data binary dari relasi images
                        $fileData = optional($record->images->first())->file_data;

                        if (! $fileData) {
                            return null;
                        }

                        // Ubah menjadi base64
                        $base64 = base64_encode($fileData);

                                               // Tentukan mime type. Misalnya: images/jpeg
                        $mime = 'images/jpeg'; // atau images/png, sesuaikan dengan file asli

                        return "data:{$mime};base64,{$base64}";
                    })
                    ->size(50),

                TextColumn::make('title')
                    ->label('Judul')
                    ->sortable()
                    ->searchable()
                    ->limit(50),
                TextColumn::make('headline')
                    ->label('Headline')
                    ->sortable()
                    ->searchable()
                    ->limit(50),
                TextColumn::make('description')
                    ->label('Deskripsi')
                    ->sortable()
                    ->searchable()
                    ->limit(50),
                TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime(),
                TextColumn::make('updated_at')
                    ->label('Updated At')
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
            'index'  => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit'   => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}
