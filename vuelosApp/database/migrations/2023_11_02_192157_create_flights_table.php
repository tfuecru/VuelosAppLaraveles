<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight', function (Blueprint $table) {
            $table->id();
            $table->string('cityOrigin', 70);
            $table->string('cityDestination', 70);
            $table->string('company', 80);
            $table->string('date', 10);
            $table->string('depureTime', 8);
            $table->string('arrivalTime', 8);
            $table->integer('ability');
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
        Schema::dropIfExists('flight');
    }
};
