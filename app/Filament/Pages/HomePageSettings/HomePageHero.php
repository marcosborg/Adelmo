<?php

namespace App\Filament\Pages\HomePageSettings;

use App\Filament\Resources\HomePageSettings\HomePageSettingResource;
use Filament\Support\Icons\Heroicon;

class HomePageHero extends BaseHomePageSettingsPage
{
    protected static ?string $title = 'Homepage: Hero';

    protected static ?string $navigationLabel = 'Hero';

    protected static string|\BackedEnum|null $navigationIcon = Heroicon::RectangleGroup;

    protected static ?int $navigationSort = 20;

    protected static ?string $slug = 'homepage/hero';

    /**
     * @return array<\Filament\Schemas\Components\Component>
     */
    protected function getSettingsFormComponents(): array
    {
        return HomePageSettingResource::heroSchemaComponents();
    }
}
