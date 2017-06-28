<?php

use Illuminate\Database\Seeder;

class StatuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
            'statu' => 'Aprobado',
        ]);
        DB::table('status')->insert([
            'statu' => 'Rechazado',
        ]);
    }
}
