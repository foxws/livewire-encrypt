<?php

namespace Foxws\LivewireEncrypt;

use Foxws\LivewireEncrypt\Middlewares\HydratePublicProperties;
use Illuminate\Foundation\AliasLoader;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class EncryptServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('livewire-encrypt');
    }

    public function packageRegistered(): void
    {
        $loader = AliasLoader::getInstance();

        $loader->alias(
            \Livewire\HydrationMiddleware\HydratePublicProperties::class,
            HydratePublicProperties::class
        );
    }
}
