<?php

namespace Foxws\LivewireEncrypt;

use Foxws\LivewireEncrypt\Middlewares\HydratePublicProperties;
use Foxws\LivewireEncrypt\Providers\LivewireServiceProvider;
use Livewire\HydrationMiddleware\HydrationMiddleware;
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
        $this->app->singleton(\Livewire\LivewireManager::class, HydratePublicProperties::class);

        $this->app->bind(
            \Livewire\LivewireServiceProvider::class,
            LivewireServiceProvider::class
        );

        $this->app->bind(
            HydrationMiddleware::class,
            HydratePublicProperties::class
        );

        $this->app->bind(
            \Livewire\HydrationMiddleware\HydratePublicProperties::class,
            HydratePublicProperties::class
        );

        $this->app->singleton(
            \Livewire\HydrationMiddleware\HydratePublicProperties::class,
            HydratePublicProperties::class
        );
    }

    public function packageBooted(): void
    {
        // $this->app->singleton(\Livewire\LivewireServiceProvider::class, LivewireServiceProvider::class);

        $this->app->bind(
            \Livewire\LivewireServiceProvider::class,
            LivewireServiceProvider::class
        );

        $this->app->bind(
            HydrationMiddleware::class,
            HydratePublicProperties::class
        );

        $this->app->singleton(
            HydrationMiddleware::class,
            HydratePublicProperties::class
        );

        $this->app->bind(
            \Livewire\HydrationMiddleware\HydratePublicProperties::class,
            HydratePublicProperties::class
        );

        $this->app->singleton(
            \Livewire\HydrationMiddleware\HydratePublicProperties::class,
            HydratePublicProperties::class
        );

        // $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        // $loader->alias(
        //     \Livewire\HydrationMiddleware\HydratePublicProperties::class,
        //     HydratePublicProperties::class
        // );
    }
}
