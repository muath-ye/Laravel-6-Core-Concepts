<?php


namespace App\Billing;


use App\Contract\Payment;

class BasePayment implements Payment
{
    private $return_message = [
        'Payment Type' => 'Error Method! [view]',
    ];

    public function __construct($currency = null, $discount = null)
    {
        return $this->return_message;
    }

    public function setDiscount($amount)
    {
        return $this->return_message;
    }

    public function pay()
    {
        return $this->return_message;
    }

    public function charge($amount = null, $coupon_number = null)
    {
        if (request()->has('credit')) {
            return view('payment.credit');
        } elseif (request()->has('coupon')) {
            return view('payment.coupon');
        } elseif (request()->has('paypal')) {
            return view('payment.paypal');
        } elseif (request()->has('kuraimi')) {
            return view('payment.kuraimi');
        } else {
            return view('payment.unknown');
        }
    }
}
