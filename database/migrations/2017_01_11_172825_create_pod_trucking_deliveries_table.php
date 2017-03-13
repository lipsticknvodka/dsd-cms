<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePodTruckingDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pod_trucking_deliveries', function (Blueprint $table) {
            $table->integer('trucking_delivery_id')->unsigned();

//            $table->foreign('trucking_delivery_id')->references('id')->on('trucking_deliveries')->onDelete('cascade');

            $table->string('path');

            $table->string('name');

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
        Schema::drop('pod_trucking_deliveries');
    }
}
