<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CmsDashboardTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_dashboard')->delete();
        
        
        
    }
}