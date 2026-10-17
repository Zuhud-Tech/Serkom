<?php

namespace App\Filament\Resources\Galeris;

use App\Filament\Resources\Galeris\Pages\CreateGaleri;
use App\Filament\Resources\Galeris\Pages\EditGaleri;
use App\Filament\Resources\Galeris\Pages\ListGaleris;
use App\Filament\Resources\Galeris\Pages\ViewGaleri;
use App\Filament\Resources\Galeris\Schemas\GaleriForm;
use App\Filament\Resources\Galeris\Schemas\GaleriInfolist;
use App\Filament\Resources\Galeris\Tables\GalerisTable;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use App\Models\Galeri;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class GaleriResource extends Resource
{
    protected static ?string $model = Galeri::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedPhoto;

    protected static ?string $recordTitleAttribute = 'Galeri';

    protected static ?string $slug = 'kelola-galeri';

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
        return GaleriInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('gambar')
                    ->label('Gambar')
                    ->disk('public')
                    ->visibility('public')
                    ->width(100)
                    ->height(100),

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
            ->emptyStateHeading('Belum ada galeri')
            ->emptyStateIcon('heroicon-o-photo')
            ->emptyStateDescription('Tambahkan galeri baru untuk ditampilkan di halaman website.')
            ;
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
            'index' => ListGaleris::route('/'),
            'create' => CreateGaleri::route('/create'),
            'view' => ViewGaleri::route('/{record}'),
            'edit' => EditGaleri::route('/{record}/edit'),
        ];
    }
}
