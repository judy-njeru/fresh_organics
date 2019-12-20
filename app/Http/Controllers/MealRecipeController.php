<?php

namespace App\Http\Controllers;

use App\MealRecipe;
use App\Cart;
use Illuminate\Support\Facades\DB;

class MealRecipeController extends Controller
{
    //
    public function allRecipes()
    {
        $mealRecipes = DB::table('meal_recipes')->get();

        // if (session()->has('cart')) {
        //     $cart = new Cart(session()->get('cart'));
        // } else {
        //     $cart = new Cart(); // returns empty cart /null
        // }

        return view('meal-recipes.meal-recipes', ['mealRecipes' => $mealRecipes]);
    }

    //
    public function index($id)
    {

        $nutritionalInfo = DB::table('nutrition_data')->where('meal_recipe_id', $id)->get();

        $mealRecipe = MealRecipe::where('id', $id)->get();
        //Relationship among tables can be maintained in an elegant way. Just mention the type of relationship, nothing else(JOIN, LEFT JOIN, RIGHT JOIN etc.) needed in query anymore to get data of related tables.
        //** remove the join* */
        $ingredients = DB::table('ingredients_info')
            ->join('ingredients', 'ingredients_info.ingredient_fk', '=', 'ingredients.id')
            ->join('meal_recipes', 'ingredients_info.recipe_fk', '=', 'meal_recipes.id')
            ->select('ingredients_info.id as ingredient_id', 'meal_recipes.id as recipe_id', 'ingredients.name as ingredient_name', 'meal_recipes.name as recipe_name', 'ingredients.image as ingredient_image')
            ->where('meal_recipes.id', $id)
            ->get();

        return view('meal-recipes.meal-recipe', ['mealRecipe' => $mealRecipe, 'ingredients' => $ingredients, 'nutritionalInfo' => $nutritionalInfo]);
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
