<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentResource\Pages;
use App\Models\Student;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static ?int $navigationSort = 3;

    public static function getModelLabel(): string
    {
        return 'Siswa';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Siswa';
    }

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationLabel = 'Siswa';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informasi Pribadi')
                    ->description('Silakan isi data pribadi siswa.')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('name')
                                    ->label('Nama Lengkap')
                                    ->placeholder('Contoh: John Doe')
                                    ->required(),

                                TextInput::make('nis')
                                    ->label('NISN')
                                    ->placeholder('Contoh: 123456')
                                    ->numeric()
                                    ->required()
                                    ->unique(Student::class, 'nis', ignoreRecord: true),
                            ]),
                    ]),

                Section::make('Informasi Tambahan')
                    ->description('Lengkapi data tambahan siswa.')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                Select::make('gender')
                                    ->label('Jenis Kelamin')
                                    ->placeholder('Pilih Jenis Kelamin')
                                    ->options([
                                        'male'   => 'Laki-laki',
                                        'female' => 'Perempuan',
                                    ])
                                    ->required(),

                                TextInput::make('class')
                                    ->label('Kelas')
                                    ->numeric()
                                    ->placeholder('Contoh: 1')
                                    ->required(),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nama')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('nis')
                    ->label('NISN')
                    ->searchable(),

                TextColumn::make('gender')
                    ->label('Jenis Kelamin')
                    ->sortable()
                    ->searchable()
                    ->formatStateUsing(function ($state) {
                        return match ($state) {
                            'male'   => 'Laki-laki',
                            'female' => 'Perempuan',
                        };
                    }),

                TextColumn::make('class')
                    ->label('Kelas')
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
            'index'  => Pages\ListStudents::route('/'),
            'create' => Pages\CreateStudent::route('/create'),
            'edit'   => Pages\EditStudent::route('/{record}/edit'),
        ];
    }
}
