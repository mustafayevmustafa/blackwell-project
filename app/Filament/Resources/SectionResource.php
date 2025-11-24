<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SectionResource\Pages;
use App\Models\Section;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SectionResource extends Resource
{
    protected static ?string $model = Section::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-group';
    protected static ?string $navigationLabel = 'Sections';
    protected static ?string $navigationGroup = 'Content Management';
    protected static ?string $pluralModelLabel = 'Sections';
    protected static ?string $modelLabel = 'Section';

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
                            ->rows(5),

                        Forms\Components\Textarea::make('content.en')
                            ->label('Content (EN)')
                            ->rows(5),

                        Forms\Components\Textarea::make('content.ru')
                            ->label('Content (RU)')
                            ->rows(5),

                        Forms\Components\Textarea::make('content.tr')
                            ->label('Content (TR)')
                            ->rows(5),

                        Forms\Components\Textarea::make('content.de')
                            ->label('Content (DE)')
                            ->rows(5),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Media')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->label('Image')
                            ->image()
                            ->directory('sections')
                            ->maxSize(2048),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->formatStateUsing(fn ($state) => is_array($state) ? ($state['en'] ?? $state['az'] ?? 'N/A') : $state)
                    ->searchable(['title->en', 'title->az', 'title->ru', 'title->tr', 'title->de'])
                    ->limit(30),

                Tables\Columns\ImageColumn::make('image')
                    ->label('Image')
                    ->square()
                    ->size(50),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Updated')
                    ->dateTime('d.m.Y H:i')
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
            'index' => Pages\ListSections::route('/'),
            'create' => Pages\CreateSection::route('/create'),
            'edit' => Pages\EditSection::route('/{record}/edit'),
        ];
    }
}
