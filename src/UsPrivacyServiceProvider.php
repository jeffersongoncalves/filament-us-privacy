<?php

namespace JeffersonGoncalves\Filament\UsPrivacy;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class UsPrivacyServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-us-privacy';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasViews()
            ->hasTranslations();
    }
}
