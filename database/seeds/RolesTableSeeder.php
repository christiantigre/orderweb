<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('roles')->insert(['name' => 'admin','display_name' => 'admin','description' => 'administrador', ]);
    DB::table('roles')->insert(['name' => 'employe','display_name' => 'employe','description' => 'administrador', ]);
    DB::table('roles')->insert(['name' => 'Visitor','display_name' => 'Visitor','description' => 'administrador', ]);

        DB::table('permissions')->insert(['name' => 'Read','display_name' => 'Read',]);
        DB::table('permissions')->insert(['name' => 'Create','display_name' => 'Create',]);
        DB::table('permissions')->insert(['name' => 'Update','display_name' => 'Update',]);
        DB::table('permissions')->insert(['name' => 'Delete','display_name' => 'Delete',]);




        
    }
}
