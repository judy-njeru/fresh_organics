<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use App\OrderMealBox;
use Stripe\Stripe;
use Redirect;


use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        Stripe::setApiKey(env('STRIPE_SECRET'));
    }

    public function index()
    {
        if (!session()->has('cart')) {
            return Redirect::back()->with('success', 'Cart is empty');
        }

        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;

        return view('checkout', ['total' => $total]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        $cartQuantity = $cart->totalQty;
        $items = $cart->items;
        $contents = '{}';

        foreach ($items as $item) {
            $contents = $item['item']['name'] . ' , ' . $item['qty'];
        }

        try {
            $token = $request->stripeToken;
            $customerEmail = $request->email;

            $charge = \Stripe\Charge::create([
                'amount' => $total,
                'currency' => 'dkk',
                'description' => 'Example charge',
                'receipt_email' => $customerEmail,
                'source' => $token,
                'metadata' => [
                    'contents' => $contents,
                    'quantity' => $cartQuantity
                ]
            ]);

            //Insert into orders table
            $order = Order::create([
                'user_id' => auth()->user() ? auth()->user()->id : null,
                'billing_email' => $request->email,
                'billing_name' => $request->name,
                'billing_address' => $request->address,
                'billing_city' => $request->city,
                'billing_province' => $request->province,
                'billing_postalcode' => $request->postalcode,
                'billing_phone' => $request->phone,
                'billing_name_on_card' => $request->name_on_card,
                'billing_total' => $total,
                'error' => null
            ]);

            //Insert into order_meal_boxes join table
            foreach ($items as $item) {
                OrderMealBox::create([
                    'order_id' => $order->id,
                    'meal_id' => $item['item']['id'],
                    'quantity' => $item['qty']
                ]);
            }
            //redirect on success
            $request->session()->forget('cart');
            return redirect()->route('confirm.index')->with('success_message', 'Thank you for your payment. payment accepted');
        } catch (\Exception $e) {
            return Redirect::back()->withErrors('Error! ' . $e->getMessage());
        }
    }
}
