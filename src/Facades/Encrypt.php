<?php

namespace Foxws\LivewireEncrypt\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Foxws\LivewireEncrypt\LivewireEncrypt
 */
class Encrypt extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Foxws\LivewireEncrypt\Encrypt::class;
    }
}
