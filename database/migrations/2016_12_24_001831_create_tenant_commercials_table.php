<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenantCommercialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenant_commercials', function (Blueprint $table) {
            $table->increments('id');

            $table->string('contact_name');
            $table->string('company_name');
            $table->integer('building_id')->nullable();
            $table->integer('unit_id')->nullable();
            $table->string('address');
            $table->integer('city_id');
            $table->integer('country_id');
            $table->string('phone_number');
            $table->string('fax_number');
            $table->string('company_number');
            $table->string('email');
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
        Schema::dropIfExists('tenant_commercials');
    }
}
