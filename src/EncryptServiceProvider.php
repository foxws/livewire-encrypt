<?php

namespace Foxws\LivewireEncrypt;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class EncryptServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('livewire-encrypt');
    }

    public function packageRegistered()
    {
        //
    }

    public function packageBooted(): void
    {
        //
    }
}
