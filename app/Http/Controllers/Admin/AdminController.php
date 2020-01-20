<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Order;
use App\MealRecipe;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin'); //use admin guard to authenticate
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalUsers = User::count();
        $totalOrders = Order::count();
        $totalRecipes = MealRecipe::count();
        return view('admin/admin', ["userCount" => $totalUsers, "orderCount" => $totalOrders, "recipeCount" => $totalRecipes]);
    }
}
