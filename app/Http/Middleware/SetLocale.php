<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        $supportedLocales = ['uk', 'en'];

        if ($request->has('lang')) {
            $lang = $request->query('lang');
            if (in_array($lang, $supportedLocales, true)) {
                session(['locale' => $lang]);
            }
        }

        $locale = session('locale', 'uk');
        app()->setLocale($locale);

        return $next($request);
    }
}
