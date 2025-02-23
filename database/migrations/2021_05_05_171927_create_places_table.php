<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('Email')->nullable();
            $table->string('place_name');
            $table->integer('regoin_id')->nullable();
            $table->integer('stars');
            $table->string('address');
            $table->string('place_type');
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->string('service_manegar_id')->nullable();
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
        Schema::dropIfExists('places');
    }
}
