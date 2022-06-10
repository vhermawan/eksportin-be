<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OauthClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_clients')->delete();
        
        \DB::table('oauth_clients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => NULL,
                'name' => 'api_eksportin Personal Access Client',
                'secret' => 'WbRDQHhsfsMY2KLIa6jiojKTXvobzpwS43IJaQdy',
                'provider' => NULL,
                'redirect' => 'http://localhost',
                'personal_access_client' => 1,
                'password_client' => 0,
                'revoked' => 0,
                'created_at' => '2022-01-22 10:18:11',
                'updated_at' => '2022-01-22 10:18:11',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => NULL,
                'name' => 'api_eksportin Password Grant Client',
                'secret' => 'Hn33uQ5oXVNYXIMA37MKrbsm4Tn1RgnAiIryJ3KN',
                'provider' => 'users',
                'redirect' => 'http://localhost',
                'personal_access_client' => 0,
                'password_client' => 1,
                'revoked' => 0,
                'created_at' => '2022-01-22 10:18:11',
                'updated_at' => '2022-01-22 10:18:11',
            ),
        ));
        
        
    }
}