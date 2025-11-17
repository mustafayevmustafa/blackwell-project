<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PanaProductResource\Pages;
use App\Models\PanaProduct;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PanaProductResource extends Resource
{
    protected static ?string $model = PanaProduct::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube';
    protected static ?string $navigationLabel = 'Pana Products';
    protected static ?string $pluralModelLabel = 'Pana Products';
    protected static ?string $modelLabel = 'Pana Product';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Titles (Multi-language)')
                    ->schema([
                        Forms\Components\TextInput::make('title.az')
                            ->label('Title (AZ)')
                            ->required(),

                        Forms\Components\TextInput::make('title.en')
                            ->label('Title (EN)')
                            ->required(),

                        Forms\Components\TextInput::make('title.ru')
                            ->label('Title (RU)'),

                        Forms\Components\TextInput::make('title.tr')
                            ->label('Title (TR)'),

                        Forms\Components\TextInput::make('title.de')
                            ->label('Title (DE)'),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Description (Multi-language)')
                    ->schema([
                        Forms\Components\Textarea::make('description.az')
                            ->label('Description (AZ)')
                            ->rows(5)
                            ->required(),

                        Forms\Components\Textarea::make('description.en')
                            ->label('Description (EN)')
                            ->rows(5)
                            ->required(),

                        Forms\Components\Textarea::make('description.ru')
                            ->label('Description (RU)')
                            ->rows(5),

                        Forms\Components\Textarea::make('description.tr')
                            ->label('Description (TR)')
                            ->rows(5),

                        Forms\Components\Textarea::make('description.de')
                            ->label('Description (DE)')
                            ->rows(5),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Media & Settings')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->label('Product Image')
                            ->image()
                            ->directory('pana-products')
                            ->maxSize(2048),

                        Forms\Components\FileUpload::make('datasheet')
                            ->label('Datasheet (PDF)')
                            ->acceptedFileTypes(['application/pdf'])
                            ->directory('pana-datasheets')
                            ->maxSize(10240),

                        Forms\Components\TextInput::make('order')
                            ->label('Display Order')
                            ->numeric()
                            ->default(0),

                        Forms\Components\Toggle::make('is_active')
                            ->label('Active')
                            ->default(true),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title.en')
                    ->label('Title')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\ImageColumn::make('image')
                    ->label('Image')
                    ->square()
                    ->size(60),

                Tables\Columns\TextColumn::make('order')
                    ->label('Order')
                    ->sortable(),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Created')
                    ->sortable(),
            ])
            ->defaultSort('order')
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
            'index' => Pages\ListPanaProducts::route('/'),
            'create' => Pages\CreatePanaProduct::route('/create'),
            'edit' => Pages\EditPanaProduct::route('/{record}/edit'),
        ];
    }
}
