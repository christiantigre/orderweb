<?php

use Illuminate\Database\Seeder;
use App\Category;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Category::class, 10)->create();
        Category::create( [
            'id'=>1,
            'name'=>'Neque non.',
            'des'=>'Accusamus eos sequi praesentium quod illum eum dolorem eius.',
            'thumb'=>0,
            'created_at'=>'2017-07-14 23:07:49',
            'updated_at'=>'2017-07-14 23:18:55'
            ] );

        

        Category::create( [
            'id'=>2,
            'name'=>'Veritatis.',
            'des'=>'Voluptate facere corrupti eos quas repellat error ducimus molestiae ut soluta sit maiores.',
            'thumb'=>0,
            'created_at'=>'2017-07-14 23:07:49',
            'updated_at'=>'2017-07-14 23:18:47'
            ] );

        

        Category::create( [
            'id'=>3,
            'name'=>'Labore.',
            'des'=>'Ea magni sunt est ea sint perferendis voluptas recusandae.',
            'thumb'=>0,
            'created_at'=>'2017-07-14 23:07:49',
            'updated_at'=>'2017-07-14 23:18:38'
            ] );

        

        Category::create( [
            'id'=>4,
            'name'=>'Repellat esse.',
            'des'=>'Deserunt in corrupti soluta rerum perspiciatis est soluta at alias maxime et.',
            'thumb'=>0,
            'created_at'=>'2017-07-14 23:07:49',
            'updated_at'=>'2017-07-14 23:18:31'
            ] );

        

        Category::create( [
            'id'=>5,
            'name'=>'Eligendi.',
            'des'=>'Est et dolorem labore labore tempore facere soluta corporis.',
            'thumb'=>0,
            'created_at'=>'2017-07-14 23:07:49',
            'updated_at'=>'2017-07-14 23:18:21'
            ] );

        

        Category::create( [
            'id'=>6,
            'name'=>'BANNERS',
            'des'=>'Expedita nihil consectetur nam vel facere reiciendis aut iure sit et omnis.',
            'thumb'=>1,
            'created_at'=>'2017-07-14 23:07:49',
            'updated_at'=>'2017-07-14 23:18:10'
            ] );

        

        Category::create( [
            'id'=>7,
            'name'=>'PUBLICIDAD',
            'des'=>'Blanditiis autem repudiandae commodi vel delectus doloribus.',
            'thumb'=>1,
            'created_at'=>'2017-07-14 23:07:49',
            'updated_at'=>'2017-07-14 23:17:56'
            ] );

        

        Category::create( [
            'id'=>8,
            'name'=>'IDENTIDAD',
            'des'=>'Aperiam sit ab consequatur dicta harum autem totam neque odit ducimus deleniti aut quo.',
            'thumb'=>1,
            'created_at'=>'2017-07-14 23:07:49',
            'updated_at'=>'2017-07-14 23:17:43'
            ] );

        

        Category::create( [
            'id'=>9,
            'name'=>'FOTOGRAFIA',
            'des'=>'Sit odit sunt aut aliquid est ducimus exercitationem.',
            'thumb'=>1,
            'created_at'=>'2017-07-14 23:07:49',
            'updated_at'=>'2017-07-14 23:17:32'
            ] );

        

        Category::create( [
            'id'=>10,
            'name'=>'WEB',
            'des'=>'Omnis expedita impedit quis et id ab vel eligendi rerum placeat aut qui eos.',
            'thumb'=>1,
            'created_at'=>'2017-07-14 23:07:49',
            'updated_at'=>'2017-07-14 23:17:17'
            ] );
    }
}
