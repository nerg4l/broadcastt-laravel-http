<?php

namespace Broadcastt\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

class Broadcastt extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'broadcastt';
    }
}