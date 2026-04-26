<?php

namespace App\Filament\Pages\HomePageSettings;

use App\Models\HomePageSetting;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Pages\Concerns\CanUseDatabaseTransactions;
use Filament\Pages\Page;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\EmbeddedSchema;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Schema;
use Filament\Support\Enums\Alignment;
use Filament\Support\Enums\Width;
use Filament\Support\Exceptions\Halt;
use Filament\Support\Facades\FilamentView;
use Throwable;
use UnitEnum;

/**
 * @property-read Schema $form
 */
abstract class BaseHomePageSettingsPage extends Page
{
    use CanUseDatabaseTransactions;

    public ?array $data = [];

    protected static string|UnitEnum|null $navigationGroup = 'Homepage';

    protected Width|string|null $maxContentWidth = Width::Full;

    protected static ?string $title = null;

    public function mount(): void
    {
        $this->form->fill(HomePageSetting::singleton()->mergedContent());
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->model(HomePageSetting::singleton())
            ->operation('edit')
            ->statePath('data')
            ->components($this->getSettingsFormComponents());
    }

    public function content(Schema $schema): Schema
    {
        return $schema->components([
            Form::make([
                EmbeddedSchema::make('form'),
            ])
                ->id('form')
                ->livewireSubmitHandler('save')
                ->footer([
                    Actions::make([
                        $this->getSaveFormAction(),
                    ])->alignment($this->getFormActionsAlignment()),
                ]),
        ]);
    }

    public function save(): void
    {
        try {
            $this->beginDatabaseTransaction();

            $data = $this->form->getState();

            HomePageSetting::singleton()->update($data);
        } catch (Halt $exception) {
            $exception->shouldRollbackDatabaseTransaction()
                ? $this->rollBackDatabaseTransaction()
                : $this->commitDatabaseTransaction();

            return;
        } catch (Throwable $exception) {
            $this->rollBackDatabaseTransaction();

            throw $exception;
        }

        $this->commitDatabaseTransaction();

        Notification::make()
            ->success()
            ->title('Alterações guardadas')
            ->send();

        $this->redirect(static::getUrl(), navigate: FilamentView::hasSpaMode(static::getUrl()));
    }

    protected function getSaveFormAction(): Action
    {
        return Action::make('save')
            ->label('Guardar alterações')
            ->submit('save')
            ->keyBindings(['mod+s']);
    }

    public function getFormActionsAlignment(): string|Alignment
    {
        return Alignment::Start;
    }

    public function getDefaultTestingSchemaName(): ?string
    {
        return 'form';
    }

    /**
     * @return array<Component>
     */
    abstract protected function getSettingsFormComponents(): array;
}
