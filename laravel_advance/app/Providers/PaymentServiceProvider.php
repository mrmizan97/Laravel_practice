<?php

namespace App\Providers;

use App\PaymentService\BkashService;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class PaymentServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BkashService::class, function () {
            return new BkashService("abc-".rand(0, 9999));
        }, true);
    }
    public function provides()
    {
        return [BkashService::class ];
    }
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
