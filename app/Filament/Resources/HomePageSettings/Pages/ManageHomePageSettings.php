<?php

namespace App\Filament\Resources\HomePageSettings\Pages;

use App\Filament\Pages\HomePageSettings\HomePageGeneral;
use App\Filament\Resources\HomePageSettings\HomePageSettingResource;
use Filament\Resources\Pages\ManageRecords;

class ManageHomePageSettings extends ManageRecords
{
    protected static string $resource = HomePageSettingResource::class;

    public function mount(): void
    {
        parent::mount();

        $this->redirect(HomePageGeneral::getUrl());
    }

    protected function getHeaderActions(): array
    {
        return [];
    }
}
