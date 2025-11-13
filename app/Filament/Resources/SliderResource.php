<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SliderResource\Pages;
use App\Models\Slider;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Form;

class SliderResource extends Resource
{
    protected static ?string $model = Slider::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationLabel = 'Sliders';
    protected static ?string $pluralModelLabel = 'Sliders';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make('Translations')
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
                                    ->maxLength(255),
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
                    ]),

                Forms\Components\FileUpload::make('image')
                    ->label('Media (Image / Video)')
                    ->directory('sliders')
                    ->preserveFilenames()
                    ->acceptedFileTypes(['image/*', 'video/mp4'])
                    ->maxSize(10240)
                    ->helperText('You can only upload an image or MP4 video.'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('title->en')->label('Title (EN)'),
                Tables\Columns\TextColumn::make('content->en')->limit(50)->label('Content (EN)'),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
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
            'index' => Pages\ListSliders::route('/'),
            'create' => Pages\CreateSlider::route('/create'),
            'edit' => Pages\EditSlider::route('/{record}/edit'),
        ];
    }
}
