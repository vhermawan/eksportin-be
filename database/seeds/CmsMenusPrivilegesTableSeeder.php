<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CmsMenusPrivilegesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_menus_privileges')->delete();
        
        \DB::table('cms_menus_privileges')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_cms_menus' => 1,
                'id_cms_privileges' => 1,
            ),
            1 => 
            array (
                'id' => 3,
                'id_cms_menus' => 3,
                'id_cms_privileges' => 1,
            ),
            2 => 
            array (
                'id' => 4,
                'id_cms_menus' => 2,
                'id_cms_privileges' => 1,
            ),
            3 => 
            array (
                'id' => 5,
                'id_cms_menus' => 4,
                'id_cms_privileges' => 1,
            ),
            4 => 
            array (
                'id' => 6,
                'id_cms_menus' => 5,
                'id_cms_privileges' => 1,
            ),
            5 => 
            array (
                'id' => 7,
                'id_cms_menus' => 6,
                'id_cms_privileges' => 1,
            ),
            6 => 
            array (
                'id' => 8,
                'id_cms_menus' => 7,
                'id_cms_privileges' => 1,
            ),
            7 => 
            array (
                'id' => 10,
                'id_cms_menus' => 9,
                'id_cms_privileges' => 1,
            ),
            8 => 
            array (
                'id' => 11,
                'id_cms_menus' => 10,
                'id_cms_privileges' => 1,
            ),
            9 => 
            array (
                'id' => 12,
                'id_cms_menus' => 11,
                'id_cms_privileges' => 1,
            ),
            10 => 
            array (
                'id' => 13,
                'id_cms_menus' => 12,
                'id_cms_privileges' => 1,
            ),
            11 => 
            array (
                'id' => 14,
                'id_cms_menus' => 13,
                'id_cms_privileges' => 1,
            ),
            12 => 
            array (
                'id' => 15,
                'id_cms_menus' => 14,
                'id_cms_privileges' => 1,
            ),
            13 => 
            array (
                'id' => 16,
                'id_cms_menus' => 15,
                'id_cms_privileges' => 1,
            ),
            14 => 
            array (
                'id' => 17,
                'id_cms_menus' => 16,
                'id_cms_privileges' => 1,
            ),
            15 => 
            array (
                'id' => 19,
                'id_cms_menus' => 8,
                'id_cms_privileges' => 1,
            ),
            16 => 
            array (
                'id' => 21,
                'id_cms_menus' => 17,
                'id_cms_privileges' => 1,
            ),
            17 => 
            array (
                'id' => 22,
                'id_cms_menus' => 18,
                'id_cms_privileges' => 1,
            ),
            18 => 
            array (
                'id' => 23,
                'id_cms_menus' => 19,
                'id_cms_privileges' => 1,
            ),
            19 => 
            array (
                'id' => 24,
                'id_cms_menus' => 20,
                'id_cms_privileges' => 1,
            ),
            20 => 
            array (
                'id' => 25,
                'id_cms_menus' => 21,
                'id_cms_privileges' => 1,
            ),
        ));
        
        
    }
}