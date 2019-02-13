<?php

namespace Deviouspk\Testgg;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Deviouspk\Testgg\Skeleton\SkeletonClass
 */
class TestggFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'testgg';
    }
}
