<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymethods', function (Blueprint $table) {
            $table->increments('id');      
            $table->String('method','35')->unique();
            $table->String('banco','255')->nullable();
            $table->String('cuenta','255')->nullable();
            $table->String('titular','255')->nullable();
            $table->String('num_tarjeta','255')->nullable();
            $table->boolean('statu');
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
        Schema::dropIfExists('paymethods');
    }
}
