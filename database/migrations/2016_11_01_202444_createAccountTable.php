<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account', function (Blueprint $table) {
            $table->increments('id');

            $table->string('account_no');

            // columns to store answers
            $table->string('name')->nullable();
            $table->string('acct_type')->nullable();
            $table->string('bill_to')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('primary_contact')->nullable();
            $table->string('email')->nullable();

            $table->timestamps();

            $table->unique('account_no');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('account');
    }
}