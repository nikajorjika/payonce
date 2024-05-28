<?php

namespace Jorjika\Payonce;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Jorjika\Payonce\Commands\PayonceCommand;

class PayonceServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('payonce')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_payonce_table')
            ->hasCommand(PayonceCommand::class);
    }
}
