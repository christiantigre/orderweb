<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentClisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coment_clis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('comment',255)->nullable(); 
            $table->boolean('accept')->default(0);      

            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');          
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
        Schema::dropIfExists('coment_clis');
    }
}
