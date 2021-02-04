<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->string('company_cif')->primary();
            $table->string('name');
            $table->string('address');
            $table->string('town');
            $table->integer('postal_code');
            $table->integer('first_telephone');
            $table->integer('second_telephone');
            $table->integer('fax_number');
            $table->string('email');
            $table->string('sector');
            $table->string('activity');
            $table->string('title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
