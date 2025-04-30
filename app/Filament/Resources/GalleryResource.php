<?php
namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Models\Gallery;
use App\Models\Image;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\HtmlString;

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
                    ->description('Masukkan detail galeri foto.')
                    ->icon('heroicon-o-photo')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('title')
                                    ->label('Judul Galeri')
                                    ->placeholder('Contoh: Guru, Siswa, Pramuka')
                                    ->required()
                                    ->reactive()
                                    ->afterStateUpdated(function ($state, callable $set, callable $get) {
                                        if (empty($get('headline'))) {
                                            $set('headline', $state);
                                        }
                                    }),

                                TextInput::make('headline')
                                    ->label('Headline')
                                    ->placeholder('Contoh: Kegiatan Pramuka, Kegiatan Belajar Mengajar')
                                    ->required(),
                            ]),

                        Grid::make(1)
                            ->schema([
                                TextInput::make('description')
                                    ->label('Deskripsi')
                                    ->placeholder('Contoh: Beberapa Foto Guru dan Siswa'),
                            ]),
                    ])
                    ->columns(1),

                Section::make('Foto Galeri')
                    ->description('Unggah dan lihat foto galeri.')
                    ->icon('heroicon-o-camera')
                    ->schema([
                        Grid::make(1)
                            ->schema([
                                Repeater::make('images')
                                    ->label('Daftar Foto')
                                    ->schema([
                                        FileUpload::make('file_data')
                                            ->label('Upload Foto Baru')
                                            ->preserveFilenames()
                                            ->image()
                                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg'])
                                            ->rules(['image', 'mimes:jpeg,png,jpg', 'max:5120'])
                                            ->visible(fn($state, $get) => $get('image_id') === null),

                                        Placeholder::make('')
                                            ->content(function ($state, $get) {
                                                $imageId = $get('image_id');
                                                $image   = Image::where('id', $imageId)->first();

                                                return new HtmlString(
                                                    view('livewire.components.image-preview', [
                                                        'imageId'  => $imageId,
                                                        'fileData' => $image->file_data ?? null,
                                                        'fileName' => $image->file_name ?? null,
                                                    ])->render()
                                                );
                                            })
                                            ->visible(function ($livewire, $state, $get) {
                                                if ($livewire instanceof \Filament\Resources\Pages\EditRecord) {
                                                    return $get('image_id') !== null;
                                                }
                                                return false;
                                            }),
                                    ])
                                    ->addActionLabel('Tambah Foto')
                                    ->collapsible()
                                    ->defaultItems(0)
                                    ->columns(1),
                            ]),
                    ])
                    ->columns(1),
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
                        $fileData = $record?->images?->sortByDesc('created_at')->first()?->file_data;

                        if (! $fileData) {
                            return null;
                        }
                        // Ubah menjadi base64
                        $base64 = base64_encode($fileData);
                        $mime   = 'images/jpeg'; // atau images/png, sesuaikan dengan file asli

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
