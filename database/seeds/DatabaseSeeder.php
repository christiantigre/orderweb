<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(RolesTableSeeder::class);
         $this->call(UserTableSeeder::class);
         $this->call(RoleUserTableSeeder::class);
         $this->call(EmpressTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
         $this->call(SubcategoryTableSeeder::class);
         $this->call(StatuTableSeeder::class);
         $this->call(CountryTableSeeder::class);
         $this->call(MarcaTableSeeder::class);
         $this->call(ColorTableSeeder::class);
         $this->call(SizeTableSeeder::class);
    }
}
