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

        $Nutrition1 = new Nutrition;
        $Nutrition1->name = "Carbohydrates";
        $Nutrition1->save();

        $Nutrition2 = new Nutrition;
        $Nutrition2->name = "Fat";
        $Nutrition2->save();

        $Nutrition3 = new Nutrition;
        $Nutrition3->name = "Protein";
        $Nutrition3->save();

        $Nutrition4 = new Nutrition;
        $Nutrition4->name = "Calories";
        $Nutrition4->save();
    }
}
