<?php

use Illuminate\Database\Seeder;

class EmpressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('empress')->insert([
    		'name' => 'PrintGrafic',
    		'ruc' => '1234567890123',
    		'email' => 'print@gmail.com',
    		'telefono' => '2323432',
    		'dir' => 'La rabida y la niña',
    		'logo' => 'ruta imagen',
            'description' => 'Empresa dedicada al desarrollo publicitario empresarial',
            'slogan' => 'Tu Imprenta Web',
            'cel1' => '0989878792',
            'cel2' => '0909878762',
    		'fax' => '9894328545',
    		]);
    }
}
