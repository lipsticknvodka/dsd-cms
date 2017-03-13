<?php
/**
 * Created by PhpStorm.
 * User: michelleprather
 * Date: 2/28/17
 * Time: 2:38 PM
 */

namespace App\Http\Middleware;

use Closure;
class Admin
{


    public function handle($request, Closure $next){

            return $next($request);
    }
}