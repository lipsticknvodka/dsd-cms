<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTruckingDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos_trucking_deliveries', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('trucking_delivery_id')->unsigned();

            $table->foreign('trucking_delivery_id')->references('id')->on('trucking_deliveries')->onDelete('cascade');

            $table->string('name');

            $table->string('path');

            $table->string('thumbnail_path');

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
        Schema::drop('photos_trucking_deliveries');
    }
}
