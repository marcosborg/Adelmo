<?php

namespace App\Filament\Pages\HomePageSettings;

use App\Filament\Resources\HomePageSettings\HomePageSettingResource;
use Filament\Support\Icons\Heroicon;

class HomePageTvdeResults extends BaseHomePageSettingsPage
{
    protected static ?string $title = 'Homepage: TVDE e resultados';

    protected static ?string $navigationLabel = 'TVDE e resultados';

    protected static string|\BackedEnum|null $navigationIcon = Heroicon::ChartBarSquare;

    protected static ?int $navigationSort = 40;

    protected static ?string $slug = 'homepage/tvde-resultados';

    /**
     * @return array<\Filament\Schemas\Components\Component>
     */
    protected function getSettingsFormComponents(): array
    {
        return HomePageSettingResource::tvdeAndResultsSchemaComponents();
    }
}
