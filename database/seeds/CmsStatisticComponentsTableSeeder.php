<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CmsStatisticComponentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_statistic_components')->delete();
        
        \DB::table('cms_statistic_components')->insert(array (
            0 => 
            array (
                'id' => 2,
                'id_cms_statistics' => 1,
                'componentID' => 'e9962f11fcab93d8a7e5c073fc7ba1c3',
                'component_name' => 'smallbox',
                'area_name' => 'area4',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"Total Akses Materi","icon":"ion-reader","color":"bg-yellow","link":"http:\\/\\/127.0.0.1:8000\\/admin","sql":"SELECT COUNT(*) AS result FROM course_umkms"}',
                'created_at' => '2022-02-01 06:51:20',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'id_cms_statistics' => 1,
                'componentID' => 'eaa9d0a1f1c62b7b537034045ea7873d',
                'component_name' => 'smallbox',
                'area_name' => 'area1',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"Total User","icon":"ion-person","color":"bg-green","link":"http:\\/\\/127.0.0.1:8000\\/admin","sql":"SELECT COUNT(*) AS result from cms_users where id_cms_privileges = \'2\' and status = \'Active\'"}',
                'created_at' => '2022-02-01 06:51:39',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'id_cms_statistics' => 1,
                'componentID' => '8e9efd02b2c748e0301146cdb946c721',
                'component_name' => 'smallbox',
                'area_name' => 'area2',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"Total Materi","icon":"ion-laptop","color":"bg-aqua","link":"http:\\/\\/127.0.0.1:8000\\/admin","sql":"SELECT COUNT(*) AS result FROM courses"}',
                'created_at' => '2022-02-01 06:51:41',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'id_cms_statistics' => 1,
                'componentID' => '7e46c20a3d6e1798af19dc4d1e95bcb3',
                'component_name' => 'smallbox',
                'area_name' => 'area3',
                'sorting' => 0,
                'name' => NULL,
                'config' => '{"name":"Total Berita","icon":"ion-newspaper","color":"bg-red","link":"http:\\/\\/127.0.0.1:8000\\/admin","sql":"select * from news"}',
                'created_at' => '2022-02-01 06:51:43',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'id_cms_statistics' => 2,
                'componentID' => 'ae187502d1440f6416fa9ca74f32d860',
                'component_name' => 'smallbox',
                'area_name' => 'area1',
                'sorting' => 0,
                'name' => NULL,
                'config' => '{"name":"tes","icon":"ion-bag","color":"bg-green","link":"googl.ecom","sql":"select * from cms_users left join umkms on cms_users.id = umkms.id_cms_users"}',
                'created_at' => '2022-02-01 07:06:13',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'id_cms_statistics' => 1,
                'componentID' => '7c4af9d0be9a13751a978c0857d1a71b',
                'component_name' => 'chartarea',
                'area_name' => NULL,
                'sorting' => 0,
                'name' => 'Untitled',
                'config' => NULL,
                'created_at' => '2022-02-01 08:15:28',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 10,
                'id_cms_statistics' => 1,
                'componentID' => '05b3033a0a38f1e7a7391bd2ac8a34f2',
                'component_name' => 'chartarea',
                'area_name' => 'area5',
                'sorting' => 0,
                'name' => NULL,
                'config' => '{"name":"Grafik User Mengakses Materi","sql":"select * from course_umkms","area_name":"Bulan","goals":null}',
                'created_at' => '2022-02-01 08:16:36',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}