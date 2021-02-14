<?php

namespace SchuBu\TwUtilitybox;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SchuBu\TwUtilitybox\Skeleton\SkeletonClass
 */
class TwUtilityboxFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tw-utilitybox';
    }
}
