<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CmsModulsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_moduls')->delete();
        
        \DB::table('cms_moduls')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Notifications',
                'icon' => 'fa fa-cog',
                'path' => 'notifications',
                'table_name' => 'cms_notifications',
                'controller' => 'NotificationsController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2022-01-22 07:15:52',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Privileges',
                'icon' => 'fa fa-cog',
                'path' => 'privileges',
                'table_name' => 'cms_privileges',
                'controller' => 'PrivilegesController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2022-01-22 07:15:52',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Privileges Roles',
                'icon' => 'fa fa-cog',
                'path' => 'privileges_roles',
                'table_name' => 'cms_privileges_roles',
                'controller' => 'PrivilegesRolesController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2022-01-22 07:15:52',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Users Management',
                'icon' => 'fa fa-users',
                'path' => 'users',
                'table_name' => 'cms_users',
                'controller' => 'AdminCmsUsersController',
                'is_protected' => 0,
                'is_active' => 1,
                'created_at' => '2022-01-22 07:15:52',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Settings',
                'icon' => 'fa fa-cog',
                'path' => 'settings',
                'table_name' => 'cms_settings',
                'controller' => 'SettingsController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2022-01-22 07:15:52',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Module Generator',
                'icon' => 'fa fa-database',
                'path' => 'module_generator',
                'table_name' => 'cms_moduls',
                'controller' => 'ModulsController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2022-01-22 07:15:52',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Menu Management',
                'icon' => 'fa fa-bars',
                'path' => 'menu_management',
                'table_name' => 'cms_menus',
                'controller' => 'MenusController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2022-01-22 07:15:52',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Email Templates',
                'icon' => 'fa fa-envelope-o',
                'path' => 'email_templates',
                'table_name' => 'cms_email_templates',
                'controller' => 'EmailTemplatesController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2022-01-22 07:15:52',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Statistic Builder',
                'icon' => 'fa fa-dashboard',
                'path' => 'statistic_builder',
                'table_name' => 'cms_statistics',
                'controller' => 'StatisticBuilderController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2022-01-22 07:15:52',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'API Generator',
                'icon' => 'fa fa-cloud-download',
                'path' => 'api_generator',
                'table_name' => '',
                'controller' => 'ApiCustomController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2022-01-22 07:15:52',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Log User Access',
                'icon' => 'fa fa-flag-o',
                'path' => 'logs',
                'table_name' => 'cms_logs',
                'controller' => 'LogsController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2022-01-22 07:15:52',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Pembeli',
                'icon' => 'fa fa-users',
                'path' => 'buyers',
                'table_name' => 'buyers',
                'controller' => 'AdminBuyersController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2022-01-22 10:38:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 17,
                'name' => 'Kategori Pembeli',
                'icon' => 'fa fa-cog',
                'path' => 'category_buyers',
                'table_name' => 'category_buyers',
                'controller' => 'AdminCategoryBuyers1Controller',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2022-01-22 12:20:10',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 18,
                'name' => 'Kategori Materi',
                'icon' => 'fa fa-book',
                'path' => 'category_courses',
                'table_name' => 'category_courses',
                'controller' => 'AdminCategoryCourses1Controller',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2022-01-22 12:20:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 19,
                'name' => 'Kategori Berita',
                'icon' => 'fa fa-newspaper-o',
                'path' => 'category_news',
                'table_name' => 'category_news',
                'controller' => 'AdminCategoryNewsController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2022-01-22 12:21:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 20,
                'name' => 'Kategori Instansi',
                'icon' => 'fa fa-building',
                'path' => 'category_stakeholders',
                'table_name' => 'category_stakeholders',
                'controller' => 'AdminCategoryStakeholders1Controller',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2022-01-22 12:23:11',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 21,
                'name' => 'Kategori Umkm',
                'icon' => 'fa fa-certificate',
                'path' => 'category_umkms',
                'table_name' => 'category_umkms',
                'controller' => 'AdminCategoryUmkms1Controller',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2022-01-22 12:23:49',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 23,
                'name' => 'Pemateri',
                'icon' => 'fa fa-institution',
                'path' => 'speakers',
                'table_name' => 'speakers',
                'controller' => 'AdminSpeakersController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2022-01-22 12:50:06',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 24,
                'name' => 'Berita',
                'icon' => 'fa fa-newspaper-o',
                'path' => 'news',
                'table_name' => 'news',
                'controller' => 'AdminNewsController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2022-01-22 12:58:50',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 25,
                'name' => 'Instansi',
                'icon' => 'fa fa-building-o',
                'path' => 'stakeholders',
                'table_name' => 'stakeholders',
                'controller' => 'AdminStakeholdersController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2022-01-22 13:03:53',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 27,
                'name' => 'UMKM',
                'icon' => 'fa fa-user',
                'path' => 'umkms',
                'table_name' => 'umkms',
                'controller' => 'AdminUmkmsController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2022-02-01 06:18:13',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 29,
                'name' => 'Materi',
                'icon' => 'fa fa-book',
                'path' => 'courses',
                'table_name' => 'courses',
                'controller' => 'AdminCoursesController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2022-02-01 08:04:17',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}