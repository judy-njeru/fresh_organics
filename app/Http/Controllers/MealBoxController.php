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
    public function index()
    {
        //

        $mealBoxes = MealBox::all();
        return view('layouts.MealBoxes.meal-boxes', ['mealBoxes' => $mealBoxes]);
    }

 

    /**
     * Display the specified resource.
     *
     * @param  \App\MealBox  $mealBox
     * @return \Illuminate\Http\Response
     */
    public function show($name)

    {
        //
        $mealBox = MealBox::where('name', $name )->get();

        return view('layouts/MealBoxes/meal-box', ['mealBox' => $mealBox]);
    }

}
