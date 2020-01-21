<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetails;
use Auth;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
        // return view('admin/admin');
    }

    public function getOrders()
    {

        $orders = DB::table('meal_boxes')
            ->select('name', 'description', 'image', 'price', 'user_fk', 'quantity')
            ->join('order_details', 'meal_box_fk', '=', 'meal_boxes.id')
            ->where('order_details.user_fk', Auth::id())
            ->get();
        // dd($orders);
        return view('home', ['orders' => $orders]);
    }
}
