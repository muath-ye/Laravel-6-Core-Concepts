<?php

namespace App\Providers;

use App\Billing\BasePayment;
use App\Billing\CouponPayment;
use App\Billing\CreditPayment;
use App\Billing\PaypalPayment;
use App\Billing\UnknownPayment;
use App\Contract\Payment;
use Illuminate\Support\ServiceProvider;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app()->singleton(
            Payment::class,
            function () {
                if (request()->isMethod('post')) {
                    if (request()->has('credit')) {
                        return new CreditPayment('RY');
                    } elseif (request()->has('coupon')) {
                        return new CouponPayment('RY', 9941016);
                    } elseif (request()->has('paypal')) {
                        return new PaypalPayment('USD');
                    } else {
                        return new UnknownPayment();
                    }
                // return new PaypalPayment('USD'); //General payment method
                }
                return new BasePayment();
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
