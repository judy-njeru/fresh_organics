<?php

namespace App\Http\Controllers;

use App\MealRecipe;
use App\Ingredient;
use App\Nutrition;

class MealRecipeController extends Controller
{
    //
    public function allRecipes()
    {
        $mealRecipes = MealRecipe::get();
        return view('meal-recipes.meal-recipes', ['mealRecipes' => $mealRecipes]);
    }

    //
    public function index($id)
    {
        try {
            $mealRecipe = MealRecipe::where('id', $id)->get();
            $ingredients = MealRecipe::with('ingredients')->find($id);
            $nutrition = MealRecipe::with('nutrition')->find($id);
            // dd($nutrition);

            return view('meal-recipes.meal-recipe', ['mealRecipe' => $mealRecipe, 'ingredients' => $ingredients, 'nutrition' => $nutrition]);
        } catch (\Exception $e) {
            dd($e);
            return view('meal-recipes.meal-recipe')->withErrors($e->getErrors());
        }
    }
}
