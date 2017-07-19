<?php

use Illuminate\Database\Seeder;

class comentCliTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('coment_clis')->insert([
    		'id'=>'1',
    		'comment'=>'I´ve worked too hard and too long to let anything stand in the way of my goals. I will not let my teammates down and I will not let myself down',
    		'id_user'=>'3',
    		'accept'=>'1']); 
    		DB::table('coment_clis')->insert([
    		'id'=>'2',
    		'comment'=>'I´ve worked too hard and too long to let anything stand in the way of my goals. I will not let my teammates down and I will not let myself down',
    		'id_user'=>'3',
    		'accept'=>'1']); 
    		DB::table('coment_clis')->insert([
    		'id'=>'3',
    		'comment'=>'I´ve worked too hard and too long to let anything stand in the way of my goals. I will not let my teammates down and I will not let myself down',
    		'id_user'=>'4',
    		'accept'=>'1']);        
    }
}
