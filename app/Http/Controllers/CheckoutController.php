<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{

    public function index(Request $request)
    {
        $amount = $request->amount;
        $amount = $amount*100;
        $PaymentMethod = $request->payment_method;
        $user = auth()->user();

       $user->createOrGetStripeCustomer();
        $PaymentMethod = $user->addPaymentMethod($PaymentMethod);

      $user->charge($amount,$PaymentMethod->id);
     return to_route('home');

    }
}
