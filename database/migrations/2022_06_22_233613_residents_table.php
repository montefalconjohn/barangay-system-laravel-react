<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ResidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residents', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 120);
            $table->string('last_name', 120);
            $table->boolean('gender');
            $table->integer('purok');
            $table->string('address', 500);
            $table->string('birthplace', 50);
            $table->dateTime('birthdate');
            $table->integer('age');
            $table->string('phone_number', 11);
            $table->string('occupation', 50);
            $table->string('email', 120);
            $table->timestamps();

            // Many to One relation relationship
            $table->unsignedBigInteger('civil_status_id');
            $table->unsignedBigInteger('citizenship_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('residents');
    }
}
