<?php


namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Models\Testimonial;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Resources\Resource;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static ?string $navigationIcon = 'heroicon-o-star';
    protected static ?string $navigationGroup = 'Content Management';
    protected static ?string $navigationLabel = 'Testimonials';
    protected static ?string $pluralLabel = 'Testimonials';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\FileUpload::make('image')
                    ->label('Avatar')
                    ->image()
                    ->directory('testimonials'),

                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\TextInput::make('surname')->required(),
                Forms\Components\TextInput::make('position')->nullable(),
                Forms\Components\TextInput::make('stars')
                    ->numeric()
                    ->default(5)
                    ->minValue(1)
                    ->maxValue(5),

                Forms\Components\Textarea::make('text')
                    ->rows(6)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Name')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('surname')
                    ->label('Surname')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('position')
                    ->label('Position')
                    ->searchable(),

                Tables\Columns\TextColumn::make('stars')
                    ->label('Stars')
                    ->formatStateUsing(fn($state) => str_repeat('★', $state))
                    ->sortable(),

                Tables\Columns\TextColumn::make('text')
                    ->label('Text')
                    ->limit(50),
            ])
            ->defaultSort('id', 'desc')
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }
}
