<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSingleBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('single_buildings', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('address');
            $table->integer('city_id');
            $table->integer('country_id');
            $table->integer('purchaser_id')->nullable();
            $table->integer('tenant_id')->nullable();
            $table->string('purchase_price')->nullable();
            $table->string('property_tax')->nullable();
            $table->string('square_feet')->nullable();
            $table->string('status');
            $table->string('district_id');
            $table->string('zoning');

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
        Schema::dropIfExists('single_buildings');
    }
}
