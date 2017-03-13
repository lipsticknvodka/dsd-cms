<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTruckingDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trucking_deliveries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('account_id');
//            $table->foreign('account_id')->references('id')
//                ->on('accounts')->onDelete('cascade');

            $table->string('ref_no');
            $table->string('trans_type');
            $table->string('mawb');
            $table->string('hawb');
            $table->string('received_date');
            $table->string('received_time');
            $table->string('overs_shorts_damages');

            $table->string('shipper_name');
            $table->string('shipper_address_1');
            $table->string('shipper_address_2');
            $table->string('shipper_city');
            $table->string('shipper_state');
            $table->string('shipper_zip');
            $table->string('shipper_contact');
            $table->string('shipper_phone');

            $table->string('destination_address_1');
            $table->string('destination_address_2');
            $table->string('destination_city');
            $table->string('destination_state');
            $table->string('destination_zip');

            $table->string('location_address_1');
            $table->string('location_address_2');
            $table->string('location_city');
            $table->string('location_state');
            $table->string('location_zip');

            $table->string('driver');
            $table->integer('pallet_exchange_qty');
            $table->integer('pallet_shipper_qty');
            $table->integer('piece_ct');
            $table->integer('weight_no');
            $table->string('weight_type');
            $table->string('cargo_status');
            $table->string('pick_up_date');
            $table->string('at_dsd_date');
            $table->string('out_for_delivery_date');

            $table->string('received_by');
//
            $table->string('trans_closed_date');

            $table->string('trans_closed_time');

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
        Schema::drop('trucking_deliveries');
    }
}
