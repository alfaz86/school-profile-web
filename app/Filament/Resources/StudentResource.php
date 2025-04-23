<?php
namespace App\Filament\Resources;

use App\Filament\Resources\StudentResource\Pages;
use App\Models\Student;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class StudentResource extends Resource
{
    // protected static ?string $model = Student::class;

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
                TextInput::make('name')
                    ->label('Full Name')
                    ->placeholder('e.g. John Doe')
                    ->required(),

                TextInput::make('nis')
                    ->label('NIS')
                    ->placeholder('e.g. 123456')
                    ->numeric()
                    ->required()
                    ->unique(Student::class, 'nis', ignoreRecord: true),

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
                    ->placeholder('e.g. 1')
                    ->required(),
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
                    ->label('NIS')
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
            'index'  => Pages\ListStudents::route('/'),
            'create' => Pages\CreateStudent::route('/create'),
            'edit'   => Pages\EditStudent::route('/{record}/edit'),
        ];
    }
}
