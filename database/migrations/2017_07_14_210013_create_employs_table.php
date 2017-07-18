<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmploysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',30)->nullable();
            $table->string('ci',15)->nullable();
            $table->string('lastname',30)->nullable();
            $table->string('address',100)->nullable();
            $table->string('cel',15)->nullable();
            $table->string('phone',15)->nullable();
            $table->string('email',25)->nullable();
            $table->date('date_nac')->nullable();
            $table->string('perfil')->nullable();
            $table->boolean('status')->default(1);      
            $table->integer('id_country')->unsigned();
            $table->foreign('id_country')->references('id')->on('countries');
            $table->integer('id_province')->unsigned();
            $table->foreign('id_province')->references('id')->on('provinces');
            $table->integer('id_canton')->unsigned();
            $table->foreign('id_canton')->references('id')->on('cantons');
            $table->integer('id_parroquias')->unsigned();
            $table->foreign('id_parroquias')->references('id')->on('parroquias');
            $table->integer('id_departments')->unsigned();
            $table->foreign('id_departments')->references('id')->on('departments');
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
        Schema::dropIfExists('employs');
    }
}
