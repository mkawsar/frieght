<?php

namespace App\Providers;

use App\Interfaces\ShippingFreightInterface;
use App\Interfaces\SourceInterface;
use App\Services\FedexFreightRateService;
use App\Services\ShippingFreightServices;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(SourceInterface::class, FedexFreightRateService::class);
        $this->app->bind(ShippingFreightInterface::class, ShippingFreightServices::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
