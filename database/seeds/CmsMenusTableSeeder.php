<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CmsMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_menus')->delete();
        
        \DB::table('cms_menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Pembeli',
                'type' => 'Route',
                'path' => 'AdminBuyersControllerGetIndex',
                'color' => NULL,
                'icon' => 'fa fa-users',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 2,
                'created_at' => '2022-01-22 10:38:27',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Master Data',
                'type' => 'Route',
                'path' => 'master',
                'color' => 'normal',
                'icon' => 'fa fa-database',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 8,
                'created_at' => '2022-01-22 10:50:21',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 7,
                'name' => 'Kategori Pembeli',
                'type' => 'Route',
                'path' => 'AdminCategoryBuyers1ControllerGetIndex',
                'color' => NULL,
                'icon' => 'fa fa-glass',
                'parent_id' => 3,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 5,
                'created_at' => '2022-01-22 12:20:10',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 8,
                'name' => 'Kategori Materi',
                'type' => 'Route',
                'path' => 'AdminCategoryCourses1ControllerGetIndex',
                'color' => 'normal',
                'icon' => 'fa fa-book',
                'parent_id' => 3,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 3,
                'created_at' => '2022-01-22 12:20:30',
                'updated_at' => '2022-02-01 06:29:15',
            ),
            4 => 
            array (
                'id' => 9,
                'name' => 'Kategori Berita',
                'type' => 'Route',
                'path' => 'AdminCategoryNewsControllerGetIndex',
                'color' => NULL,
                'icon' => 'fa fa-newspaper-o',
                'parent_id' => 3,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 2,
                'created_at' => '2022-01-22 12:21:30',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 10,
                'name' => 'Kategori Instansi',
                'type' => 'Route',
                'path' => 'AdminCategoryStakeholders1ControllerGetIndex',
                'color' => NULL,
                'icon' => 'fa fa-building',
                'parent_id' => 3,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 1,
                'created_at' => '2022-01-22 12:23:11',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 11,
                'name' => 'Kategori Umkm',
                'type' => 'Route',
                'path' => 'AdminCategoryUmkms1ControllerGetIndex',
                'color' => NULL,
                'icon' => 'fa fa-certificate',
                'parent_id' => 3,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 4,
                'created_at' => '2022-01-22 12:23:49',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 13,
                'name' => 'Pemateri',
                'type' => 'Route',
                'path' => 'AdminSpeakersControllerGetIndex',
                'color' => NULL,
                'icon' => 'fa fa-institution',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 3,
                'created_at' => '2022-01-22 12:50:06',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 14,
                'name' => 'Berita',
                'type' => 'Route',
                'path' => 'AdminNewsControllerGetIndex',
                'color' => NULL,
                'icon' => 'fa fa-newspaper-o',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 4,
                'created_at' => '2022-01-22 12:58:50',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 15,
                'name' => 'Instansi',
                'type' => 'Route',
                'path' => 'AdminStakeholdersControllerGetIndex',
                'color' => NULL,
                'icon' => 'fa fa-building-o',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 5,
                'created_at' => '2022-01-22 13:03:53',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 17,
                'name' => 'UMKM',
                'type' => 'Route',
                'path' => 'AdminUmkmsControllerGetIndex',
                'color' => 'normal',
                'icon' => 'fa fa-user',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 6,
                'created_at' => '2022-02-01 06:18:13',
                'updated_at' => '2022-02-01 06:48:53',
            ),
            11 => 
            array (
                'id' => 19,
                'name' => 'Dashboard',
                'type' => 'Statistic',
                'path' => 'statistic_builder/show/total-umkm',
                'color' => 'normal',
                'icon' => 'fa fa-glass',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 1,
                'id_cms_privileges' => 1,
                'sorting' => 1,
                'created_at' => '2022-02-01 06:50:22',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 21,
                'name' => 'Materi',
                'type' => 'Route',
                'path' => 'AdminCoursesControllerGetIndex',
                'color' => NULL,
                'icon' => 'fa fa-book',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 7,
                'created_at' => '2022-02-01 08:04:17',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}