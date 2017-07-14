<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tittle1')->nullable();
            $table->string('tittle2')->nullable();
            $table->string('subtittle')->nullable();
            $table->string('client')->nullable();
            $table->string('date')->nullable();
            $table->string('link')->nullable();
            $table->string('paragraph')->nullable();
            $table->string('img')->nullable();           
            $table->integer('id_categorie')->unsigned();
            $table->foreign('id_categorie')->references('id')->on('categories');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('galleries');
    }
}
