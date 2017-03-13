<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountCfsDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_cfs_deliveries', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('account_id');

//            $table->foreign('account_id')->references('id')->on('account')->onDelete('cascade');

            $table->integer('cfs_delivery_id');

//            $table->foreign('cfs_delivery_id')->references('id')->on('cfs_deliveries')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('account_cfs_deliveries');
    }
}
