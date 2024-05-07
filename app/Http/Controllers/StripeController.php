<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Cashier\Cashier;
use \Stripe\Stripe;

class StripeController extends Controller
{
    public function index() {
        return view(view: 'index');
    }

    public function checkout() {
        \Stripe\Stripe::setApiKey(config(key:'stripe.sk'));

        $session = \Stripe\Checkout\Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'gpb',
                        'product_data' => [
                            'name' => 'Send me money!!!',
                        ],
                        'unit_amount' => 500,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route(name:'success'),
            'cancel_url' => route(name:'index'),
        ]);

        return redirect()->away($session->url);
    }

    public function success() {
        return view(view:'index');
    }
}
