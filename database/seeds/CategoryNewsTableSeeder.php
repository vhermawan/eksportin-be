<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryNewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_news')->delete();
        
        \DB::table('category_news')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Terkini',
                'created_at' => '2022-01-23 14:06:27',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Trivia',
                'created_at' => '2022-02-01 06:26:16',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Komoditas',
                'created_at' => '2022-02-01 06:27:41',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}