<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function checkout()
    {
        return view('checkout');
    }

    public function session()
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $session = \Stripe\Checkout\Session::create([
            'mode'        => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('checkout'),
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'usd',
                        'product_data' => [
                            'name' => 'Testing stripe API #1',
                        ],
                        'unit_amount'  => 666,
                    ],
                    'quantity'   => 1,
                ],
            ]
        ]);

        return redirect()->away($session->url);
    }

    public function success()
    {
        return view('success');
    }
}