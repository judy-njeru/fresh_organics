<?php

use Illuminate\Database\Seeder;
use App\MealBox;

class MealBoxesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $mealBox = new MealBox;
        $mealBox->name = "Keto";
        $mealBox->description = "Our keto-friendly box offers satisfying dinners designed for low-carb lifestyles. Our meals are also gluten-free. If you are following a ketogenic diet, our dinners will keep you on track and wow you with flavor.";
        $mealBox->price = '645';
        $mealBox->image = 'https://www.laureninbalance.com/wp-content/uploads/2018/07/Curried-Cauliflower-Brown-Rice-Pilaf.jpg';
        $mealBox->save();

        $mealBox1 = new MealBox;
        $mealBox1->name = "Paleo";
        $mealBox1->description = "Our paleo box is centered around meats and veggies grown without chemicals, and range from Mediterranean salmon to Thai-style beef. Because the meals are low in sodium and saturated fats, they can be great for those who struggle with high cholesterol, high blood pressure, or heart problems.";
        $mealBox1->price = '620';
        $mealBox1->image = 'https://www.laureninbalance.com/wp-content/uploads/2018/07/Curried-Cauliflower-Brown-Rice-Pilaf.jpg';
        $mealBox1->save();

        $mealBox2 = new MealBox;
        $mealBox2->name = "Vegan";
        $mealBox2->description = "Our vegan box features tailor made vibrant, creative recipes starring fresh, organic, suitable for the vegan diet";
        $mealBox2->price = '299';
        $mealBox2->image = 'https://www.laureninbalance.com/wp-content/uploads/2018/07/Curried-Cauliflower-Brown-Rice-Pilaf.jpg';
        $mealBox2->save();
    }
}
