<?php


namespace App\Billing;


use App\Contract\Payment;
use Illuminate\Support\Str;

class CreditPayment extends BasePayment
{
    private $currency;
    private $discount;

    public function __construct($currency, $discount = null)
    {
        $this->currency = $currency;
        $this->discount = $discount ?? 0.02;
    }

    public function setDiscount($amount)
    {
        $this->discount = $amount;
    }

    public function pay()
    {
        return 'help credit payment';
    }

    public function charge($amount = null, $coupon_number = null)
    {
        $amount = request('amount');
        return [
            'Payment Type'        => 'Credit Card',
            'Amount'              => $amount,
            'Discount'            => $this->discount,
            'Currency'            => request('currency'),
            'Card Number'         => request('card_number'),
            'Total Charge'        => $amount - $this->discount * $amount
        ];
    }
}
