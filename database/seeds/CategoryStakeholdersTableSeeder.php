<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryStakeholdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_stakeholders')->delete();
        
        \DB::table('category_stakeholders')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Kementrian',
                'created_at' => '2022-02-01 06:25:38',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Pemerintahan Daerah',
                'created_at' => '2022-02-01 06:25:45',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Badan Audit',
                'created_at' => '2022-02-01 06:26:06',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}