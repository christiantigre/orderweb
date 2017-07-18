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
'web'=>1,
'id_country'=>66,
'id_province'=>1,
'id_canton'=>3,
'id_parroquias'=>41,
'id_departments'=>1,
'created_at'=>NULL,
'updated_at'=>NULL
] );

            

Employ::create( [
'id'=>3,
'name'=>'Christian',
'ci'=>'0105118509',
'lastname'=>'Tigre',
'address'=>'3 de noviembre y cesar cueva',
'cel'=>'0992502599',
'phone'=>'2203584',
'email'=>'andrescondo17@gmail.com',
'date_nac'=>'1991-12-17',
'perfil'=>'uploads/avatars/CPSBLVqPE6 - user1.jpg',
'status'=>1,
'web'=>1,
'id_country'=>66,
'id_province'=>1,
'id_canton'=>3,
'id_parroquias'=>41,
'id_departments'=>2,
'created_at'=>'2017-07-19 00:24:43',
'updated_at'=>'2017-07-19 00:24:43'
] );

            

Employ::create( [
'id'=>4,
'name'=>'Mina',
'ci'=>'0909889888',
'lastname'=>'Pacari',
'address'=>'Quito y Cuenca',
'cel'=>'0909998987',
'phone'=>'767676',
'email'=>'minapacary@gmail.com',
'date_nac'=>'1980-01-01',
'perfil'=>'uploads/avatars/GaC15uVJXN - user2.jpg',
'status'=>1,
'web'=>1,
'id_country'=>66,
'id_province'=>17,
'id_canton'=>178,
'id_parroquias'=>1,
'id_departments'=>1,
'created_at'=>'2017-07-19 00:27:04',
'updated_at'=>'2017-07-19 00:27:04'
] );

    	


    }
}
