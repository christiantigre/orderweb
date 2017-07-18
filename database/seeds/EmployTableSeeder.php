<?php

use Illuminate\Database\Seeder;
use App\Employ;

class EmployTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	

    	Employ::create( [
    		'id'=>1,
    		'name'=>'Andres',
    		'ci'=>'0909889876',
    		'lastname'=>'mengano',
    		'address'=>'3 de Noviembre y Cesar Cueva',
    		'cel'=>'0909878788',
    		'phone'=>'09822542',
    		'email'=>'funalito@gmail.com',
    		'date_nac'=>'1991-12-17',
    		'perfil'=>'uploads/gallery/71trTzEamm - web4.png',
    		'status'=>1,
    		'id_country'=>66,
    		'id_province'=>1,
    		'id_canton'=>3,
            'id_parroquias'=>41,
    		'id_departments'=>1,
    		'created_at'=>NULL,
    		'updated_at'=>NULL
    		] );

    	


    }
}
