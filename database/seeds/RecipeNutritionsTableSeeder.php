<?php

use Illuminate\Database\Seeder;
use App\RecipeNutritions;

class RecipeNutritionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Recipe 1
        //carbs
        $NutritionInfo1 = new RecipeNutritions;
        $NutritionInfo1->meal_recipe_fk = "1";
        $NutritionInfo1->nutrition_fk = "1";
        $NutritionInfo1->amount = "2g";
        $NutritionInfo1->save();
        //fat
        $NutritionInfo2 = new RecipeNutritions;
        $NutritionInfo2->meal_recipe_fk = "1";
        $NutritionInfo2->nutrition_fk = "2";
        $NutritionInfo2->amount = "42g";
        $NutritionInfo2->save();
        //protein
        $NutritionInfo3 = new RecipeNutritions;
        $NutritionInfo3->meal_recipe_fk = "1";
        $NutritionInfo3->nutrition_fk = "3";
        $NutritionInfo3->amount = "42g";
        $NutritionInfo3->save();

        //Recipe 2
        //carbs
        $NutritionInfo4 = new RecipeNutritions;
        $NutritionInfo4->meal_recipe_fk = "2";
        $NutritionInfo4->nutrition_fk = "1";
        $NutritionInfo4->amount = "7g";
        $NutritionInfo4->save();
        //fat
        $NutritionInfo5 = new RecipeNutritions;
        $NutritionInfo5->meal_recipe_fk = "2";
        $NutritionInfo5->nutrition_fk = "2";
        $NutritionInfo5->amount = "66g";
        $NutritionInfo5->save();
        //protein
        $NutritionInfo6 = new RecipeNutritions;
        $NutritionInfo6->meal_recipe_fk = "2";
        $NutritionInfo6->nutrition_fk = "3";
        $NutritionInfo6->amount = "56g";
        $NutritionInfo6->save();


        //Recipe 3
        //carbs
        $NutritionInfo7 = new RecipeNutritions;
        $NutritionInfo7->meal_recipe_fk = "3";
        $NutritionInfo7->nutrition_fk = "1";
        $NutritionInfo7->amount = "5g";
        $NutritionInfo7->save();
        //fat
        $NutritionInfo8 = new RecipeNutritions;
        $NutritionInfo8->meal_recipe_fk = "3";
        $NutritionInfo8->nutrition_fk = "2";
        $NutritionInfo8->amount = "48g";
        $NutritionInfo8->save();
        //protein
        $NutritionInfo9 = new RecipeNutritions;
        $NutritionInfo9->meal_recipe_fk = "3";
        $NutritionInfo9->nutrition_fk = "3";
        $NutritionInfo9->amount = "37g";
        $NutritionInfo9->save();


        //Recipe 4
        //carbs
        $NutritionInfo10 = new RecipeNutritions;
        $NutritionInfo10->meal_recipe_fk = "4";
        $NutritionInfo10->nutrition_fk = "1";
        $NutritionInfo10->amount = "29g";
        $NutritionInfo10->save();
        //fat
        $NutritionInfo11 = new RecipeNutritions;
        $NutritionInfo11->meal_recipe_fk = "4";
        $NutritionInfo11->nutrition_fk = "2";
        $NutritionInfo11->amount = "26g";
        $NutritionInfo11->save();
        //protein
        $NutritionInfo12 = new RecipeNutritions;
        $NutritionInfo12->meal_recipe_fk = "4";
        $NutritionInfo12->nutrition_fk = "3";
        $NutritionInfo12->amount = "28.5g";
        $NutritionInfo12->save();


        //Recipe 5
        //carbs
        $NutritionInfo13 = new RecipeNutritions;
        $NutritionInfo13->meal_recipe_fk = "5";
        $NutritionInfo13->nutrition_fk = "1";
        $NutritionInfo13->amount = "6.5g";
        $NutritionInfo13->save();
        //fat
        $NutritionInfo14 = new RecipeNutritions;
        $NutritionInfo14->meal_recipe_fk = "5";
        $NutritionInfo14->nutrition_fk = "2";
        $NutritionInfo14->amount = "21.6g";
        $NutritionInfo14->save();
        //protein
        $NutritionInfo15 = new RecipeNutritions;
        $NutritionInfo15->meal_recipe_fk = "5";
        $NutritionInfo15->nutrition_fk = "3";
        $NutritionInfo15->amount = "23.4g";
        $NutritionInfo15->save();


        //Recipe 6
        //carbs
        $NutritionInfo16 = new RecipeNutritions;
        $NutritionInfo16->meal_recipe_fk = "6";
        $NutritionInfo16->nutrition_fk = "1";
        $NutritionInfo16->amount = "23g";
        $NutritionInfo16->save();
        //fat
        $NutritionInfo17 = new RecipeNutritions;
        $NutritionInfo17->meal_recipe_fk = "6";
        $NutritionInfo17->nutrition_fk = "2";
        $NutritionInfo17->amount = "8.6g";
        $NutritionInfo17->save();
        //protein
        $NutritionInfo18 = new RecipeNutritions;
        $NutritionInfo18->meal_recipe_fk = "6";
        $NutritionInfo18->nutrition_fk = "3";
        $NutritionInfo18->amount = "43g";
        $NutritionInfo18->save();


        //Recipe 7
        //carbs
        $NutritionInfo19 = new RecipeNutritions;
        $NutritionInfo19->meal_recipe_fk = "7";
        $NutritionInfo19->nutrition_fk = "1";
        $NutritionInfo19->amount = "68.4g";
        $NutritionInfo19->save();
        //fat
        $NutritionInfo20 = new RecipeNutritions;
        $NutritionInfo20->meal_recipe_fk = "7";
        $NutritionInfo20->nutrition_fk = "2";
        $NutritionInfo20->amount = "9g";
        $NutritionInfo20->save();
        //protein
        $NutritionInfo21 = new RecipeNutritions;
        $NutritionInfo21->meal_recipe_fk = "7";
        $NutritionInfo21->nutrition_fk = "3";
        $NutritionInfo21->amount = "10.7g";
        $NutritionInfo21->save();

        //Recipe 8
        //carbs
        $NutritionInfo22 = new RecipeNutritions;
        $NutritionInfo22->meal_recipe_fk = "8";
        $NutritionInfo22->nutrition_fk = "1";
        $NutritionInfo22->amount = "96g";
        $NutritionInfo22->save();
        //fat
        $NutritionInfo23 = new RecipeNutritions;
        $NutritionInfo23->meal_recipe_fk = "8";
        $NutritionInfo23->nutrition_fk = "2";
        $NutritionInfo23->amount = "27g";
        $NutritionInfo23->save();
        //protein
        $NutritionInfo24 = new RecipeNutritions;
        $NutritionInfo24->meal_recipe_fk = "8";
        $NutritionInfo24->nutrition_fk = "3";
        $NutritionInfo24->amount = "20.8g";
        $NutritionInfo24->save();

        //Recipe 9
        //carbs
        $NutritionInfo25 = new RecipeNutritions;
        $NutritionInfo25->meal_recipe_fk = "9";
        $NutritionInfo25->nutrition_fk = "1";
        $NutritionInfo25->amount = "32g";
        $NutritionInfo25->save();
        //fat
        $NutritionInfo26 = new RecipeNutritions;
        $NutritionInfo26->meal_recipe_fk = "9";
        $NutritionInfo26->nutrition_fk = "2";
        $NutritionInfo26->amount = "13g";
        $NutritionInfo26->save();
        //protein
        $NutritionInfo27 = new RecipeNutritions;
        $NutritionInfo27->meal_recipe_fk = "9";
        $NutritionInfo27->nutrition_fk = "3";
        $NutritionInfo27->amount = "8.9g";
        $NutritionInfo27->save();
    }
}
