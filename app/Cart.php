<?php

namespace App;

class Cart // not using eloquent model here just a normal php class
{
    //
    public $items = null; // group of all meals with info about total items and total price
    public $totalQty = 0;
    public $totalPrice = 0;


    public function __construct($previousCart)
    {
        if ($previousCart) {
            $this->items = $previousCart->items;
            $this->totalQty = $previousCart->totalQty;
            $this->totalPrice = $previousCart->totalPrice;
        }
    }


    public function add($item, $selectedPeople, $selectedDays, $totalMealPrice)
    {
        $storedItem = [
            'qty' => 0,
            'mealTotalPrice' => 0,
            'item' => $item,
        ];


        $id = uniqid();

        if ($this->items) {
            if (!array_key_exists($id, $this->items)) {
                $this->items[$id] = $storedItem;
            }
        }

        $item->people = $selectedPeople;
        $item->testy = $totalMealPrice;
        $item->days = $selectedDays;
        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $storedItem['mealTotalPrice'] = $totalMealPrice;
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $totalMealPrice;
    }


    public function delete($item)
    {
        $this->totalQty--;
        $this->totalPrice - $item->price;
    }
}
