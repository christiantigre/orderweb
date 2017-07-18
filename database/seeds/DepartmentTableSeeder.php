<?php

use Illuminate\Database\Seeder;
use App\Department;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


    	
    	Department::create( [
    		'id'=>1,
    		'department'=>'Administración',
    		'status'=>1
    		] );
    	Department::create( [
    		'id'=>2,
    		'department'=>'Caja',
    		'status'=>1
    		] );
    	Department::create( [
    		'id'=>3,
    		'department'=>'Bodega',
    		'status'=>1
    		] );
    	Department::create( [
    		'id'=>4,
    		'department'=>'Despacho',
    		'status'=>1
    		] );




    }
}
