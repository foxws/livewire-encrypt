<?php

namespace Foxws\LivewireEncrypt\Providers;

use Livewire\LivewireServiceProvider as LivewireLivewireServiceProvider;

class LivewireServiceProvider extends LivewireLivewireServiceProvider
{
    public function register()
    {
        dd('booted');
    }
    public function boot()
    {
        dd('booted');
    }
}
