<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('clients', function (Blueprint $table) {
        $table->increments('id'); 
        $table->integer('id_user')->unsigned();
        $table->foreign('id_user')->references('id')->on('users');    
        $table->string('logo')->nullable();      
        $table->string('web')->nullable();      
        $table->string('link_web',100)->nullable();      
        $table->string('description',255)->nullable();      
        $table->boolean('status')->default(0);      
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
        Schema::dropIfExists('clients');
    }
}
