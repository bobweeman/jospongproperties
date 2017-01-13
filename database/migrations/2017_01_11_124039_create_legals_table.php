<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLegalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legals', function (Blueprint $table) {
            $table->increments('id');

            $table->string('building_id');
            $table->string('plotted');
            $table->text('plot_details')->nullable();
            $table->string('stamp_duty');
            $table->text('stamp_duty_details')->nullable();
            $table->string('registered_deed');
            $table->text('registered_deed_details')->nullable();
            $table->string('registered_title')->nullable();
            $table->text('registered_title_details')->nullable();
            $table->string('litigation_status');
            $table->text('litigation_status_details')->nullable();
            $table->string('contestant_name')->nullable();
            $table->string('head_conveyance')->nullable();
            $table->string('copy_conveyance')->nullable();
            $table->string('signed_indenture')->nullable();
            $table->string('copy_signed_indenture')->nullable();
            $table->string('lodgement_by')->nullable();
            $table->string('lodgement_to')->nullable();
            $table->string('bar_coded_site_plan')->nullable();
            $table->string('land_title')->nullable();
            $table->text('land_status')->nullable();

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
        Schema::dropIfExists('legals');
    }
}
