<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CamioneteResource\Pages;
use App\Filament\Resources\CamioneteResource\RelationManagers;
use App\Models\Camionete;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CamioneteResource extends Resource
{
    protected static ?string $model = Camionete::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('ano')
                    ->required()
                    ->maxLength(4),
                Forms\Components\TextInput::make('marca_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('nome')
                    ->required()
                    ->maxLength(30),
                Forms\Components\TextInput::make('quilometragem')
                    ->required()
                    ->maxLength(7),
                Forms\Components\TextInput::make('lugares')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('cor')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('descricao')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('empresa_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('portas')
                    ->required()
                    ->numeric(),
                Forms\Components\Toggle::make('tracao_integral')
                    ->required(),
                Forms\Components\Toggle::make('airbags')
                    ->required(),
                Forms\Components\TextInput::make('litragem_cacamba')
                    ->required()
                    ->maxLength(4),
                Forms\Components\Toggle::make('reboque')
                    ->required(),
                Forms\Components\TextInput::make('origem')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('ano')
                    ->searchable(),
                Tables\Columns\TextColumn::make('marca_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nome')
                    ->searchable(),
                Tables\Columns\TextColumn::make('quilometragem')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lugares')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cor')
                    ->searchable(),
                Tables\Columns\TextColumn::make('empresa_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('portas')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('tracao_integral')
                    ->boolean(),
                Tables\Columns\IconColumn::make('airbags')
                    ->boolean(),
                Tables\Columns\TextColumn::make('litragem_cacamba')
                    ->searchable(),
                Tables\Columns\IconColumn::make('reboque')
                    ->boolean(),
                Tables\Columns\TextColumn::make('origem'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCamionetes::route('/'),
            'create' => Pages\CreateCamionete::route('/create'),
            'edit' => Pages\EditCamionete::route('/{record}/edit'),
        ];
    }
}
