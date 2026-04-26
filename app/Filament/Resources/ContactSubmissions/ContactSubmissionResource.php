<?php

namespace App\Filament\Resources\ContactSubmissions;

use App\Filament\Resources\ContactSubmissions\Pages\ManageContactSubmissions;
use App\Models\ContactSubmission;
use BackedEnum;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ContactSubmissionResource extends Resource
{
    protected static ?string $model = ContactSubmission::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedInboxStack;

    protected static ?string $navigationLabel = 'Pedidos de contacto';

    protected static ?string $modelLabel = 'Pedido de contacto';

    protected static ?string $pluralModelLabel = 'Pedidos de contacto';

    protected static ?string $recordTitleAttribute = 'name';

    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('name')->disabled(),
        ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Mensagem')
                ->schema([
                    TextEntry::make('name')->label('Nome'),
                    TextEntry::make('company')->label('Empresa'),
                    TextEntry::make('email')->label('Email'),
                    TextEntry::make('phone')->label('Telefone'),
                    TextEntry::make('message')->label('Mensagem')->columnSpanFull(),
                    TextEntry::make('created_at')->label('Recebido em')->dateTime('d/m/Y H:i'),
                ])
                ->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->recordTitleAttribute('name')
            ->columns([
                TextColumn::make('name')->label('Nome')->searchable(),
                TextColumn::make('company')->label('Empresa')->searchable(),
                TextColumn::make('email')->label('Email')->searchable(),
                TextColumn::make('phone')->label('Telefone'),
                TextColumn::make('created_at')->label('Recebido')->dateTime('d/m/Y H:i'),
            ])
            ->filters([])
            ->recordActions([
                ViewAction::make()->label('Ver'),
                DeleteAction::make()->label('Apagar'),
            ])
            ->toolbarActions([
                DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageContactSubmissions::route('/'),
        ];
    }
}
