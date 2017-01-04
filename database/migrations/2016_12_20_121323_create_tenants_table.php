<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->increments('id');

            $table->string('first_name');
            $table->string('last_name');
            $table->integer('building_id')->nullable();
            $table->integer('unit_id')->nullable();
            $table->string('address');
            $table->string('city_id');
            $table->string('country_id');
            $table->string('home_phone');
            $table->string('work_phone');
            $table->string('cell_phone');
            $table->string('email');
            $table->string('status');
            $table->date('dob');


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
        Schema::dropIfExists('tenants');
    }
}
