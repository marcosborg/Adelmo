<?php

namespace App\Filament\Resources\HomePageSettings\Pages;

use App\Filament\Pages\HomePageSettings\HomePageGeneral;
use App\Filament\Resources\HomePageSettings\HomePageSettingResource;
use Filament\Resources\Pages\EditRecord;

class EditHomePageSetting extends EditRecord
{
    protected static string $resource = HomePageSettingResource::class;

    public function mount(int | string $record): void
    {
        parent::mount($record);

        $this->redirect(HomePageGeneral::getUrl());
    }

    protected function getHeaderActions(): array
    {
        return [];
    }

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl();
    }
}
