<?php
namespace MadMikeyB\Laralytics\Http\Middleware;

use Laralytics;
use Closure;

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
class TrackSession {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        Laralytics::storeUserAgent($request->header('User-Agent'));
        // dd($request->headers);
        return $next($request);
    }

}
