<?php

use Illuminate\Database\Seeder;
use App\Subcategories;

class SubcategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Subcategories::class, 30)->create();
        
    }
}
