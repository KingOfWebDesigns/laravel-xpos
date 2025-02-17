<?php

namespace KingOfWebDesigns\LaravelXpos\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \KingOfWebDesigns\LaravelXpos\LaravelXpos
 */
class LaravelXpos extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \King Of Web Designs\LaravelXpos\LaravelXpos::class;
    }
}
