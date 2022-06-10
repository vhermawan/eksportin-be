<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('news')->delete();
        
        \DB::table('news')->insert(array (
            0 => 
            array (
                'id' => 2,
                'id_category_news' => '2',
                'author' => 'Admin',
                'date' => '2022-01-19',
                'description' => 'berita testing',
                'duration' => NULL,
                'photo' => NULL,
                'created_at' => '2022-01-23 14:06:42',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'id_category_news' => '2',
                'author' => 'AAAa',
                'date' => '2022-02-16',
                'description' => 'sasasa',
                'duration' => NULL,
                'photo' => 'uploads/1/2022-01/group_6.png',
                'created_at' => '2022-01-31 18:44:33',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}