<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCfsDeliveriesHawbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfs_deliveries_hawbs', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('cfs_delivery_id');

            $table->foreign('cfs_delivery_id')->references('id')->on('cfs_deliveries')->onDelete('cascade');

//            $table->integer('hawb_id')->unsigned();

            $table->string('hawb');
//            $table->string('path');
            $table->integer('weight_no');

            $table->string('weight_type');

            $table->integer('pallet_ct');

            $table->integer('piece_ct');

            $table->string('availability');

            $table->string('co_name');

            $table->string('driver_name');

            $table->string('closed_date');

            $table->string('closed_time');

            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cfs_deliveries_hawbs');
    }
}
