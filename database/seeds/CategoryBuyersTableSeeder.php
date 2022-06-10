<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryBuyersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_buyers')->delete();
        
        \DB::table('category_buyers')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Pemerintahan',
                'created_at' => '2022-02-01 06:30:12',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Kementrian',
                'created_at' => '2022-02-01 06:30:16',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Perusahaan',
                'created_at' => '2022-02-01 06:30:21',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}