<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // if($request('change_language')) {
        //     session()->put('language', request('change_language'));
        //     $language = $request('change_language');
        // }
        // elseif(session('language'))
        // {
        //     $language = session('language');
        // }
        // elseif(config('app.locale'))
        // {
        //     $language = config('app.locale');
        // }

        // if(isset($language) && config('app.language.' .$language))
        // {
        //     app()->setLocale($language);
        // }


        return $next($request);
    }
}
