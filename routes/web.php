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


Route::get('/',  ["uses" => "LandingPageController@index"]);

Route::get('/box', function () {
    return view('/meal-box');
});

Route::get('/meal-boxes',  ["uses" => "MealBoxController@getMealBoxes"]);

Route::get('/meal-boxes/{name}',  ["uses" => "MealBoxController@show"]);

//Cart Route View
Route::get('/cart',  "CartController@aindex")->name('cart.index');
Route::post('/cart/{box}',  "CartController@store")->name('cart.store');

Route::get('/addToCart/{box}',  "CartController@addToCart")->name('cart.add');
Route::get('/showCart',  "CartController@showCart")->name('cart.show');
Route::get('/cart/delete/{id}',  "CartController@delete")->name('cart.delete');

Route::get('/recipes',  ["uses" => "MealRecipeController@allRecipes"]);
Route::get('/recipe/{id}',  ["uses" => "MealRecipeController@index"]);

Route::get('/checkout',  "CheckoutController@index")->name('checkout');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');

Route::get('/thankyou', 'ConfirmationController@index')->name('confirm.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@getOrders')->name('home');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::resource('meal-boxes', 'Admin\MealBoxController');
    Route::resource('meal-recipes', 'Admin\MealRecipeController');
    Route::resource('ingredients', 'Admin\IngredientController');
});



// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// });
