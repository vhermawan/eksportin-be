<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OauthAccessTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_access_tokens')->delete();
        
        \DB::table('oauth_access_tokens')->insert(array (
            0 => 
            array (
                'id' => '00c96f948affe5e63bf3a24f1b41e70fdea4a37f22cd771187f0aeb1454b22c683b06784ea1d0b91',
                'user_id' => 4,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2022-01-23 09:50:49',
                'updated_at' => '2022-01-23 09:50:49',
                'expires_at' => '2022-01-24 09:50:49',
            ),
            1 => 
            array (
                'id' => '026901ab341b86144fb259e5f253dce54e1b262f3e135a83641f9c2995242e322afb519bfaedd6d1',
                'user_id' => 4,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2022-01-24 08:38:24',
                'updated_at' => '2022-01-24 08:38:24',
                'expires_at' => '2022-01-25 08:38:24',
            ),
            2 => 
            array (
                'id' => '0321f13af47dd7fb75c1650553b43ae789ce6435b28d4bc9657141f441fe6af47aec1a08b145c4e4',
                'user_id' => 1,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2022-01-23 06:41:50',
                'updated_at' => '2022-01-23 06:41:50',
                'expires_at' => '2022-01-24 06:41:50',
            ),
            3 => 
            array (
                'id' => '430d3aaa809349b918c787c8affc177c9758598c6d6d23860f4a96d90e50df2f46307f4ead71a10a',
                'user_id' => 1,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2022-01-23 03:29:53',
                'updated_at' => '2022-01-23 03:29:53',
                'expires_at' => '2022-01-24 03:29:53',
            ),
        ));
        
        
    }
}