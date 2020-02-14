<?php


namespace App\Billing;


use App\Contract\Payment;
use Illuminate\Support\Str;

class PaypalPayment extends BasePayment
{
    private $currency;
    private $discount;

    public function __construct($currency, $discount = 0.1)
    {
        $this->currency = $currency;
        $this->discount = $discount ?? 0.05;
    }

    public function setDiscount($amount)
    {
        $this->discount = $amount;
    }

    public function pay()
    {

    }

    public function charge($amount = null, $coupon_number = null)
    {
        $amount = request('amount');
        return [
            'Payment Type'        => 'PayPal',
            'Amount'              => $amount,
            'Discount'            => $this->discount,
            'Currency'            => request('currency'),
            'Confirmation Number' => request('amount'),
            'Total Charge'        => $amount - $this->discount * $amount
        ];
    }
}
