<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhysicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physicals', function (Blueprint $table) {
            $table->increments('id');

            $table->string('fenced');
            $table->string('fence_type')->default('No Data');
            $table->string('gated');
            $table->string('gate_type')->default('No Data');
            $table->string('occupier')->default('No Data');
            $table->text('vulnerability')->nullable();
            $table->string('encroached');
            $table->string('encroach_details')->default('No Data');
            $table->string('building_id');
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
        Schema::dropIfExists('physicals');
    }
}
