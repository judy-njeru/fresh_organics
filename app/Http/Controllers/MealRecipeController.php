<?php

namespace App\Http\Controllers;

use App\MealRecipe;
use Illuminate\Support\Facades\DB;

class MealRecipeController extends Controller
{
    //
    public function allRecipes()
    {
        $mealRecipes = DB::table('meal_recipes')->get();

        return view('layouts/meal-recipes', ['mealRecipes' => $mealRecipes]);
    }

    //
    public function index($id)
    {
        // $mealRecipe = DB::table('meal_recipes')->where('id', $id )->get();
        $mealRecipe = MealRecipe::where('id', $id )->get();

        $ingredients = DB::table('ingredients_info')
            ->join('ingredients', 'ingredients_info.ingredient_fk', '=', 'ingredients.id')
            ->join('meal_recipes', 'ingredients_info.recipe_fk', '=', 'meal_recipes.id')
            ->select('ingredients_info.id as ingredient_id', 'meal_recipes.id as recipe_id', 'ingredients.name as ingredient_name', 'meal_recipes.name as recipe_name', 'ingredients.image as ingredient_image')
            ->where('meal_recipes.id', $id )
            ->get();

        return view('layouts/meal-recipe', ['mealRecipe' => $mealRecipe, 'ingredients' => $ingredients]);
    }

    // public function index($id)
    //     {
    //         $mealRecipe = DB::table('meal_recipes')->where('id', $id )->get();
    
    //         $ingredients = DB::table('ingredients_info')
    //             ->join('ingredients', 'ingredients_info.ingredient_fk', '=', 'ingredients.id')
    //             ->join('meal_recipes', 'ingredients_info.recipe_fk', '=', 'meal_recipes.id')
    //             ->select('ingredients_info.id as ingredient_id', 'meal_recipes.id as recipe_id', 'ingredients.name as ingredient_name', 'meal_recipes.name as recipe_name', 'ingredients.image as ingredient_image')
    //             ->where('meal_recipes.id', $id )
    //             ->get();
    
    //         return view('layouts/meal-recipe', ['mealRecipe' => $mealRecipe, 'ingredients'=> $ingredients]);
    //     }
   
}
