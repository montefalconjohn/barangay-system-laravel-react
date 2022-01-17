<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Barangays extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangay', function (Blueprint $table) {
            $table->id();
            $table->string('name', 120);
            $table->string('municipality', 120);
            $table->string('province', 120);
            $table->string('email', 120);
            $table->string('phone_number');
            $table->timestamps();
        });

        // Schema::table('barangay_officials', function (Blueprint $table) {
        //     $table->foreign('barangay_official_id')->references('id')->on('barangay_officials');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangay');
    }
}
