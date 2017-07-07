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
            'password' => crypt('secret','andrescondo17@gmail.com'),
            'perfil' => 'https://lh3.googleusercontent.com/-7mZcRgQsJZU/AAAAAAAAAAI/AAAAAAAAACo/lskuFvq2iQQ/photo.jpg?sz=50',
            'social' => '1',
            'admin' => '1',
            'active' => '1',
        ]);

        DB::table('users')->insert([
            'name' => 'AndresT',
            'email' => 'andrestigre69@gmail.com',
            'password' => crypt('secret','andrestigre69@gmail.com'),
            'perfil' => '',
            'social' => '1',
            'active' => '1',
        ]);

        DB::table('users')->insert([
            'name' => 'Christian',
            'email' => 'andrescondo17@hotmail.com',
            'password' => crypt('secret','andrescondo17@hotmail.com'),
            'perfil' => '',
            'social' => '1',
            'active' => '1',
        ]);
    }
}
