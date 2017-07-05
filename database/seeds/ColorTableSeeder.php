<?php

use Illuminate\Database\Seeder;

class ColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert(['id'=>'1','color'=>'Rojo','codigo'=>'#fd0a02','statu' => '1']);
        DB::table('colors')->insert(['id'=>'2','color'=>'Azul','codigo'=>'#0202fd','statu' => '1']);
        DB::table('colors')->insert(['id'=>'3','color'=>'Blanco','codigo'=>'#fefefe','statu' => '1']);
        DB::table('colors')->insert(['id'=>'4','color'=>'Negro','codigo'=>'#040404','statu' => '1']);
        DB::table('colors')->insert(['id'=>'5','color'=>'Verde','codigo'=>'#105c0b','statu' => '1']);
    }
}
