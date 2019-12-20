<?php

use Illuminate\Database\Seeder;
use App\Nutrition;


class NutritionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Nutrition::create([
            'name' => "Carbohydrates"
        ]);

        Nutrition::create([
            'name' => "Fat"
        ]);

        Nutrition::create([
            'name' => "Protein"
        ]);
        
        Nutrition::create([
            'name' => "Calories"
        ]);
    }
}
