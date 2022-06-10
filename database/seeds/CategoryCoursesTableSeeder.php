<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryCoursesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_courses')->delete();
        
        \DB::table('category_courses')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Pengenalan',
                'created_at' => '2022-02-01 06:29:27',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Persuratan',
                'created_at' => '2022-02-01 06:29:32',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Tips dan Trik',
                'created_at' => '2022-02-01 06:29:40',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}