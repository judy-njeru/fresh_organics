<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billing', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_fk')->unsigned();
            $table->bigInteger('payment_fk')->unsigned();
            $table->string('billing_name');
            $table->string('billing_email');
            $table->string('billing_address');
            $table->string('billing_city');
            $table->string('billing_province');
            $table->string('billing_postalcode');
            $table->integer('billing_phone');
            $table->integer('billing_total');
            $table->timestamps();
        });

        Schema::table('billing', function (Blueprint $table) {
            $table->foreign('user_fk')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('payment_fk')->references('id')->on('payment')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('billing');
        Schema::enableForeignKeyConstraints();
    }
}
