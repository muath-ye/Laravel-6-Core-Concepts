<?php


namespace App\Billing;


use App\Contract\Payment;
use Illuminate\Support\Str;

class UnknownPayment extends BasePayment
{
    private $return_message = [
        'Payment Type' => 'Unknown Payment Gateway! [view]',
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
        return $this->return_message;
    }
}
