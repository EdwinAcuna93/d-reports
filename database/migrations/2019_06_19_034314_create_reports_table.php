<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('address');
            $table->string('reference_point')->nullable();
            $table->string('description');
            $table->string('link_img')->nullable();
            $table->string('observation');
            $table->string('code',6);
            //Se agregan los campos de las llaves foraneas
            $table->integer('category_id')->unsigned();
            $table->integer('state_id')->unsigned();
            //Se agregan las relaciones a las tablas de las llaves foraneas
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('state_id')->references('id')->on('states');
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
        Schema::dropIfExists('reports');
    }
}
