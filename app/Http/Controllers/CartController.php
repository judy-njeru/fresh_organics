<?php

namespace App\Http\Controllers;

use App\MealBox;
use App\Cart;

use Illuminate\Http\Request;

class CartController extends Controller
{

    public function showCart()
    {
        $cart = session()->get('cart');
        return response()->json($cart);
    }

    public function addToCart(Request $request, $id)
    {
        $selectedPeople = $request->get('selectedPeople');
        $selectedDays = $request->get('selectedDays');
        $totalMealPrice = $request->get('totalMealPrice');

        $meal = MealBox::find($id);

        $previousCart = session()->has('cart') ? session()->get('cart') : null;


        $cart = new Cart($previousCart);

        $cart->add($meal, $selectedPeople, $selectedDays, $totalMealPrice);

        session()->put('cart', $cart);
        echo json_encode($cart);
    }


    // public function store(Request $request, $id)


    // {
    //     //echo("yes");
    //     $selectedPeople = $request->get('selectedPeople');
    //     $selectedDays = $request->get('selectedDays');

    //     // // $totalMealPrice = $request->get('totalMealPrice');

    //     // // return;
    //     // $meal = MealBox::find($id);

    //     // // if (session()->has('cart')) {
    //     // //     $cart = new Cart(session()->get('cart'));
    //     // // } else {
    //     // //     $cart = new Cart($previousCart, $ff);

    //     // // }

    //     // $previousCart = Session::has('cart') ? Session::get('cart') : null;

    //     // $cart = new Cart($previousCart);


    //     // $cart->add($meal, $selectedPeople, $selectedDays,);

    //     // // $request->session()->put('cart', $cart);
    //     // session()->put('cart', $cart);
    //     // dd($request->session()->get('cart'));
    //     // echo json_encode($cart);

    //     echo ($selectedDays);
    //     return;
    //     // return view('/layouts/MealBoxes/meal-box', ['cart' => $cart]);
    //     // return Redirect::back()->with('success', 'Box was added');
    // }

    public function delete($id)
    {
        $cart = session()->get('cart');
        $cart->totalPrice = $cart->totalPrice - $cart->items[$id]['mealTotalPrice'];

        $cart->totalQty = $cart->totalQty - 1;
        unset($cart->items[$id]);

        session()->put('cart', $cart);
        echo '{"status":"success","message":"item deleted successfully"}';
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
}
