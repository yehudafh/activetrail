<?php

namespace Yehudafh\ActiveTrail\Facades;

use Illuminate\Support\Facades\Facade;

class ActiveTrail extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'activetrail';
    }
}
