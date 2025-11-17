<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Models\Contact;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Infolists;
use Filament\Infolists\Infolist;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;
    protected static ?string $navigationIcon = 'heroicon-o-envelope';
    protected static ?string $navigationLabel = 'Contacts';

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Infolists\Components\Section::make('Contact Information')
                    ->schema([
                        Infolists\Components\TextEntry::make('name')->label('Name'),
                        Infolists\Components\TextEntry::make('email')->label('Email'),
                        Infolists\Components\TextEntry::make('phone')->label('Phone'),
                        Infolists\Components\TextEntry::make('company_name')->label('Company Name'),
                        Infolists\Components\TextEntry::make('position')->label('Position'),
                        Infolists\Components\TextEntry::make('partner')->label('Partner'),
                        Infolists\Components\TextEntry::make('country')->label('Country'),
                        Infolists\Components\TextEntry::make('subject')->label('Subject'),
                        Infolists\Components\TextEntry::make('message')
                            ->label('Message')
                            ->columnSpanFull(),
                        Infolists\Components\IconEntry::make('status')
                            ->boolean()
                            ->label('Read'),
                        Infolists\Components\TextEntry::make('created_at')
                            ->label('Date')
                            ->dateTime('d.m.Y H:i'),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Name'),
                Tables\Columns\TextColumn::make('email')->label('Email'),
                Tables\Columns\TextColumn::make('subject')->label('Subject'),
                Tables\Columns\TextColumn::make('message')
                    ->label('Message')
                    ->limit(50)
                    ->tooltip(fn($record) => $record->message),
                Tables\Columns\IconColumn::make('status')
                    ->boolean()
                    ->label('Read'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Date')
                    ->dateTime('d.m.Y H:i'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\Action::make('toggleStatus')
                    ->label(fn($record) => $record->status ? 'Mark as Unread' : 'Mark as Read')
                    ->icon(fn($record) => $record->status ? 'heroicon-o-eye-slash' : 'heroicon-o-eye')
                    ->color(fn($record) => $record->status ? 'warning' : 'success')
                    ->action(fn($record) => $record->update(['status' => !$record->status])),

                Tables\Actions\DeleteAction::make()
                    ->label('Delete')
                    ->color('danger'),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()
                    ->label('Delete Selected')
                    ->color('danger'),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContacts::route('/'),
        ];
    }

    public static function shouldRegisterNavigation(): bool
    {
        return true;
    }
}
