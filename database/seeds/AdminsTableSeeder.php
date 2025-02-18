<?php

use Illuminate\Database\Seeder;
use App\Admin;


class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => "Admin",
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'job_title' => 'Manager'
        ]);
    }
}
