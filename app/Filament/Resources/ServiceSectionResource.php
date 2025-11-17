<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceSectionResource\Pages;
use App\Models\ServiceSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ServiceSectionResource extends Resource
{
    protected static ?string $model = ServiceSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';
    protected static ?string $navigationLabel = 'Service Sections';
    protected static ?string $navigationGroup = 'Content Management';
    protected static ?string $pluralModelLabel = 'Service Sections';
    protected static ?string $modelLabel = 'Service Section';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Title (Multi-language)')
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

                Forms\Components\Section::make('Content (Multi-language)')
                    ->schema([
                        Forms\Components\Textarea::make('content.az')
                            ->label('Content (AZ)')
                            ->rows(6)
                            ->required(),

                        Forms\Components\Textarea::make('content.en')
                            ->label('Content (EN)')
                            ->rows(6)
                            ->required(),

                        Forms\Components\Textarea::make('content.ru')
                            ->label('Content (RU)')
                            ->rows(6),

                        Forms\Components\Textarea::make('content.tr')
                            ->label('Content (TR)')
                            ->rows(6),

                        Forms\Components\Textarea::make('content.de')
                            ->label('Content (DE)')
                            ->rows(6),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Settings')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->label('Image')
                            ->image()
                            ->directory('service-sections')
                            ->maxSize(2048),

                        Forms\Components\TextInput::make('order')
                            ->label('Order')
                            ->numeric()
                            ->default(0),

                        Forms\Components\Toggle::make('is_active')
                            ->label('Active')
                            ->default(true),
                    ])
                    ->columns(3),
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
                    ->size(50),

                Tables\Columns\TextColumn::make('order')
                    ->label('Order')
                    ->sortable(),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Updated')
                    ->dateTime('d.m.Y')
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
            'index' => Pages\ListServiceSections::route('/'),
            'create' => Pages\CreateServiceSection::route('/create'),
            'edit' => Pages\EditServiceSection::route('/{record}/edit'),
        ];
    }
}
