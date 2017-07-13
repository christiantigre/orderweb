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
        	'tittle'=>'Welcome to pluton theme',
        	'subtittle'=>'Clean & responsive',
        	'paragraph'=>'When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.',
        	'img' => 'pagina/images/Slider01.png',
        	'link' => '#',
        	'tittle_link' => 'READ MORE'
        	]);
    }
}
