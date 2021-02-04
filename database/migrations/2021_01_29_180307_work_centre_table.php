<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WorkCentreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_centre', function(Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('town');
            $table->integer('postal_code');
            $table->string('activity');
            $table->integer('workers_quantity');
            $table->string('email');
            $table->integer('first_telephone');
            $table->integer('second_telephone');
            $table->string('working_type');
            $table->integer('working_hours');
            $table->string('coordinator_name');
            $table->string('coordinator_nif');
            $table->string('tutor_name');
            $table->string('tutor_nif');
            $table->string('working_place');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work_centre');
    }
}
