<?php

use Illuminate\Database\Seeder;

class DemosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('demostractions')->insert(['id'=>'1',
        	'tittle'=>'Estampado',
        	'paragraph'=>'Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto',
        	'img' => 'uploads/demos/H2LZ3ldQH2 - banner.jpg',
        	'link' => '#',
        	'status' => '1'
        	]);
        DB::table('demostractions')->insert(['id'=>'2',
            'tittle'=>'Paginas Web',
            'paragraph'=>'Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto',
            'img' => 'uploads/demos/HHs1ICESfu - diseño-web.png',
            'link' => '#',
            'status' => '1'
            ]);
        DB::table('demostractions')->insert(['id'=>'3',
            'tittle'=>'Banner',
            'paragraph'=>'Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto',
            'img' => 'uploads/demos/pzIYFTdxNg - gooras.jpg',
            'link' => '#',
            'status' => '1'
            ]);
    }
}
