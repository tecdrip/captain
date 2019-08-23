<?php

namespace Tecdrip\Captain;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Tecdrip\Captain\Skeleton\SkeletonClass
 */
class CaptainFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'captain';
    }
}
