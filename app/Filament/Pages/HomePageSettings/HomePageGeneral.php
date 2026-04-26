<?php

namespace App\Filament\Pages\HomePageSettings;

use App\Filament\Resources\HomePageSettings\HomePageSettingResource;
use Filament\Support\Icons\Heroicon;

class HomePageGeneral extends BaseHomePageSettingsPage
{
    protected static ?string $title = 'Homepage: Geral';

    protected static ?string $navigationLabel = 'Geral';

    protected static string|\BackedEnum|null $navigationIcon = Heroicon::Home;

    protected static ?int $navigationSort = 10;

    protected static ?string $slug = 'homepage/geral';

    /**
     * @return array<\Filament\Schemas\Components\Component>
     */
    protected function getSettingsFormComponents(): array
    {
        return HomePageSettingResource::generalSchemaComponents();
    }
}
