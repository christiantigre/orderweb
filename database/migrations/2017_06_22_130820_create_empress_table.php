<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empress', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->char('ruc',13);
            $table->string('email')->unique();
            $table->string('telefono');
            $table->string('dir');
            $table->string('propietario');
            $table->string('logo');
            $table->string('description');
            $table->string('slogan');
            $table->string('cel1');
            $table->string('cel2');
            $table->string('fax');
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
        Schema::dropIfExists('empress');
    }
}
