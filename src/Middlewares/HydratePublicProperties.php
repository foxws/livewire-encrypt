<?php

namespace Foxws\LivewireEncrypt\Middlewares;

use Intervention\Image\Gd\Font;

class HydratePublicProperties extends Font
{
    public static function hydrate($instance, $request)
    {
        dd('do');
    }

    public static function dehydrate($instance, $response)
    {
        dd('foo');
    }
}
