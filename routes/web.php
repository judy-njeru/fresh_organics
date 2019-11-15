<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $mealRecipes = DB::table('meal_recipes')->take(3)->get();;
    return view('layouts/landing', ['mealRecipes' => $mealRecipes]);
});



// Route::resource('meal-recipe','MealRecipeController');  

// Route::get('/meal-boxes', function () {
//     return view('layouts/MealBoxes/meal-boxes');
// });
Route::get('/meal-boxes',  ["uses"=>"MealBoxController@index"]);
Route::get('/meal-boxes/{name}',  ["uses"=>"MealBoxController@show"]);


// Route::get('/recipes', function () {
//     return view('layouts/meal-recipes');
// });

Route::get('/recipes',  ["uses"=>"MealRecipeController@allRecipes"]);

// Route::get('/recipe', function () {
//     return view('layouts/meal-recipe');
// });

Route::get('/recipe/{id}',  ["uses"=>"MealRecipeController@index"]);

Route::get('/box', function () {
    return view('layouts/meal-box');
});

Route::get('/checkout', function () {
    return view('layouts/checkout');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::resource('meal-boxes','Admin\MealBoxController');
    Route::resource('meal-recipes','Admin\MealRecipeController');
    Route::resource('ingredients','Admin\IngredientController');
});

