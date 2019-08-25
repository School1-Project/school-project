<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'name' => 'A',
            'routes' => '',
        ]);

        DB::table('menus')->insert([
            'name' => 'B',
            'routes' => '',
        ]);

        DB::table('menus')->insert([
            'name' => 'A1',
            'routes' => '',
            'parent_id' => '1',
        ]);

        DB::table('menus')->insert([
            'name' => 'A2',
            'routes' => '',
            'parent_id' => '1',
        ]);

        DB::table('menus')->insert([
            'name' => 'A3',
            'routes' => '',
            'parent_id' => '1',
        ]);

        DB::table('menus')->insert([
            'name' => 'A11',
            'routes' => '',
            'parent_id' => '3',
        ]);

        DB::table('menus')->insert([
            'name' => 'A12',
            'routes' => '',
            'parent_id' => '3',
        ]);

        DB::table('menus')->insert([
            'name' => 'A111',
            'routes' => '',
            'parent_id' => '6',
        ]);

        DB::table('menus')->insert([
            'name' => 'A112',
            'routes' => '',
            'parent_id' => '6',
        ]);

        DB::table('menus')->insert([
            'name' => 'B1',
            'routes' => '',
            'parent_id' => '2',
        ]);
    }
}
