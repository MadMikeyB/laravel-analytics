<?php
namespace MadMikeyB\Laralytics\Facades;

use Illuminate\Support\Facades\Facade;

class LaralyticsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laralytics';
    }
}
