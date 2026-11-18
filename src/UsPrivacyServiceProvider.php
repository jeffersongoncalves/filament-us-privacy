<?php

namespace JeffersonGoncalves\Filament\UsPrivacy;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class UsPrivacyServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-us-privacy')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}
