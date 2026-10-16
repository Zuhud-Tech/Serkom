<?php

namespace App\Filament\Resources\Artikels\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ArtikelForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required(),
                Textarea::make('deskripsi')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('isi')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('gambar')
                    ->default(null),
                DatePicker::make('tanggal'),
            ]);
    }
}
