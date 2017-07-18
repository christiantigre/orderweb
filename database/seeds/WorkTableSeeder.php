<?php

use Illuminate\Database\Seeder;

class WorkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('works')->insert(['id'=>'1',
            'work'=>'Graphic Design',
            'porcentaje'=>'80'
            ]);
        DB::table('works')->insert(['id'=>'2',
            'work'=>'Html & Css',
            'porcentaje'=>'95'
            ]);
        DB::table('works')->insert(['id'=>'3',
            'work'=>'jQuery',
            'porcentaje'=>'68'
            ]);
        DB::table('works')->insert(['id'=>'4',
            'work'=>'Wordpress',
            'porcentaje'=>'70'
            ]);
    }
}
