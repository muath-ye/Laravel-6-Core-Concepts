<?php

namespace App\Providers;

use App\Billing\CreditPayment as CreditPayment;
use App\Billing\PaypalPayment as PaypalPayment;
use App\Contract\Payment;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /** For Test*/
        app()->bind(
            'Muath',
            function () {
                return new CreditPayment(1,2);
                // return \App\Billing\CreditPayment::class;
            }
        );

        app()->singleton(
            'Swadi',
            function () {
                return new PaypalPayment(1,2);
                // return \App\Billing\PaypalPayment::class;
            }
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
