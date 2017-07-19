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
        $table->string('name_local')->nullable();
        $table->string('dir_local')->nullable();
        $table->string('phone_local')->nullable();
        $table->string('cel_local')->nullable();
        $table->string('email_local')->nullable();
        $table->string('area_local')->nullable();
        $table->string('ruc_local')->nullable();
        $table->string('nom_cli')->nullable();
        $table->string('app_cli')->nullable();
        $table->string('ci',15)->nullable();
        $table->date('date_nac')->nullable();
        $table->foreign('id_user')->references('id')->on('users');    
        $table->string('logo')->nullable();      
        $table->string('tarjeta')->nullable();      
        $table->string('web')->nullable();      
        $table->string('link_web',100)->nullable();      
        $table->string('description',255)->nullable();      
        $table->string('fb',255)->nullable();      
        $table->string('twi',255)->nullable();      
        $table->boolean('status')->default(0);      
        $table->boolean('web_visible')->default(0);      
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
