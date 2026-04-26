<?php

namespace App\Filament\Pages\HomePageSettings;

use App\Filament\Resources\HomePageSettings\HomePageSettingResource;
use Filament\Support\Icons\Heroicon;

class HomePageContactFooter extends BaseHomePageSettingsPage
{
    protected static ?string $title = 'Homepage: Contactos e rodapé';

    protected static ?string $navigationLabel = 'Contactos e rodapé';

    protected static string|\BackedEnum|null $navigationIcon = Heroicon::Phone;

    protected static ?int $navigationSort = 60;

    protected static ?string $slug = 'homepage/contactos-rodape';

    /**
     * @return array<\Filament\Schemas\Components\Component>
     */
    protected function getSettingsFormComponents(): array
    {
        return HomePageSettingResource::contactAndFooterSchemaComponents();
    }
}
