<?php


namespace App\Filament\Resources;

use App\Filament\Resources\TeamResource\Pages\CreateTeam;
use App\Filament\Resources\TeamResource\Pages\EditTeam;
use App\Filament\Resources\TeamResource\Pages\ListTeams;
use App\Models\Team;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Team';
    protected static ?string $navigationGroup = 'Content Management';
    protected static ?string $pluralModelLabel = 'Team Members';


    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('full_name')
                ->label('Tam ad')
                ->required()
                ->maxLength(255),

            TextInput::make('position')
                ->label('Vəzifə')
                ->required()
                ->maxLength(255),

            Textarea::make('content')
                ->label('Haqqında')
                ->rows(5)
                ->required(),

            Forms\Components\FileUpload::make('image')
                ->label('Şəkil')
                ->image()
                ->directory('teams')
                ->maxSize(2048),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\ImageColumn::make('image')
                ->label('Şəkil')
                ->square()
                ->size(60),

            Tables\Columns\TextColumn::make('full_name')
                ->label('Ad Soyad')
                ->searchable()
                ->sortable(),

            Tables\Columns\TextColumn::make('position')
                ->label('Vəzifə')
                ->searchable()
                ->sortable(),

            Tables\Columns\TextColumn::make('created_at')
                ->label('Yaranma Tarixi')
                ->date('d.m.Y')
                ->sortable(),
        ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTeams::route('/'),
            'create' => CreateTeam::route('/create'),
            'edit' => EditTeam::route('/{record}/edit'),
        ];
    }
}
