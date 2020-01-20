<?php

use Illuminate\Database\Seeder;
use App\MealRecipe;

class MealRecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $mealRecipe1 = new MealRecipe;
        $mealRecipe1->name = "Buffalo drumsticks";
        $mealRecipe1->accompaniment = "with chili aioli";
        $mealRecipe1->description = "These Baked Buffalo Drumsticks couldn’t be easier! With just minimal ingredients and super easy kitchen work, you can have these out in no time.";
        $mealRecipe1->image = '1579095765keto-buffalo-chicken.jpg';
        $mealRecipe1->meal_boxes_fk = '1';
        $mealRecipe1->time = '40 min';
        $mealRecipe1->save();

        $mealRecipe2 = new MealRecipe;
        $mealRecipe2->name = "Seared salmon";
        $mealRecipe2->accompaniment = "with creamy lemon sauce";
        $mealRecipe2->description = "Perfectly seared salmon is cooked until tender and then paired with a delicious creamy sauce, flavoured with fresh herbs and a hint of lemon. Pair it with sautéed spinach, and you've got yourself an irresistible keto meal!";
        $mealRecipe2->image = '1579094087seared_salmon_creamy_lemon_sauce_h.jpg';
        $mealRecipe2->meal_boxes_fk = '1';
        $mealRecipe2->time = '30 min';
        $mealRecipe2->save();

        $mealRecipe3 = new MealRecipe;
        $mealRecipe3->name = "Grilled salmon";
        $mealRecipe3->accompaniment = "with avocado topping";
        $mealRecipe3->description = "A super simple and fresh keto meal for your family gatherings. Grilled salmon with a juicy avocado topping. A great way to impress your friends and family without actually doing a lot of work.";
        $mealRecipe3->image = '1579094313BlackenedSalmonwithAvocadoSalsa8003151.jpg';
        $mealRecipe3->meal_boxes_fk = '1';
        $mealRecipe3->time = '30 min';
        $mealRecipe3->save();

        $mealRecipe4 = new MealRecipe;
        $mealRecipe4->name = "Turkey Sweet Potato Casserole";
        $mealRecipe4->accompaniment = "With eggplant & tomato";
        $mealRecipe4->description = "Dreamy turkey sweet potato casserole layered with eggplant, tomato, bright herbs and a nutty sauce. A protein packed dinner that’s super easy to make! ";
        $mealRecipe4->image = '157909446720191114153347.jpg';
        $mealRecipe4->meal_boxes_fk = '2';
        $mealRecipe4->time = '75 min';
        $mealRecipe4->save();

        $mealRecipe5 = new MealRecipe;
        $mealRecipe5->name = "Spaghetti Squash Shrimp Scampi";
        $mealRecipe5->accompaniment = "Topped with parsley";
        $mealRecipe5->description = "This delicious shrimp scampi spaghetti squash is low carb and the perfect weeknight meal. Don’t let the 60 minutes recipe time fool you. Most of that is hands off since you have to wait for the spaghetti squash to come out of the oven. Once you’re ready to cook the shrimp, you’re done in minutes!";
        $mealRecipe5->image = '1579094586retina_hungry-girl-healthy-spaghetti-squash-shrimp-scampi.jpg';
        $mealRecipe5->meal_boxes_fk = '2';
        $mealRecipe5->time = '60 min';
        $mealRecipe5->save();

        $mealRecipe6 = new MealRecipe;
        $mealRecipe6->name = "Skillet Lemon Chicken";
        $mealRecipe6->accompaniment = "with broccoli and a delightful garlic lemon pan sauce";
        $mealRecipe6->description = "This Lemon Chicken Skillet recipe is perfect for an easy weeknight meal that’s full of flavor. Golden brown chicken breasts simmer away in a delicious lemon garlic pan sauce while you’re house is filled with that delightfully fresh lemon aroma.";
        $mealRecipe6->image = '1579094790Skillet-Lemon-Chicken-1.jpg';
        $mealRecipe6->meal_boxes_fk = '2';
        $mealRecipe6->time = '40 min';
        $mealRecipe6->save();

        $mealRecipe7 = new MealRecipe;
        $mealRecipe7->name = "Creamy (vegan!) Butternut Squash Linguine";
        $mealRecipe7->accompaniment = "with Fried Sage";
        $mealRecipe7->description = "Spiced and creamy (yet cream-less) butternut squash sauce tossed with whole grain linguine. Top with fried sage for a healthy, comforting main dish. Serve with salad or roasted vegetables to further lighten up the meal.";
        $mealRecipe7->image = '1579094992creamy-vegan-butternut-squash-linguine-recipe.jpg';
        $mealRecipe7->meal_boxes_fk = '3';
        $mealRecipe7->time = '55 min';
        $mealRecipe7->save();

        $mealRecipe8 = new MealRecipe;
        $mealRecipe8->name = "Spicy Sweet Potato ";
        $mealRecipe8->accompaniment = "and Green Rice Burrito Bowls";
        $mealRecipe8->description = "Healthy burrito bowls made with roasted sweet potato, green rice and black beans! This delicious, vegan dinner reheats well for lunch. ";
        $mealRecipe8->image = '1579095036sweet-potato-green-rice-burrito-bowls-recipe-1.jpg';
        $mealRecipe8->meal_boxes_fk = '3';
        $mealRecipe8->time = '65 min';
        $mealRecipe8->save();

        $mealRecipe9 = new MealRecipe;
        $mealRecipe9->name = "Peanut sesame slaw";
        $mealRecipe9->accompaniment = "With fetuccine noodles";
        $mealRecipe9->description = "Healthy Asian slaw made with cabbage, carrots and soba noodles, tossed in a bold peanut-sesame sauce.";
        $mealRecipe9->image = '1579095401peanut-soba-noodles-slaw.png';
        $mealRecipe9->meal_boxes_fk = '3';
        $mealRecipe9->time = '25 min';
        $mealRecipe9->save();
    }
}
