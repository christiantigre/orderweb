<?php

use Illuminate\Database\Seeder;
use App\Marca;

class MarcaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('marcas')->insert(['id'=>'1','marca'=>'Sony','statu' => '1']);
    	DB::table('marcas')->insert(['id'=>'2','marca'=>'SonyVaio','statu' => '1']);
    	DB::table('marcas')->insert(['id'=>'3','marca'=>'Panasonic','statu' => '1']);
    	DB::table('marcas')->insert(['id'=>'4','marca'=>'Elgy','statu' => '1']);
    	DB::table('marcas')->insert(['id'=>'5','marca'=>'Philips','statu' => '1']);
    	DB::table('marcas')->insert(['id'=>'6','marca'=>'Hp','statu' => '1']);
    	DB::table('marcas')->insert(['id'=>'7','marca'=>'Dell','statu' => '1']);
    	DB::table('marcas')->insert(['id'=>'8','marca'=>'Apple','statu' => '1']);
    	DB::table('marcas')->insert(['id'=>'9','marca'=>'Google','statu' => '1']);
    	DB::table('marcas')->insert(['id'=>'10','marca'=>'Coca-Cola','statu' => '1']);
    	DB::table('marcas')->insert(['id'=>'11','marca'=>'Microsoft','statu' => '1']);
    	DB::table('marcas')->insert(['id'=>'12','marca'=>'IBM','statu' => '1']);
    	DB::table('marcas')->insert(['id'=>'13','marca'=>'Toyota','statu' => '1']);
    	DB::table('marcas')->insert(['id'=>'14','marca'=>'Samsung','statu' => '1']);
    	DB::table('marcas')->insert(['id'=>'15','marca'=>'General Electric','statu' => '1']);
    	DB::table('marcas')->insert(['id'=>'16','marca'=>'McDonald´s','statu' => '1']);
    	DB::table('marcas')->insert(['id'=>'17','marca'=>'Amazon','statu' => '1']);

    }
}
