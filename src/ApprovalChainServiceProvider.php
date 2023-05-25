<?php

namespace Abather\ApprovalChain;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Abather\ApprovalChain\Commands\ApprovalChainCommand;

class ApprovalChainServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('approval-chain')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_approval-chain_table')
            ->hasCommand(ApprovalChainCommand::class);
    }
}
