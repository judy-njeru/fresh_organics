<?php

namespace App\Http\Controllers;


use App\MealRecipe;

class LandingPageController extends Controller
{
    //
    public function index()
    {
        $mealRecipes = MealRecipe::latest()->take(3)->get();

        return view('landing', ['mealRecipes' => $mealRecipes]);
    }

}
