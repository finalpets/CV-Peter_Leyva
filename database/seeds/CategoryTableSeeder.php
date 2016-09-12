<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'name' => 'web-design',            
        ]);
        DB::table('categories')->insert([
            'name' => 'app-development',            
        ]);
        DB::table('categories')->insert([
            'name' => 'site-building',            
        ]);
    }
}
