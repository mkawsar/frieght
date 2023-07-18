<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->mapWebRoutes();;
        $this->mapApiRoutes();
    }

    protected function mapWebRoutes()
    {
        Route::group([
            'middleware' => 'web',
        ], function ($router) {
            $routes = glob(base_path('routes/web/*.php'));
            foreach ($routes as $route) {
                require $route;
            }
        });
    }

    protected function mapApiRoutes()
    {
        Route::group([
            'prefix' => 'api/v1',
            'namespace' => $this->namespace,
        ], function ($router) {
            $routes = glob(base_path('routes/api/*.php'));
            foreach ($routes as $route) {
                require $route;
            }
        });
    }
}
