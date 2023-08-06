<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\UangKas;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\UangKasResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UangKasResource\RelationManagers;

class UangKasResource extends Resource
{
    protected static ?string $model = UangKas::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('nim')->required()->unique(ignorable: fn ($record) => $record),
                        TextInput::make('nama')->required(),
                        Select::make('bulan')->options([
                            'januari' => 'Januari',
                            'februari' => 'Februari',
                            'maret' => 'Maret',
                            'april' => 'April',
                            'mei' => 'Mei',
                            'juni' => 'Juni',
                            'juli' => 'Juli',
                            'agustus' => 'Agustus',
                            'september' => 'September',
                            'oktober' => 'Oktober',
                            'november' => 'November',
                            'desember' => 'Desember',
                        ]),
                        Select::make('keterangan')
                            ->options([
                                'lunas' => 'LUNAS',
                                'belum' => 'BELUM LUNAS',
                            ]),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nim')->Sortable()->searchable(),
                TextColumn::make('nama')->Sortable()->searchable(),
                TextColumn::make('bulan')->Sortable()->searchable(),
                TextColumn::make('keterangan')->Sortable()->searchable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListUangKas::route('/'),
            'create' => Pages\CreateUangKas::route('/create'),
            'edit' => Pages\EditUangKas::route('/{record}/edit'),
        ];
    }
}
