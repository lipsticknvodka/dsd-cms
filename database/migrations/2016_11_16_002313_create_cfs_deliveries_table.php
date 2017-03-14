<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCfsDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfs_deliveries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('account_id');
            $table->string('mawb');
//            $table->integer('hawb_id')->unique();
            $table->string('arrival_date');
            $table->string('pick_up_date');
            $table->string('pick_up_time');
            $table->string('est_avail_date');
            $table->string('est_avail_time');
            $table->integer('pallet_ct');
//            $table->integer('piece_ct');

            $table->integer('master_weight');
            $table->string('master_weight_type');
//            $table->string('master_weight_type');


            $table->string('us_customs_code');
            $table->string('last_free_day');
            $table->string('general_order');
            $table->string('availability');

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
        Schema::drop('cfs_deliveries');
    }
}
