<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryUmkmsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_umkms')->delete();
        
        \DB::table('category_umkms')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Mebel',
                'created_at' => '2022-01-23 05:34:23',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Kerajinan',
                'created_at' => '2022-02-01 06:29:51',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Tesktil',
                'created_at' => '2022-02-01 06:29:55',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Perhiasan',
                'created_at' => '2022-02-01 06:30:01',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Kerajinan Tangan',
                'created_at' => '2022-02-01 06:30:06',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}