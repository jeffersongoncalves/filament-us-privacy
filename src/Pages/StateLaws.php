<?php

namespace JeffersonGoncalves\Filament\UsPrivacy\Pages;

use BackedEnum;
use Filament\Pages\Page;
use Filament\Panel;
use JeffersonGoncalves\Filament\UsPrivacy\UsPrivacyPlugin;
use JeffersonGoncalves\UsPrivacy\StateRules;
use JeffersonGoncalves\UsPrivacy\UsPrivacy;

/**
 * Read-only view of the state law rules configured in laravel-us-privacy.
 */
class StateLaws extends Page
{
    protected string $view = 'filament-us-privacy::pages.states';

    /**
     * @return list<StateRules>
     */
    public function getStates(): array
    {
        return array_values(app(UsPrivacy::class)->states());
    }

    public function getTitle(): string
    {
        return __('filament-us-privacy::filament-us-privacy.states.title');
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-us-privacy::filament-us-privacy.states.navigation_label');
    }

    public static function getNavigationGroup(): ?string
    {
        return UsPrivacyPlugin::get()->getNavigationGroup();
    }

    public static function getNavigationSort(): ?int
    {
        $sort = UsPrivacyPlugin::get()->getNavigationSort();

        return $sort === null ? null : $sort + 1;
    }

    public static function getNavigationIcon(): string|BackedEnum|null
    {
        return UsPrivacyPlugin::get()->getNavigationIcon();
    }

    public static function getSlug(?Panel $panel = null): string
    {
        return UsPrivacyPlugin::get()->getSlug().'-states';
    }
}
