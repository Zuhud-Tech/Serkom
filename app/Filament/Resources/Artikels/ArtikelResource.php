<?php

namespace App\Filament\Resources\Artikels;

use App\Filament\Resources\Artikels\Pages\CreateArtikel;
use App\Filament\Resources\Artikels\Pages\EditArtikel;
use App\Filament\Resources\Artikels\Pages\ListArtikels;
use App\Filament\Resources\Artikels\Pages\ViewArtikel;
use App\Filament\Resources\Artikels\Schemas\ArtikelForm;
use App\Filament\Resources\Artikels\Schemas\ArtikelInfolist;
use App\Filament\Resources\Artikels\Tables\ArtikelsTable;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use App\Models\Artikel;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ArtikelResource extends Resource
{
    protected static ?string $model = Artikel::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedMegaphone;

    protected static ?string $recordTitleAttribute = 'Artikel';

    protected static ?string $slug = 'kelola-artikel';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->label('Judul')
                    ->placeholder('Masukkan judul')
                    ->required(),

                Textarea::make('deskripsi')
                    ->label('Deskripsi')
                    ->placeholder('Masukkan deskripsi')
                    ->rows(4)
                    ->nullable(),

                DatePicker::make('tanggal')
                    ->label('Tanggal')
                    ->nullable(),

                FileUpload::make('gambar')
                    ->label('Gambar')
                    ->image()
                    ->disk('public')
                    ->directory('galeri')
                    ->visibility('public')
                    ->nullable(),
            ])
            ->columns(1);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ArtikelInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('gambar')
                    ->label('Gambar')
                    ->disk('public')
                    ->imageSize(100)
                    ->square(),

                TextColumn::make('judul')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('deskripsi')
                    ->label('Deskripsi')
                    ->limit(50),

                TextColumn::make('tanggal')
                    ->label('Tanggal')
                    ->date('d M Y')
                    ->sortable(),
            ])
            ->actions([
                EditAction::make()
                    ->color('warning'),
                DeleteAction::make(),
            ])
            ->emptyStateHeading('Belum ada artikel')
            ->emptyStateIcon('heroicon-o-document-text')
            ->emptyStateDescription('Tambahkan artikel baru untuk ditampilkan di halaman website.');
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
            'index' => ListArtikels::route('/'),
            'create' => CreateArtikel::route('/create'),
            'view' => ViewArtikel::route('/{record}'),
            'edit' => EditArtikel::route('/{record}/edit'),
        ];
    }
}
