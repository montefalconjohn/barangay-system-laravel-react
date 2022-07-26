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
            $table->string('first_name', 120);
            $table->string('last_name', 120);
            $table->integer('age');
            $table->string('gender', 20);
            $table->string('birthplace', 50);
            $table->dateTime('birthdate');
            $table->string('phone_number', 11);
            $table->string('email', 120);
            $table->integer('purok');
            $table->dateTime('start_term');
            $table->dateTime('end_term');
            $table->timestamps();
            
            // Relationships
            $table->unsignedBigInteger('barangay_id');
            $table->unsignedBigInteger('position_id');
            $table->unsignedBigInteger('civil_status_id');
            $table->unsignedBigInteger('employment_status_id');

            // linking the relationship ManyToOne
            $table->foreign('barangay_id')
                  ->references('id')
                  ->on('barangays')
                  ->onDelete('cascade');  
            
            // // Many to one
            $table->foreign('position_id')
                ->references('id')
                ->on('positions')
                ->onDelete('cascade');   
                
            // // Many to one
            $table->foreign('civil_status_id')
                ->references('id')
                ->on('civil_statuses')
                ->onDelete('cascade');   

            // // One to one    
            $table->foreign('employment_status_id')
                ->references('id')
                ->on('employment_statuses')
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
