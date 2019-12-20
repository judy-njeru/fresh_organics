<?php

namespace App\Http\Controllers;

use App\MealBox;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MealBoxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getMealBoxes()
    {
        //
        $mealBoxes = MealBox::all();

        return view('meal-boxes.meal-boxes', ['mealBoxes' => $mealBoxes]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MealBox  $mealBox
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        $mealBox = MealBox::where('name', $name)->get();
        $otherMealBoxes = MealBox::where('name', '!=', $name)->take(3)->get();
        return view('meal-boxes/meal-box', ['mealBox' => $mealBox, 'otherMealBoxes' => $otherMealBoxes]);
    }

    public function showCart(Request $request)
    {
        $cart = session()->get('cart');
        return response()->json($cart);
    }
}
