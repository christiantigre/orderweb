<?php

use Illuminate\Database\Seeder;

class PaymethodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paymethods')->insert(['id'=>'1','banco'=>'Banco del Pichincha',
        	'cuenta'=>'9898983458',
        	'titular'=>'Fulano Mengano',
        	'num_tarjeta'=>'08348534635',
        	'statu' => '1']);
        
    }
}

