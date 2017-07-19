<?php

use Illuminate\Database\Seeder;
use App\tittles;

class TittleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tittles')->insert(['id'=>'1',
            'tittle'=>'Demostraciónes de nuestros servicios',
            'paragraph'=>'Te ofrecemos una vista previa de nuestros diseños..'
            ]);

        DB::table('tittles')->insert(['id'=>'2',
            'tittle'=>'Carrete de diseños',
            'paragraph'=>'Nuestros diseños son utilizados en los mejores locales de nuestra ciudad.'
            ]);
        DB::table('tittles')->insert(['id'=>'3',
            'tittle'=>'Nuestro equipo',
            'paragraph'=>'El equipo que se encuentra trabajando para darte un mejor servicio.'
            ]);
        DB::table('tittles')->insert(['id'=>'4',
            'tittle'=>'Que prefieren nuestro clientes?',
            'paragraph'=>'Te mostramos una breve descripción de lo que frecuentan nuestros clientes con nuestros empresa.'
            ]);
        DB::table('tittles')->insert(['id'=>'5',
            'tittle'=>'Contacto',
            'paragraph'=>'Para dudas o sugerencias nos puedes encontrar llamandonos a los numeros que se muestran a continuacion.'
            ]);
        DB::table('tittles')->insert(['id'=>'6',
            'tittle'=>'Contacto',
            'paragraph'=>'Para dudas o sugerencias nos puedes encontrar llamandonos a los numeros que se muestran a continuacion.'
            ]);
        DB::table('tittles')->insert(['id'=>'7',
            'tittle'=>'Contacto',
            'paragraph'=>'Para dudas o sugerencias nos puedes encontrar llamandonos a los numeros que se muestran a continuacion.'
            ]);
        DB::table('tittles')->insert(['id'=>'8',
            'tittle'=>'Contacto',
            'paragraph'=>'Para dudas o sugerencias nos puedes encontrar llamandonos a los numeros que se muestran a continuacion.'
            ]);
        DB::table('tittles')->insert(['id'=>'9',
            'tittle'=>'',
            'paragraph'=>'Perfection is Achieved Not When There Is Nothing More to Add, But When There Is Nothing Left to Take Away'
            ]);
            
           
        }
    }
