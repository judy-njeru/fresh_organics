<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;


use App\RecipeNutritions;
use App\Ingredient;
use App\RecipeIngredients;
use App\MealRecipe;
use App\MealBox;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MealRecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mealRecipes = MealRecipe::all();
        return view('admin.layouts.meal-recipes', ['mealRecipes' => $mealRecipes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $mealBoxes = MealBox::all();
        return view('admin.CRUD.MealRecipe.create', ['mealBoxes' => $mealBoxes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'accompaniment' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'meal_boxes_fk' => 'required',
            'time' => 'required',
            'ingredient_name_1' => 'required',
            'ingredient_name_2' => 'required',
            'ingredient_name_3' => 'required',
            'ingredient_image_1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1500',
            'ingredient_image_2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1500',
            'ingredient_image_3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1500',
            'fat_amount' => 'required',
            'protein_amount' => 'required',
            'carb_amount' => 'required',
            'calorie_amount' => 'required'
        ]);

        $image = $request->file('image');
        $featured_new_name = time() . $image->getClientOriginalName();
        $image->move('uploads/recipes', $featured_new_name);

        $ingredientImage1 = $request->file('ingredient_image_1');
        $newImage1 = time() . $ingredientImage1->getClientOriginalName();
        $ingredientImage1->move('uploads/ingredients', $newImage1);

        $ingredientImage2 = $request->file('ingredient_image_2');
        $newImage2 = time() . $ingredientImage2->getClientOriginalName();
        $ingredientImage2->move('uploads/ingredients', $newImage2);

        $ingredientImage3 = $request->file('ingredient_image_3');
        $newImage3 = time() . $ingredientImage3->getClientOriginalName();
        $ingredientImage3->move('uploads/ingredients', $newImage3);

        // Start transaction!
        DB::beginTransaction();

        //Insert into recipes table
        $recipeID = 0;

        try {
            // Create if valid
            $recipeID = MealRecipe::create([
                "name"    => $request->name,
                "accompaniment"  => $request->accompaniment,
                "description"  => $request->description,
                "image" => $featured_new_name,
                "meal_boxes_fk"  => $request->meal_boxes_fk,
                "time"  => $request->time
            ])->id;
        } catch (Exception $e) {
            // Rollback and then redirect
            // back to form with errors
            DB::rollback();
            return Redirect::to('/admin/meal-recipes/create')
                ->withErrors($e->getErrors())
                ->withInput();
        }


        //insert into ingredients table

        $ids = array();
        $id = 0;

        try {
            $data = array(
                array('name' => $request->get('ingredient_name_1'), 'image' => $newImage1),
                array('name' => $request->get('ingredient_name_2'), 'image' => $newImage2),
                array('name' => $request->get('ingredient_name_3'), 'image' => $newImage3)
            );

            //Not optimal solution--- find new solutions later
            // $ingredient_fk1 = $id - 1;
            // $ingredient_fk2 = $id - 2;
            // $ingredient_fk3 = $id - 3;

            // dd($ids[0]);

            foreach ($data as $value) {
                $id = Ingredient::create($value)->id;
                array_push($ids, $id);
            }
        } catch (Exception $e) {
            // Rollback and then redirect
            // back to form with errors
            DB::rollback();
            return Redirect::to('/admin/meal-recipes/create')
                ->withErrors($e->getErrors())
                ->withInput();
        }


        //insert into recipe_ingredients

        try {
            $ingredients = array(
                array('ingredient_fk' => $ids[0], 'recipe_fk' => $recipeID),
                array('ingredient_fk' => $ids[1], 'recipe_fk' => $recipeID),
                array('ingredient_fk' => $ids[2], 'recipe_fk' => $recipeID)
            );

            foreach ($ingredients as $ingredient) {
                # code...
                RecipeIngredients::create($ingredient);
            }
        } catch (Exception $e) {
            DB::rollback();
            return Redirect::to('/admin/meal-recipes/create')
                ->withErrors($e->getErrors())
                ->withInput();
        }

        //insert into recipe_nutritions

        try {
            $nutrition_info = array(
                array('meal_recipe_fk' => $recipeID, 'nutrition_fk' => 1, 'amount' => $request->get('fat_amount')),
                array('meal_recipe_fk' => $recipeID, 'nutrition_fk' => 2, 'amount' => $request->get('protein_amount')),
                array('meal_recipe_fk' => $recipeID, 'nutrition_fk' => 3, 'amount' => $request->get('carb_amount')),
                array('meal_recipe_fk' => $recipeID, 'nutrition_fk' => 4, 'amount' => $request->get('calorie_amount')),
            );

            foreach ($nutrition_info as $info) {
                # code...
                RecipeNutritions::create($info);
            }
        } catch (Exception $e) {
            DB::rollback();
            return Redirect::to('/admin/meal-recipes/create')
                ->withErrors($e->getErrors())
                ->withInput();
        }

        // Commit the queries!
        DB::commit();


        return redirect()->route("meal-recipes.index")->with('message', 'Great! MealBox created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MealRecipe  $mealRecipe
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    //     // $mealRecipes = MealRecipe::all();
    //     $mealRecipes = MealRecipe::where('meal_boxes_fk', $id )->get();
    //      return view('admin.layouts.meal-recipes', ['mealRecipes' => $mealRecipes]);
    //     //  return view('admin.CRUD.MealBox.Edit',['mealBox'  => $mealBox]);

    // }
    public function show()
    {
        //
        // $mealRecipes = MealRecipe::all();
        $mealRecipes = MealRecipe::where('meal_boxes_fk')->get();
        return view('admin.layouts.meal-recipes', ['mealRecipes' => $mealRecipes]);
        //  return view('admin.CRUD.MealBox.Edit',['mealBox'  => $mealBox]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MealRecipe  $mealRecipe
     * @return \Illuminate\Http\Response
     */
    public function edit(MealRecipe $mealRecipe)
    {
        //
        return view('admin.CRUD.MealRecipe.Edit', ['mealRecipe'  => $mealRecipe]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MealRecipe  $mealRecipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MealRecipe $mealRecipe)
    {
        //
        //
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'accompaniment' => 'required',
            'time' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);


        if ($request->hasFile('image')) {

            // $image = $request->file('image');
            // $name = str_slug($request->name).'.'.$image->getClientOriginalName();
            // $destinationPath = public_path('/uploads/recipes');
            // $imagePath = $destinationPath. "/".  $name;
            // $image->move($destinationPath, $name);


            // $mealRecipe->image = $name;
            $recipeImage = public_path("uploads/recipes/{$mealRecipe->image}"); // get previous image from folder
            if (file_exists($recipeImage)) { // unlink or remove previous image from folder
                unlink($recipeImage);
            }

            $image = $request->file('image');
            $featured_new_name = time() . $image->getClientOriginalName();
            $image->move('uploads/recipes', $featured_new_name);

            $mealRecipe->image = $featured_new_name;
        }
        $mealRecipe->name = $request->get('name');
        $mealRecipe->description = $request->get('description');
        $mealRecipe->accompaniment = $request->get('accompaniment');

        $mealRecipe->time = $request->get('time');

        $mealRecipe->save();
        // $mealRecipe->update(MealRecipe);


        return redirect()->route('meal-recipes.index')
            ->with('message', 'Meal Recipe updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MealRecipe  $mealRecipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(MealRecipe $mealRecipe)
    {
        $mealRecipeID = $mealRecipe->id;
        $ingredients = MealRecipe::with('ingredients')->find($mealRecipeID);
        $recipeImage = public_path("uploads/recipes/{$mealRecipe->image}"); // get previous image from folder

        $ingredientImage = public_path("uploads/ingredients/{$ingredients->image}");
        unlink($ingredientImage);
        unlink($recipeImage);
        $mealRecipe->delete();

        // return redirect()->route('meal-recipes.show')
        return redirect()->route('meal-recipes.index')
            ->with('message', 'Meal Recipe deleted successfully');
    }
}
