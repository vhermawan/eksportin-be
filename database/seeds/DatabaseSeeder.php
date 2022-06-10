<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(BuyersTableSeeder::class);
        $this->call(CategoryBuyersTableSeeder::class);
        $this->call(CategoryCoursesTableSeeder::class);
        $this->call(CategoryNewsTableSeeder::class);
        $this->call(CategoryStakeholdersTableSeeder::class);
        $this->call(CategoryUmkmsTableSeeder::class);
        $this->call(CmsApicustomTableSeeder::class);
        $this->call(CmsApikeyTableSeeder::class);
        $this->call(CmsDashboardTableSeeder::class);
        $this->call(CmsEmailQueuesTableSeeder::class);
        $this->call(CmsEmailTemplatesTableSeeder::class);
        $this->call(CmsLogsTableSeeder::class);
        $this->call(CmsMenusTableSeeder::class);
        $this->call(CmsMenusPrivilegesTableSeeder::class);
        $this->call(CmsModulsTableSeeder::class);
        $this->call(CmsNotificationsTableSeeder::class);
        $this->call(CmsPrivilegesTableSeeder::class);
        $this->call(CmsPrivilegesRolesTableSeeder::class);
        $this->call(CmsSettingsTableSeeder::class);
        $this->call(CmsStatisticComponentsTableSeeder::class);
        $this->call(CmsUsersTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(CourseUmkmsTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(LikeNewsTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(OauthAccessTokensTableSeeder::class);
        $this->call(OauthAuthCodesTableSeeder::class);
        $this->call(OauthClientsTableSeeder::class);
        $this->call(OauthPersonalAccessClientsTableSeeder::class);
        $this->call(OauthRefreshTokensTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(SpeakersTableSeeder::class);
        $this->call(StakeholdersTableSeeder::class);
        $this->call(UmkmsTableSeeder::class);
    }
}
