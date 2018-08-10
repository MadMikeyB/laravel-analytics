<?php
namespace MadMikeyB\Laralytics\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Laralytics
 *
 * @package    MadMikeyB\Laralytics
 * @author     Michael Burton <me@mikeylicio.us>
 * @copyright  2018 Michael Burton
 * @license    MIT https://opensource.org/licenses/MIT
 * @since      0.0.1
 * @link       https://github.com/madmikeyb/laravel-analytics
 */
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
