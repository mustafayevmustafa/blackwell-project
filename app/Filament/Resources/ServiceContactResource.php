<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceContactResource\Pages;
use App\Models\ServiceContact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ServiceContactResource extends Resource
{
    protected static ?string $model = ServiceContact::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';
    protected static ?string $navigationLabel = 'Service Contacts';
    protected static ?string $pluralModelLabel = 'Service Contacts';
    protected static ?string $modelLabel = 'Service Contact';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->disabled(),
                Forms\Components\TextInput::make('email')->disabled(),
                Forms\Components\TextInput::make('partner')->label('Company')->disabled(),
                Forms\Components\TextInput::make('position')->disabled(),

                Forms\Components\Textarea::make('content')
                    ->label('Message')
                    ->rows(6)
                    ->disabled(),

                Forms\Components\Toggle::make('status')
                    ->label('Seen / Processed'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('email')
                    ->searchable(),

                Tables\Columns\TextColumn::make('partner')
                    ->label('Company')
                    ->searchable(),

                Tables\Columns\TextColumn::make('position')
                    ->searchable(),

                Tables\Columns\IconColumn::make('status')
                    ->boolean()
                    ->label('Seen'),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('Y-m-d H:i')
                    ->sortable()
                    ->label('Date'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListServiceContacts::route('/'),
            'edit' => Pages\EditServiceContact::route('/{record}/edit'),
            'view' => Pages\ViewServiceContact::route('/{record}'),
        ];
    }
}
