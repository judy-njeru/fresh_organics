<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('job_title');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        // DB::statement('ALTER TABLE `admins` MODIFY `password` VARBINARY(255)');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('ALTER TABLE `admins` MODIFY `password` VARBINARY(255)');

        Schema::dropIfExists('admins');
    }
}
