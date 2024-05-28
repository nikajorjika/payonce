<?php

namespace Jorjika\Payonce\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jorjika\Payonce\Payonce
 */
class Payonce extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Jorjika\Payonce\Payonce::class;
    }
}
