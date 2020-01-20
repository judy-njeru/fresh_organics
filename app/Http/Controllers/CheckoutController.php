<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Validator;

use App\Cart;
use App\Order;
use App\OrderDetails;
use App\Payment;
use App\Billing;
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

        $sValidationRules = [
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'city' => 'required',
            'province' => 'required',
            'postalcode' => 'required|integer',
            'phone' => 'required|integer',
        ];

        $mess = [
            'name.required' => 'Please fill out the billing name',
            'address.required' => 'Please fill out the billing address',
            'city.required' => 'Please fill out the billing city',
            'province.required' => 'Please fill out the billing province',
            'postalcode.integer' => 'Please enter a valid postal code',
            'phone.integer' => 'Please enter a valid phone number'
        ];

        $validator = Validator::make($request->all(), $sValidationRules, $mess);



        if ($validator->fails()) // on validator found any error 
        {
            // pass validator object in withErrors method & also withInput it should be null by default
            return redirect('/checkout')->withErrors($validator)->withInput();
        }


        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        $cartQuantity = $cart->totalQty;
        $items = $cart->items;
        $contents = '{}';

        foreach ($items as $item) {
            $contents = $item['item']['name'] . ' , ' . $item['qty'];
        }

        //store billing details --  user_id, payment_id etc

        //store order -- user_id, billing_id, order_total
        //store order_details -- order_id,meal_box_id and meal box qty

        // dd($request);

        $token = $request->stripeToken;
        $customerEmail = $request->email;

        $charge = \Stripe\Charge::create([
            'amount' => $total,
            'currency' => 'dkk',
            'description' => 'Meal Order',
            'receipt_email' => $customerEmail,
            'source' => $token,
            'metadata' => [
                'contents' => $contents,
                'quantity' => $cartQuantity
            ]
        ]);

        // Start database transaction!
        DB::beginTransaction();

        //Insert into payments table
        $paymentID = 0;

        try {
            // Create if valid
            $paymentID = Payment::create([
                "payment_method"    => $charge->payment_method_details->card->brand,
                "payment_status"  => $charge->status,
                "amount" => $charge->amount,
                'error' => null
            ])->id; //retrieve inserted payment id
        } catch (Exception $e) {
            DB::rollback();
            throw $e;
        }

        //Insert billing data into billings table
        $billingID = 0;

        try {
            // Create if valid
            $billingID = Billing::create([
                'user_fk' => auth()->user() ? auth()->user()->id : null,
                'payment_fk' => $paymentID,
                'billing_name' => $request->name,
                'billing_email' => $request->email,
                'billing_address' => $request->address,
                'billing_city' => $request->city,
                'billing_province' => $request->province,
                'billing_postalcode' => $request->postalcode,
                'billing_phone' => $request->phone,
                'billing_total' => $total,
            ])->id;
        } catch (Exception $e) {
            DB::rollback();
            throw $e;
        }

        //Insert user order into orders table
        $orderID = 0;
        try {
            $orderID = Order::create([
                'user_fk' => auth()->user() ? auth()->user()->id : null,
                'billing_fk' => $billingID,
                'order_total' => $total
            ])->id;
        } catch (Exception $e) {
            DB::rollback();
            throw $e;
        }

        //Insert into orders details table
        try {
            foreach ($items as $item) {
                OrderDetails::create([
                    'order_fk' => $orderID,
                    'user_fk' => auth()->user() ? auth()->user()->id : null,
                    'meal_box_fk' => $item['item']['id'],
                    'quantity' => $item['qty']
                ]);
            }
        } catch (Exception $e) {
            DB::rollback();
            throw $e;
        }

        //if the queries above are successful, commit the transaction
        DB::commit();

        // Delete cart from session
        $request->session()->forget('cart');
        // redirect to thank you page
        return redirect()->route('confirm.index')->with('success_message', 'Thank you for your payment. payment accepted');
    }
}
