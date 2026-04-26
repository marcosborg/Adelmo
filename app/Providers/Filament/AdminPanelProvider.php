<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Support\Enums\Width;
use Filament\Widgets\AccountWidget;
use Filament\View\PanelsRenderHook;
use Illuminate\Support\HtmlString;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->brandName('Adelmo Top')
            ->maxContentWidth(Width::Full)
            ->colors([
                'primary' => Color::Emerald,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                AccountWidget::class,
            ])
            ->renderHook(
                PanelsRenderHook::HEAD_END,
                fn (): HtmlString => new HtmlString(<<<'HTML'
                    <style>
                        .fi-panel-admin .fi-main,
                        .fi-panel-admin .fi-page,
                        .fi-panel-admin .fi-page-main,
                        .fi-panel-admin .fi-page-content,
                        .fi-panel-admin .fi-page-header-main-ctn,
                        .fi-panel-admin main.fi-main.fi-width-full {
                            max-width: none !important;
                            width: 100% !important;
                            min-width: 100% !important;
                        }

                        .fi-panel-admin .fi-page-content > *,
                        .fi-panel-admin .fi-page-content .fi-sc-form,
                        .fi-panel-admin .fi-page-content .fi-sc-form > *,
                        .fi-panel-admin .fi-page-content .fi-sc-tabs,
                        .fi-panel-admin .fi-page-content .fi-sc-section,
                        .fi-panel-admin .fi-page-content .fi-section,
                        .fi-panel-admin .fi-page-content .fi-section-content,
                        .fi-panel-admin .fi-page-content .fi-sc-form .fi-section {
                            width: 100% !important;
                            max-width: none !important;
                            min-width: 100% !important;
                        }
                    </style>
                HTML),
            )
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
