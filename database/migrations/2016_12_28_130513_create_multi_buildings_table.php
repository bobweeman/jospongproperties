<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMultiBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multi_buildings', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('address');
            $table->string('district_id');
            $table->string('city_id');
            $table->string('country_id');
            $table->string('purchase_price');
            $table->string('property_tax');
            $table->string('square_feet');
            $table->string('status');


            $table->softDeletes(); //

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
        Schema::dropIfExists('multi_buildings');
    }
}
