<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CmsUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_users')->delete();
        
        \DB::table('cms_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Super Admin',
                'photo' => NULL,
                'email' => 'admin@crudbooster.com',
                'password' => '$2y$10$hTea1k.pzugWK/zAy.QKtOALS94sie1WqgSEWbsVyBwKoVfYBEWcK',
                'id_cms_privileges' => 1,
                'created_at' => '2022-01-22 07:15:52',
                'updated_at' => NULL,
                'status' => 'Active',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => NULL,
                'photo' => NULL,
                'email' => 'vicky@mail.com',
                'password' => '$2y$10$hTea1k.pzugWK/zAy.QKtOALS94sie1WqgSEWbsVyBwKoVfYBEWcK',
                'id_cms_privileges' => 2,
                'created_at' => '2022-01-23 06:33:19',
                'updated_at' => '2022-01-23 06:33:19',
                'status' => 'inactive',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => NULL,
                'photo' => NULL,
                'email' => 'vickyh@mail.com',
                'password' => '$2y$10$ZrrAslg17ixPZFwl3fsJh.1ZIRZu4BiCLSbmS7f3.tQlGI.27YZBq',
                'id_cms_privileges' => 2,
                'created_at' => '2022-01-23 06:56:26',
                'updated_at' => '2022-01-23 06:56:26',
                'status' => 'inactive',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => NULL,
                'photo' => NULL,
                'email' => 'vickyhermawan99@mail.ugm.ac.ids',
                'password' => '$2y$10$AIL0M/2.2wu1Wm4ry0xvOOof8vHzf3roqqm3cMqKzRSDRSd9V5Gx.',
                'id_cms_privileges' => 2,
                'created_at' => '2022-01-23 08:13:31',
                'updated_at' => '2022-01-24 08:34:51',
                'status' => 'Active',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => NULL,
                'photo' => NULL,
                'email' => 'gustav.nugraha@gmail.com',
                'password' => '$2y$10$nlIy3Z8V5.MgnucPWxJSRuXecOWbt6FurDd8UB5e2JgC5Z.jATKCC',
                'id_cms_privileges' => 2,
                'created_at' => '2022-02-01 16:48:58',
                'updated_at' => '2022-02-01 16:48:58',
                'status' => 'inactive',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => NULL,
                'photo' => NULL,
                'email' => 'vickyhermawan99@mail.ugm.ac.id',
                'password' => '$2y$10$hCssHm31i83tD4Ns2eDBv.UWE3IP2dAoamUArmkEXiD.fNdCtxXY2',
                'id_cms_privileges' => 2,
                'created_at' => '2022-02-01 17:49:21',
                'updated_at' => '2022-02-01 17:50:26',
                'status' => 'Active',
            ),
        ));
        
        
    }
}