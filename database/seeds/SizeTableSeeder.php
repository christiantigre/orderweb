<?php

use Illuminate\Database\Seeder;

class SizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sizes')->insert(['id'=>'1','size'=>'Pequeño','abreviatura'=>'S','medida'=>'0','statu' => '1']);
        DB::table('sizes')->insert(['id'=>'2','size'=>'Extra Pequeño','abreviatura'=>'XS','medida'=>'0','statu' => '1']);
        DB::table('sizes')->insert(['id'=>'3','size'=>'Mediano','abreviatura'=>'M','medida'=>'0','statu' => '1']);
        DB::table('sizes')->insert(['id'=>'4','size'=>'Grande','abreviatura'=>'L','medida'=>'0','statu' => '1']);
        DB::table('sizes')->insert(['id'=>'5','size'=>'Extra Grande','abreviatura'=>'XL','medida'=>'0','statu' => '1']);
    }
}
