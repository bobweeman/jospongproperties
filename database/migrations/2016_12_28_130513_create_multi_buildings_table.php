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
            $table->integer('district_id');
            $table->integer('city_id');
            $table->integer('country_id');
            $table->integer('region_id');
            $table->string('purchase_price')->nullable();
            $table->string('property_tax')->nullable();
            $table->string('square_feet')->nullable();
            $table->string('total_floor_area')->nullable();
            $table->string('status');
            $table->string('real_id')->nullable();//foreign key

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
