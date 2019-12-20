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
        MealBox::create([
            'name' => "Keto",
            'description' => "Our keto-friendly box offers satisfying dinners designed for low-carb lifestyles. Our meals are also gluten-free. If you are following a ketogenic diet, our dinners will keep you on track and wow you with flavor.",
            'price' => '645',
            'image' => 'keto-box.brown-fish-fillet-on-white-ceramic-plate-46239.jpg'
        ]);

        MealBox::create([
            'name' => "Paleo",
            'description' => 'Our paleo box is centered around meats and veggies grown without chemicals, and range from Mediterranean salmon to Thai-style beef. Because the meals are low in sodium and saturated fats, they can be great for those who struggle with high cholesterol, high blood pressure, or heart problems.',
            'price' => '620',
            'image' => 'paleo-box.appetizer-avocado-bread-breakfast-566566.jpg'
        ]);

        MealBox::create([
            'name' => "Vegan",
            'description' =>'Our vegan box features tailor made vibrant, creative recipes starring fresh, organic, suitable for the vegan diet',
            'price' =>'299',
            'image' =>'vegan.close-up-of-salad-in-plate-257816.jpg'
        ]);
    }
}
