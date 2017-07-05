<?php

use Illuminate\Database\Seeder;

class MoneyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('money')->insert(['id'=>'1','money'=>'Dolar','abreviatura'=>'DL','img'=>'0','statu' => '1']);
        DB::table('money')->insert(['id'=>'2','money'=>'Pesos','abreviatura'=>'PS','img'=>'0','statu' => '1']);
    }
}
