<?php

use Illuminate\Database\Seeder;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert(['id'=>'1',
            'tittle'=>'BANNERS',
            'subtittle'=>'Clean & responsive',
            'paragraph'=>'When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.',
            'img' => 'uploads/slider/1LBtqAx76Z - banner.jpg',
            'link' => '#',
            'tittle_link' => 'READ MORE',
            'status' => '1'
            ]);

        DB::table('sliders')->insert(['id'=>'2',
            'tittle'=>'TARJETAS',
            'subtittle'=>'Clean & responsive',
            'paragraph'=>'When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.',
            'img' => 'uploads/slider/9cYe28lJ1W - tarjetas.jpg',
            'link' => '#',
            'tittle_link' => 'READ MORE',
            'status' => '1'
            ]);

        DB::table('sliders')->insert(['id'=>'3',
            'tittle'=>'CORPORATIVO',
            'subtittle'=>'Clean & responsive',
            'paragraph'=>'When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.',
            'img' => 'uploads/slider/lvrIRE59yF - corporativo.jpg',
            'link' => '#',
            'tittle_link' => 'READ MORE',
            'status' => '1'
            ]);
        DB::table('sliders')->insert(['id'=>'4',
            'tittle'=>'PAGINAS WEB',
            'subtittle'=>'Clean & responsive',
            'paragraph'=>'When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.',
            'img' => 'uploads/slider/1wUTLB0TJe - diseño-web.png',
            'link' => '#',
            'tittle_link' => 'READ MORE',
            'status' => '1'
            ]);
        DB::table('sliders')->insert(['id'=>'5',
            'tittle'=>'PUBLICIDAD',
            'subtittle'=>'Clean & responsive',
            'paragraph'=>'When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.',
            'img' => 'uploads/slider/8ioMer3xdY - publicidad.jpg',
            'link' => '#',
            'tittle_link' => 'READ MORE',
            'status' => '1'
            ]);
        DB::table('sliders')->insert(['id'=>'6',
            'tittle'=>'ESTAMPADOS',
            'subtittle'=>'Clean & responsive',
            'paragraph'=>'When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.',
            'img' => 'uploads/slider/uuEZMhzb5l - gooras.jpg',
            'link' => '#',
            'tittle_link' => 'READ MORE',
            'status' => '1'
            ]);
    }
}
