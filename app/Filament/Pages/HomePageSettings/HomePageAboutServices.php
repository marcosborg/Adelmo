<?php

namespace App\Filament\Pages\HomePageSettings;

use App\Filament\Resources\HomePageSettings\HomePageSettingResource;
use Filament\Support\Icons\Heroicon;

class HomePageAboutServices extends BaseHomePageSettingsPage
{
    protected static ?string $title = 'Homepage: Sobre e serviços';

    protected static ?string $navigationLabel = 'Sobre e serviços';

    protected static string|\BackedEnum|null $navigationIcon = Heroicon::Briefcase;

    protected static ?int $navigationSort = 30;

    protected static ?string $slug = 'homepage/sobre-servicos';

    /**
     * @return array<\Filament\Schemas\Components\Component>
     */
    protected function getSettingsFormComponents(): array
    {
        return HomePageSettingResource::aboutAndServicesSchemaComponents();
    }
}
