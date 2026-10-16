<?php

namespace App\Filament\Resources\Layanans;

use App\Filament\Resources\Layanans\Pages\CreateLayanan;
use App\Filament\Resources\Layanans\Pages\EditLayanan;
use App\Filament\Resources\Layanans\Pages\ListLayanans;
use App\Filament\Resources\Layanans\Pages\ViewLayanan;
use App\Filament\Resources\Layanans\Schemas\LayananForm;
use App\Filament\Resources\Layanans\Schemas\LayananInfolist;
use App\Filament\Resources\Layanans\Tables\LayanansTable;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use App\Models\Layanan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LayananResource extends Resource
{
    protected static ?string $model = Layanan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBriefcase;

    protected static ?string $recordTitleAttribute = 'Layanan';

    protected static ?string $slug = 'kelola-layanan';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->label('Nama Layanan')
                    ->required()
                    ->maxLength(255),

                Textarea::make('deskripsi')
                    ->label('Deskripsi Layanan')
                    ->required()
                    ->rows(4),

                Select::make('icon')
                    ->label('Pilih Ikon Layanan')
                    ->options(config('layanan-icons'))
                    ->searchable()
                    ->required()
                    ->default('heroicon-o-code-bracket')
                    ->helperText(
                        'Pilih ikon yang akan tampil di halaman website.'
                    ),

                Toggle::make('aktif')
                    ->label('Tampilkan di website')
                    ->default(true),
            ])
            ->columns(1);
    }

    public static function infolist(Schema $schema): Schema
    {
        return LayananInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Nama Layanan')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('icon')
                    ->label('Kode Ikon')
                    ->searchable(),

                IconColumn::make('aktif')
                    ->label('Status')
                    ->boolean(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->emptyStateHeading('Belum ada layanan')
            ->emptyStateIcon('heroicon-o-briefcase')
            ->emptyStateDescription('Tambahkan layanan baru untuk ditampilkan di halaman website.')
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
            'index' => ListLayanans::route('/'),
            'create' => CreateLayanan::route('/create'),
            'view' => ViewLayanan::route('/{record}'),
            'edit' => EditLayanan::route('/{record}/edit'),
        ];
    }
}
