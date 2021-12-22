<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangayOfficialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangay_officials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('barangay_id');
            $table->string('first_name', 120);
            $table->string('last_name', 120);
            $table->string('status', 120);
            $table->integer('age');
            $table->string('civil_status', 120);
            $table->string('gender', 20);
            $table->string('birthplace', 50);
            $table->dateTime('birthdate');
            $table->string('phone_number', 11);
            $table->string('email', 120);
            $table->integer('purok');
            $table->integer('term');
            $table->timestamps();

            // linking the relationship ManyToOne
            $table->foreign('barangay_id')
                  ->references('id')
                  ->on('barangay')
                  ->onDelete('cascade');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangay_officials');
    }
}
