<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UmkmsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('umkms')->delete();
        
        \DB::table('umkms')->insert(array (
            0 => 
            array (
                'id' => 2,
                'id_cms_users' => 2,
                'name' => 'vicky',
                'address' => 'tes',
                'phone' => '121212',
                'photo_url' => NULL,
                'description' => 'tes',
                'id_category_umkms' => 1,
                'slug' => 'vicky',
                'bussiness_entity' => '1',
                'created_at' => '2022-01-23 06:33:19',
                'updated_at' => '2022-01-23 06:33:19',
            ),
            1 => 
            array (
                'id' => 3,
                'id_cms_users' => 3,
                'name' => 'vicky h',
                'address' => 'tes',
                'phone' => '121212',
                'photo_url' => NULL,
                'description' => 'tes',
                'id_category_umkms' => 1,
                'slug' => 'vicky-h',
                'bussiness_entity' => '1',
                'created_at' => '2022-01-23 06:56:26',
                'updated_at' => '2022-01-23 06:56:26',
            ),
            2 => 
            array (
                'id' => 4,
                'id_cms_users' => 4,
                'name' => 'vicky h',
                'address' => 'tes',
                'phone' => '121212',
                'photo_url' => NULL,
                'description' => 'tes',
                'id_category_umkms' => 1,
                'slug' => 'vicky-h',
                'bussiness_entity' => '1',
                'created_at' => '2022-01-23 08:13:31',
                'updated_at' => '2022-01-23 08:13:31',
            ),
            3 => 
            array (
                'id' => 5,
                'id_cms_users' => 5,
                'name' => 'tes',
                'address' => NULL,
                'phone' => NULL,
                'photo_url' => 'uploads/avatar/avatar.png',
                'description' => NULL,
                'id_category_umkms' => NULL,
                'slug' => 'tes',
                'bussiness_entity' => NULL,
                'created_at' => '2022-02-01 16:48:58',
                'updated_at' => '2022-02-01 16:48:58',
            ),
            4 => 
            array (
                'id' => 6,
                'id_cms_users' => 6,
                'name' => 'testinggg',
                'address' => NULL,
                'phone' => NULL,
                'photo_url' => 'uploads/avatar/avatar.png',
                'description' => NULL,
                'id_category_umkms' => NULL,
                'slug' => 'testinggg',
                'bussiness_entity' => NULL,
                'created_at' => '2022-02-01 17:49:21',
                'updated_at' => '2022-02-01 17:49:21',
            ),
        ));
        
        
    }
}