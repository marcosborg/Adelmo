<?php

namespace App\Filament\Resources\HomePageSettings;

use App\Filament\Resources\HomePageSettings\Pages\EditHomePageSetting;
use App\Filament\Resources\HomePageSettings\Pages\ManageHomePageSettings;
use App\Models\HomePageSetting;
use BackedEnum;
use Filament\Actions\EditAction;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HomePageSettingResource extends Resource
{
    protected static ?string $model = HomePageSetting::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::GlobeAlt;

    protected static bool $shouldRegisterNavigation = false;

    protected static ?string $navigationLabel = 'Homepage';

    protected static ?string $modelLabel = 'Homepage';

    protected static ?string $pluralModelLabel = 'Homepage';

    protected static ?string $recordTitleAttribute = 'site_name';

    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            ...static::generalSchemaComponents(),
            ...static::heroSchemaComponents(),
            ...static::aboutAndServicesSchemaComponents(),
            ...static::tvdeAndResultsSchemaComponents(),
            ...static::processAndProofSchemaComponents(),
            ...static::contactAndFooterSchemaComponents(),
        ]);
    }

    public static function generalSchemaComponents(): array
    {
        return [
            Section::make('Marca e meta')
                ->schema([
                    Grid::make(2)
                        ->schema([
                            TextInput::make('site_name')->required()->maxLength(255),
                            TextInput::make('site_tagline')->maxLength(255),
                            TextInput::make('meta_title')->maxLength(255),
                            Textarea::make('meta_description')->rows(3)->columnSpanFull(),
                        ]),
                ]),
            Section::make('Cores da frontpage')
                ->description('As variáveis principais do template podem ser ajustadas aqui.')
                ->schema([
                    Grid::make(4)
                        ->schema([
                            ColorPicker::make('theme_colors.bg')->label('Fundo'),
                            ColorPicker::make('theme_colors.primary_deep')->label('Azul profundo'),
                            ColorPicker::make('theme_colors.primary')->label('Azul principal'),
                            ColorPicker::make('theme_colors.graphite')->label('Grafite'),
                            ColorPicker::make('theme_colors.text')->label('Texto'),
                            ColorPicker::make('theme_colors.text_soft')->label('Texto secundário'),
                            ColorPicker::make('theme_colors.accent')->label('Verde destaque'),
                            ColorPicker::make('theme_colors.accent_dark')->label('Verde escuro'),
                        ]),
                ]),
            Section::make('Navegação')
                ->schema([
                    Repeater::make('nav_links')
                        ->label('Links do menu')
                        ->schema([
                            TextInput::make('label')->required()->maxLength(255),
                            TextInput::make('href')->required()->maxLength(255),
                        ])
                        ->columns(2)
                        ->defaultItems(0)
                        ->reorderableWithButtons()
                        ->cloneable(),
                    Grid::make(2)
                        ->schema([
                            TextInput::make('nav_cta_label')->label('CTA do menu')->required()->maxLength(255),
                            TextInput::make('nav_cta_href')->label('Link do CTA')->required()->maxLength(255),
                        ]),
                ]),
        ];
    }

    public static function heroSchemaComponents(): array
    {
        return [
            Section::make('Conteúdo principal')
                ->schema([
                    TextInput::make('hero_badge')->label('Eyebrow')->required()->maxLength(255),
                    Textarea::make('hero_title')->label('Título')->required()->rows(3),
                    Textarea::make('hero_description')->label('Descrição')->required()->rows(4),
                    Grid::make(2)
                        ->schema([
                            TextInput::make('hero_primary_cta_label')->label('CTA principal')->required(),
                            TextInput::make('hero_primary_cta_href')->label('Link CTA principal')->required(),
                            TextInput::make('hero_secondary_cta_label')->label('CTA secundário')->required(),
                            TextInput::make('hero_secondary_cta_href')->label('Link CTA secundário')->required(),
                        ]),
                ]),
            Section::make('Notas rápidas')
                ->schema([
                    Repeater::make('hero_notes')
                        ->schema([
                            static::iconSelect('icon'),
                            TextInput::make('text')->required()->maxLength(255),
                        ])
                        ->columns(2)
                        ->defaultItems(0)
                        ->reorderableWithButtons()
                        ->cloneable(),
                ]),
            Section::make('Painel lateral')
                ->schema([
                    TextInput::make('hero_panel_label')->label('Etiqueta do painel')->required()->maxLength(255),
                    Repeater::make('hero_panels')
                        ->label('Cards do painel')
                        ->schema([
                            TextInput::make('title')->required()->maxLength(255),
                            Textarea::make('description')->required()->rows(3),
                        ])
                        ->defaultItems(0)
                        ->reorderableWithButtons()
                        ->cloneable(),
                    Repeater::make('hero_stats')
                        ->label('Métricas rápidas')
                        ->schema([
                            TextInput::make('value')->required()->maxLength(255),
                            TextInput::make('label')->required()->maxLength(255),
                        ])
                        ->columns(2)
                        ->defaultItems(0)
                        ->reorderableWithButtons()
                        ->cloneable(),
                ]),
            Section::make('Faixa de confiança')
                ->schema([
                    Repeater::make('trust_items')
                        ->label('Itens')
                        ->schema([
                            TextInput::make('title')->required()->maxLength(255),
                            Textarea::make('description')->required()->rows(2),
                        ])
                        ->defaultItems(0)
                        ->reorderableWithButtons()
                        ->cloneable(),
                ]),
        ];
    }

    public static function aboutAndServicesSchemaComponents(): array
    {
        return [
            Section::make('Secção Sobre')
                ->schema([
                    TextInput::make('about_badge')->required()->maxLength(255),
                    Textarea::make('about_title')->required()->rows(3),
                    Textarea::make('about_description')->required()->rows(4),
                    Repeater::make('about_points')
                        ->label('Pontos')
                        ->schema([
                            static::iconSelect('icon'),
                            TextInput::make('text')->required()->maxLength(255),
                        ])
                        ->columns(2)
                        ->defaultItems(0)
                        ->reorderableWithButtons()
                        ->cloneable(),
                ]),
            Section::make('Secção Serviços')
                ->schema([
                    TextInput::make('services_badge')->required()->maxLength(255),
                    Textarea::make('services_title')->required()->rows(3),
                    Textarea::make('services_description')->required()->rows(4),
                    Repeater::make('services')
                        ->schema([
                            static::iconSelect('icon'),
                            TextInput::make('title')->required()->maxLength(255),
                            Textarea::make('description')->required()->rows(3)->columnSpanFull(),
                        ])
                        ->columns(2)
                        ->defaultItems(0)
                        ->reorderableWithButtons()
                        ->cloneable(),
                ]),
        ];
    }

    public static function tvdeAndResultsSchemaComponents(): array
    {
        return [
            Section::make('Especialização TVDE')
                ->schema([
                    TextInput::make('tvde_badge')->required()->maxLength(255),
                    Textarea::make('tvde_title')->required()->rows(3),
                    Textarea::make('tvde_description')->required()->rows(4),
                    Repeater::make('tvde_points')
                        ->label('Pontos de especialização')
                        ->schema([
                            static::iconSelect('icon'),
                            TextInput::make('text')->required()->maxLength(255),
                        ])
                        ->columns(2)
                        ->defaultItems(0)
                        ->reorderableWithButtons()
                        ->cloneable(),
                    Repeater::make('tvde_metrics')
                        ->label('Métricas TVDE')
                        ->schema([
                            TextInput::make('value')->required()->maxLength(255),
                            Textarea::make('description')->required()->rows(2),
                        ])
                        ->defaultItems(0)
                        ->reorderableWithButtons()
                        ->cloneable(),
                ]),
            Section::make('Resultados')
                ->schema([
                    TextInput::make('results_badge')->required()->maxLength(255),
                    Textarea::make('results_title')->required()->rows(3),
                    Textarea::make('results_description')->required()->rows(4),
                    Repeater::make('results')
                        ->label('Cards de resultados')
                        ->schema([
                            TextInput::make('value')->required()->maxLength(255),
                            TextInput::make('title')->required()->maxLength(255),
                            Textarea::make('description')->required()->rows(2)->columnSpanFull(),
                        ])
                        ->columns(2)
                        ->defaultItems(0)
                        ->reorderableWithButtons()
                        ->cloneable(),
                ]),
        ];
    }

    public static function processAndProofSchemaComponents(): array
    {
        return [
            Section::make('Processo')
                ->schema([
                    TextInput::make('process_badge')->required()->maxLength(255),
                    Textarea::make('process_title')->required()->rows(3),
                    Textarea::make('process_description')->required()->rows(4),
                    Repeater::make('process_steps')
                        ->label('Passos')
                        ->schema([
                            static::iconSelect('icon'),
                            TextInput::make('title')->required()->maxLength(255),
                            Textarea::make('description')->required()->rows(2)->columnSpanFull(),
                        ])
                        ->columns(2)
                        ->defaultItems(0)
                        ->reorderableWithButtons()
                        ->cloneable(),
                ]),
            Section::make('Testemunhos')
                ->schema([
                    TextInput::make('testimonials_badge')->required()->maxLength(255),
                    Textarea::make('testimonials_title')->required()->rows(3),
                    Textarea::make('testimonials_description')->required()->rows(4),
                    Repeater::make('testimonials')
                        ->label('Testemunhos')
                        ->schema([
                            Textarea::make('quote')->required()->rows(3)->columnSpanFull(),
                            TextInput::make('name')->required()->maxLength(255),
                            TextInput::make('role')->required()->maxLength(255),
                            TextInput::make('engagement')->required()->maxLength(255),
                        ])
                        ->columns(2)
                        ->defaultItems(0)
                        ->reorderableWithButtons()
                        ->cloneable(),
                ]),
        ];
    }

    public static function contactAndFooterSchemaComponents(): array
    {
        return [
            Section::make('Secção Contactos')
                ->schema([
                    TextInput::make('contact_badge')->required()->maxLength(255),
                    Textarea::make('contact_title')->required()->rows(3),
                    Textarea::make('contact_description')->required()->rows(4),
                    Repeater::make('contact_details')
                        ->label('Detalhes de contacto')
                        ->schema([
                            static::iconSelect('icon'),
                            TextInput::make('title')->required()->maxLength(255),
                            TextInput::make('value')->required()->maxLength(255),
                        ])
                        ->columns(3)
                        ->defaultItems(0)
                        ->reorderableWithButtons()
                        ->cloneable(),
                    TextInput::make('contact_form_button_label')->required()->maxLength(255),
                    Textarea::make('contact_form_note')->rows(2),
                    Textarea::make('contact_success_message')->rows(2),
                ]),
            Section::make('Rodapé')
                ->schema([
                    Textarea::make('footer_text')->rows(3)->required(),
                    TextInput::make('footer_copyright')->required()->maxLength(255),
                ]),
        ];
    }

    public static function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('site_name')
            ->columns([
                TextColumn::make('site_name')->label('Nome'),
                TextColumn::make('updated_at')->label('Atualizado')->since(),
            ])
            ->recordActions([
                EditAction::make()->label('Editar'),
            ])
            ->toolbarActions([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageHomePageSettings::route('/'),
            'edit' => EditHomePageSetting::route('/{record}/edit'),
        ];
    }

    protected static function iconSelect(string $name): Select
    {
        return Select::make($name)
            ->label('Ícone')
            ->options(HomePageSetting::iconOptions())
            ->searchable()
            ->required();
    }
}
