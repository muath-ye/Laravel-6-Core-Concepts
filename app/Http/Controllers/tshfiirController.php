<?php

namespace App\Http\Controllers;

use App\Contract\Payment;
use Illuminate\Http\Request;

class tshfiirController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('welcome');
    }


    /**
     * Test Service Container with interface
     *
     * @param Payment $payment
     *
     * @return Payment
     */
    public function payment(Payment $payment)
    {
        return $payment->charge();
    }
}


