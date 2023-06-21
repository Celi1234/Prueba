<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTouristsDestinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourists_destinations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_destination');
            $table->string('ubication');
            $table->string('location_history');
            $table->integer('id_departaments')->unsigned();
            $table->foreign('id_departaments')->references('id')->
            on('departaments')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('tourists_destinations');
    }
}
