<?php


namespace App\Filament\Resources;

use App\Filament\Resources\PartnerResource\Pages;
use App\Models\Partner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PartnerResource extends Resource
{
    protected static ?string $model = Partner::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = 'Partners';
    protected static ?string $pluralModelLabel = 'Partners';
    protected static ?string $modelLabel = 'Partner';

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
                            ->label('Title (RU)')
                            ->required(),

                        Forms\Components\TextInput::make('title.tr')
                            ->label('Title (TR)')
                            ->required(),

                        Forms\Components\TextInput::make('title.de')
                            ->label('Title (DE)')
                            ->required(),

                    ])
                    ->columns(2),

                Forms\Components\Section::make('Content (Multi-language)')
                    ->schema([

                        Forms\Components\Textarea::make('content.az')
                            ->label('Content (AZ)')
                            ->rows(4),

                        Forms\Components\Textarea::make('content.en')
                            ->label('Content (EN)')
                            ->rows(4),

                        Forms\Components\Textarea::make('content.ru')
                            ->label('Content (RU)')
                            ->rows(4),

                        Forms\Components\Textarea::make('content.tr')
                            ->label('Content (TR)')
                            ->rows(4),

                        Forms\Components\Textarea::make('content.de')
                            ->label('Content (DE)')
                            ->rows(4),

                    ])
                    ->columns(2),

                Forms\Components\FileUpload::make('image')
                    ->label('Image')
                    ->image()
                    ->directory('partners')
                    ->maxSize(2048),

                Forms\Components\TextInput::make('url')
                    ->label('Website URL')
                    ->url()
                    ->placeholder('https://example.com')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title.en')
                    ->label('Title (EN)')
                    ->searchable(),

                Tables\Columns\ImageColumn::make('image')
                    ->label('Image')
                    ->square()
                    ->size(60),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Created'),
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
            'index' => Pages\ListPartners::route('/'),
            'create' => Pages\CreatePartner::route('/create'),
            'edit' => Pages\EditPartner::route('/{record}/edit'),
        ];
    }
}
