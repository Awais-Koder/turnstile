<?php

namespace Turnstile\Turnstile\Facades;

use Illuminate\Support\Facades\Facade;

class Turnstile extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'turnstile';
    }
}
