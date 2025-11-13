<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Blogs';
    protected static ?string $pluralModelLabel = 'Blogs';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Multilingual title
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
                                    ->maxLength(255)
                                    ->reactive()
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

                Forms\Components\FileUpload::make('image')
                    ->label('Image')
                    ->image()
                    ->directory('blogs')
                    ->preserveFilenames()
                    ->maxSize(2048),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('slug')->label('Slug'),
                Tables\Columns\TextColumn::make('title->en')->label('Title (EN)'),
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
