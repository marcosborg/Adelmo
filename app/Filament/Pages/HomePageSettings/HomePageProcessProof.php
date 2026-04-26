<?php

namespace App\Filament\Pages\HomePageSettings;

use App\Filament\Resources\HomePageSettings\HomePageSettingResource;
use Filament\Support\Icons\Heroicon;

class HomePageProcessProof extends BaseHomePageSettingsPage
{
    protected static ?string $title = 'Homepage: Processo e prova social';

    protected static ?string $navigationLabel = 'Processo e prova social';

    protected static string|\BackedEnum|null $navigationIcon = Heroicon::QueueList;

    protected static ?int $navigationSort = 50;

    protected static ?string $slug = 'homepage/processo-prova-social';

    /**
     * @return array<\Filament\Schemas\Components\Component>
     */
    protected function getSettingsFormComponents(): array
    {
        return HomePageSettingResource::processAndProofSchemaComponents();
    }
}
