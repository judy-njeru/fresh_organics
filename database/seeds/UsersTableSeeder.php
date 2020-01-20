<?php

use Illuminate\Database\Seeder;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "User",
            'email' => 'user@user.com',
            'password' => bcrypt('password'),
            'avatar' => 'https://i.pinimg.com/originals/fd/0c/55/fd0c559856ca991e9e28937dc802f0b0.png',
            'location_fk' => '1'
        ]);
    }
}
