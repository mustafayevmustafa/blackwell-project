<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube';
    protected static ?string $navigationLabel = 'Products';
    protected static ?string $pluralModelLabel = 'Products';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // 🌍 Multilingual tabs
                Forms\Components\Tabs::make('Translations')
                    ->columnSpanFull()
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('AZ')
                            ->schema([
                                Forms\Components\TextInput::make('title.az')
                                    ->label('Title (AZ)')
                                    ->maxLength(255),
                                Forms\Components\Textarea::make('content.az')
                                    ->label('Content (AZ)')
                                    ->rows(5),
                            ]),

                        Forms\Components\Tabs\Tab::make('EN')
                            ->schema([
                                Forms\Components\TextInput::make('title.en')
                                    ->label('Title (EN)')
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function ($state, callable $set) {
                                        if ($state) {
                                            $set('slug', Str::slug($state));
                                        }
                                    }),
                                Forms\Components\Textarea::make('content.en')
                                    ->label('Content (EN)')
                                    ->rows(5),
                            ]),

                        Forms\Components\Tabs\Tab::make('RU')
                            ->schema([
                                Forms\Components\TextInput::make('title.ru')
                                    ->label('Title (RU)')
                                    ->maxLength(255),
                                Forms\Components\Textarea::make('content.ru')
                                    ->label('Content (RU)')
                                    ->rows(5),
                            ]),

                        Forms\Components\Tabs\Tab::make('TR')
                            ->schema([
                                Forms\Components\TextInput::make('title.tr')
                                    ->label('Title (TR)')
                                    ->maxLength(255),
                                Forms\Components\Textarea::make('content.tr')
                                    ->label('Content (TR)')
                                    ->rows(5),
                            ]),

                        Forms\Components\Tabs\Tab::make('DE')
                            ->schema([
                                Forms\Components\TextInput::make('title.de')
                                    ->label('Title (DE)')
                                    ->maxLength(255),
                                Forms\Components\Textarea::make('content.de')
                                    ->label('Content (DE)')
                                    ->rows(5),
                            ]),
                    ]),

                // Hidden slug
                Forms\Components\Hidden::make('slug'),

                // 🏷️ Category Select
                Forms\Components\Select::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'title')
                    ->getOptionLabelFromRecordUsing(fn ($record) => is_array($record->title) ? ($record->title['en'] ?? $record->title['az'] ?? 'N/A') : $record->title)
                    ->searchable()
                    ->preload()
                    ->nullable(),

                // 💰 Price section with nested fields
                Forms\Components\Section::make('Price Information')
                    ->columnSpanFull()
                    ->schema([
                        Forms\Components\TextInput::make('price')
                            ->numeric()
                            ->label('Price'),

                        // 📦 Stock count (nested under price)
                        Forms\Components\TextInput::make('count')
                            ->numeric()
                            ->label('Stock Count')
                            ->minValue(0)
                            ->default(0),

                        // 🖼️ Image (nested under count)
                        Forms\Components\FileUpload::make('image')
                            ->label('Image')
                            ->image()
                            ->directory('products')
                            ->preserveFilenames()
                            ->maxSize(2048),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('slug')
                    ->label('Slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category.title')
                    ->label('Category')
                    ->formatStateUsing(fn ($state) => is_array($state) ? ($state['en'] ?? $state['az'] ?? 'N/A') : $state)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->formatStateUsing(fn ($state) => is_array($state) ? ($state['en'] ?? $state['az'] ?? 'N/A') : $state)
                    ->searchable(['title->en', 'title->az', 'title->ru', 'title->tr', 'title->de']),
                Tables\Columns\TextColumn::make('price')
                    ->label('Price')
                    ->sortable(),
                Tables\Columns\TextColumn::make('count')
                    ->label('Count')
                    ->sortable(),
                Tables\Columns\ImageColumn::make('image')->label('Image'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime()
                    ->sortable(),
            ])
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
