<?php

namespace KingOfWebDesigns\LaravelXpos;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use KingOfWebDesigns\LaravelXpos\Commands\LaravelXposCommand;

class LaravelXposServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-xpos')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_xpos_table')
            ->hasCommand(LaravelXposCommand::class);
    }
}
