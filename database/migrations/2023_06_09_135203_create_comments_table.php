<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('comment_type');
            $table->datetime('comment_date');
            $table->integer('id_foods')->unsigned();
            $table->foreign('id_foods')->references('id')->
            on('comidas')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_departaments')->unsigned();
            $table->foreign('id_departaments')->references('id')->
            on('departaments')->onDelete('cascade')->onUpdate('cascade'); 
            $table->integer('id_tourists_destinations')->unsigned();
            $table->foreign('id_tourists_destinations')->references('id')->
            on('tourists_destinations')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('comments');
    }
}
