<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'ChristianT',
            'email' => 'andrescondo17@gmail.com',
            'password' => '$2y$10$5IhwaiUwEGrJOiwEw91uzewns1ov5YV9ciifwl/epaMt8clA0bN1W',
            'perfil' => 'https://lh3.googleusercontent.com/-7mZcRgQsJZU/AAAAAAAAAAI/AAAAAAAAACo/lskuFvq2iQQ/photo.jpg?sz=50',
            'social' => '1',
            'active' => '1',
        ]);

        DB::table('users')->insert([
            'name' => 'AndresT',
            'email' => 'andrestigre69@gmail.com',
            'password' => '$2y$10$5yFtkI7RFIGAqQBGYtYeh.xwkbqROl61qcDWq1/YSE9y5gxyjIbQ.',
            'perfil' => '',
            'social' => '1',
            'active' => '1',
        ]);

        DB::table('users')->insert([
            'name' => 'Christian',
            'email' => 'andrescondo17@hotmail.com',
            'password' => '$2y$10$/tg2QrLFhy/sw94Dh5SRU.bbKZiyaUK6iVlSt8RHlMHXi4Wmj5TBe',
            'perfil' => '',
            'social' => '1',
            'active' => '1',
        ]);
    }
}
