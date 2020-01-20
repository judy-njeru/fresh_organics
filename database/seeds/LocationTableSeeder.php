<?php

use Illuminate\Database\Seeder;
use App\Location;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Location::create([
            'id' => "1",
            'zip' => "2200",
            'city' => 'Copenhagen',
        ]);
    }
}
