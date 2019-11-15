<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        // $this->call(MealBoxesTableSeeder::class);
        // $this->call(MealRecipesTableSeeder::class);
        // $this->call(IngredientsTableSeeder::class);
        // $this->call(IngredientsInfoTableSeeder::class);
        // $this->call(NutritionTableSeeder::class);
        // $this->call(NutritionInfoTableSeeder::class);
    }
}
