<?php


namespace App\Filament\Resources;

use App\Filament\Resources\TechnicalConsultationResource\Pages;
use App\Models\TechnicalConsultation;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;

class TechnicalConsultationResource extends Resource
{
    protected static ?string $model = TechnicalConsultation::class;

    protected static ?string $navigationIcon = 'heroicon-o-document';


    protected static ?string $navigationLabel = 'Technical Consultations';
    protected static ?string $pluralModelLabel = 'Technical Consultations';
    protected static ?string $modelLabel = 'Technical Consultation';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Full Name')
                    ->required(),
                Forms\Components\TextInput::make('description')
                    ->label('Problem Description')
                    ->required(),
                Forms\Components\DateTimePicker::make('scheduled_at')
                    ->label('Consultation Date')
                    ->required(),
                Forms\Components\Toggle::make('is_completed')
                    ->label('Completed'),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Full Name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('description')->label('Problem Description')->limit(50)->searchable(),
                Tables\Columns\TextColumn::make('scheduled_at')->label('Date')->dateTime()->sortable(),
                Tables\Columns\IconColumn::make('is_completed')->boolean()->label('Completed'),
                Tables\Columns\TextColumn::make('created_at')->label('Created At')->dateTime()->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTechnicalConsultations::route('/'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canEdit($record): bool
    {
        return false;
    }
}
