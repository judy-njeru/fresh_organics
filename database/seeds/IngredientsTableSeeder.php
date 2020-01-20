<?php

use Illuminate\Database\Seeder;
use App\Ingredient;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Ingredient1 = new Ingredient;
        $Ingredient1->name = "Drumsticks";
        $Ingredient1->image = 'Drumsticks.png';
        $Ingredient1->save();

        $Ingredient2 = new Ingredient;
        $Ingredient2->name = "Olive Oil";
        $Ingredient2->image = 'olive-oil.png';
        $Ingredient2->save();

        $Ingredient3 = new Ingredient;
        $Ingredient3->name = "Garlic";
        $Ingredient3->image = 'garlic.png';
        $Ingredient3->save();

        $Ingredient4 = new Ingredient;
        $Ingredient4->name = "Mayonnaise";
        $Ingredient4->image = 'mayo.png';
        $Ingredient4->save();

        $Ingredient5 = new Ingredient;
        $Ingredient5->name = "Salt";
        $Ingredient5->image = 'salt.png';
        $Ingredient5->save();

        $Ingredient6 = new Ingredient;
        $Ingredient6->name = "Salmon";
        $Ingredient6->image = 'salmon.png';
        $Ingredient6->save();

        $Ingredient7 = new Ingredient;
        $Ingredient7->name = "Black pepper";
        $Ingredient7->image = 'black-pepper.jpg';
        $Ingredient7->save();

        $Ingredient8 = new Ingredient;
        $Ingredient8->name = "Lemon juice";
        $Ingredient8->image = 'lemon-juice.png';
        $Ingredient8->save();

        $Ingredient9 = new Ingredient;
        $Ingredient9->name = "Fresh Chives";
        $Ingredient9->image = 'chives.jpg';
        $Ingredient9->save();

        $Ingredient10 = new Ingredient;
        $Ingredient10->name = "Whipping cream";
        $Ingredient10->image = 'whipped-cream.png';
        $Ingredient10->save();

        $Ingredient11 = new Ingredient;
        $Ingredient11->name = "Avocado";
        $Ingredient11->image = 'avocado.png';
        $Ingredient11->save();

        $Ingredient12 = new Ingredient;
        $Ingredient12->name = "Lime Juice";
        $Ingredient12->image = 'lime-juice.png';
        $Ingredient12->save();

        $Ingredient13 = new Ingredient;
        $Ingredient13->name = "Paprika";
        $Ingredient13->image = 'paprika.png';
        $Ingredient13->save();

        $Ingredient14 = new Ingredient;
        $Ingredient14->name = "Turkey";
        $Ingredient14->image = 'turkey.png';
        $Ingredient14->save();

        $Ingredient15 = new Ingredient;
        $Ingredient15->name = "Sweet Potato";
        $Ingredient15->image = 'sweet-potato.png';
        $Ingredient15->save();

        $Ingredient16 = new Ingredient;
        $Ingredient16->name = "Eggplant";
        $Ingredient16->image = 'eggplant.png';
        $Ingredient16->save();

        $Ingredient17 = new Ingredient;
        $Ingredient17->name = "Onion";
        $Ingredient17->image = 'onion.png';
        $Ingredient17->save();

        $Ingredient18 = new Ingredient;
        $Ingredient18->name = "Tomatoes";
        $Ingredient18->image = 'tomato.png';
        $Ingredient18->save();

        $Ingredient19 = new Ingredient;
        $Ingredient19->name = "Shrimp";
        $Ingredient19->image = 'Shrimp.png';
        $Ingredient19->save();

        $Ingredient20 = new Ingredient;
        $Ingredient20->name = "Spaghetti Squash";
        $Ingredient20->image = 'squash.png';
        $Ingredient20->save();

        $Ingredient21 = new Ingredient;
        $Ingredient21->name = "Butter";
        $Ingredient21->image = 'butter.png';
        $Ingredient21->save();

        $Ingredient22 = new Ingredient;
        $Ingredient22->name = "White wine";
        $Ingredient22->image = 'white-wine.jpg';
        $Ingredient22->save();

        $Ingredient23 = new Ingredient;
        $Ingredient23->name = "Chicken breasts";
        $Ingredient23->image = 'chicken-breast.png';
        $Ingredient23->save();

        $Ingredient24 = new Ingredient;
        $Ingredient24->name = "Brocolli";
        $Ingredient24->image = 'Brocolli.png';
        $Ingredient24->save();

        $Ingredient25 = new Ingredient;
        $Ingredient25->name = "Lemon";
        $Ingredient25->image = 'lemon.png';
        $Ingredient25->save();

        $Ingredient26 = new Ingredient;
        $Ingredient26->name = "Butternut Squash";
        $Ingredient26->image = 'butternut-squash.png';
        $Ingredient26->save();

        $Ingredient27 = new Ingredient;
        $Ingredient27->name = "Sage";
        $Ingredient27->image = 'sage.png';
        $Ingredient27->save();

        $Ingredient28 = new Ingredient;
        $Ingredient28->name = "Fettucine";
        $Ingredient28->image = 'fettucine.png';
        $Ingredient28->save();

        $Ingredient29 = new Ingredient;
        $Ingredient29->name = "Black Beans";
        $Ingredient29->image = 'black-bean.png';
        $Ingredient29->save();

        $Ingredient30 = new Ingredient;
        $Ingredient30->name = "Brown Rice";
        $Ingredient30->image = 'brown-rice.png';
        $Ingredient30->save();

        $Ingredient31 = new Ingredient;
        $Ingredient31->name = "Spinach";
        $Ingredient31->image = 'spinach.png';
        $Ingredient31->save();

        $Ingredient32 = new Ingredient;
        $Ingredient32->name = "Cilantro";
        $Ingredient32->image = 'cilantro.png';
        $Ingredient32->save();

        $Ingredient33 = new Ingredient;
        $Ingredient33->name = "Peanut Sauce";
        $Ingredient33->image = 'Peanut-sauce.png';
        $Ingredient33->save();

        $Ingredient34 = new Ingredient;
        $Ingredient34->name = "Cabbage";
        $Ingredient34->image = 'cabbage.png';
        $Ingredient34->save();

        $Ingredient35 = new Ingredient;
        $Ingredient35->name = "Brussel sprouts";
        $Ingredient35->image = 'brussels-sprouts.png';
        $Ingredient35->save();

        $Ingredient36 = new Ingredient;
        $Ingredient36->name = "Carrots";
        $Ingredient36->image = 'carrots.png';
        $Ingredient36->save();
    }
}
