<?php

namespace JeffersonGoncalves\Filament\UsPrivacy\Pages;

use Filament\Pages\Page;
use JeffersonGoncalves\Filament\UsPrivacy\UsPrivacyPlugin;
use JeffersonGoncalves\UsPrivacy\UsPrivacy;

/**
 * Read-only view of laravel-us-privacy's inventory: one card per model, one row per declared column.
 */
class PersonalDataInventory extends Page
{
    protected static string $view = 'filament-us-privacy::pages.inventory';

    /**
     * @return array<class-string, list<array<string, mixed>>>
     */
    public function getInventory(): array
    {
        $models = [];

        foreach (app(UsPrivacy::class)->inventory() as $row) {
            $models[$row['model']][] = $row;
        }

        return $models;
    }

    public static function label(string $group, ?string $value): ?string
    {
        return $value === null ? null : __("filament-us-privacy::filament-us-privacy.{$group}.{$value}");
    }

    public function getTitle(): string
    {
        return __('filament-us-privacy::filament-us-privacy.page.title');
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-us-privacy::filament-us-privacy.page.navigation_label');
    }

    public static function getNavigationGroup(): ?string
    {
        return UsPrivacyPlugin::get()->getNavigationGroup();
    }

    public static function getNavigationSort(): ?int
    {
        return UsPrivacyPlugin::get()->getNavigationSort();
    }

    public static function getNavigationIcon(): ?string
    {
        return UsPrivacyPlugin::get()->getNavigationIcon();
    }

    public static function getSlug(): string
    {
        return UsPrivacyPlugin::get()->getSlug();
    }
}
