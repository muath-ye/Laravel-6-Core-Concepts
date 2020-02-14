<?php


namespace App\Contract;


interface Payment
{
    public function setDiscount($amount);
    public function pay();
    public function charge($amount = null, $coupon = null);
}
