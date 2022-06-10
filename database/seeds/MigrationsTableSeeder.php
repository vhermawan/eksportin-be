<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2016_06_01_000001_create_oauth_auth_codes_table',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2016_06_01_000002_create_oauth_access_tokens_table',
                'batch' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2016_06_01_000003_create_oauth_refresh_tokens_table',
                'batch' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'migration' => '2016_06_01_000004_create_oauth_clients_table',
                'batch' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'migration' => '2016_06_01_000005_create_oauth_personal_access_clients_table',
                'batch' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'migration' => '2016_08_07_145904_add_table_cms_apicustom',
                'batch' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'migration' => '2016_08_07_150834_add_table_cms_dashboard',
                'batch' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'migration' => '2016_08_07_151210_add_table_cms_logs',
                'batch' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'migration' => '2016_08_07_151211_add_details_cms_logs',
                'batch' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'migration' => '2016_08_07_152014_add_table_cms_privileges',
                'batch' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'migration' => '2016_08_07_152214_add_table_cms_privileges_roles',
                'batch' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'migration' => '2016_08_07_152320_add_table_cms_settings',
                'batch' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'migration' => '2016_08_07_152421_add_table_cms_users',
                'batch' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'migration' => '2016_08_07_154624_add_table_cms_menus_privileges',
                'batch' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'migration' => '2016_08_07_154624_add_table_cms_moduls',
                'batch' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'migration' => '2016_08_17_225409_add_status_cms_users',
                'batch' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'migration' => '2016_08_20_125418_add_table_cms_notifications',
                'batch' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'migration' => '2016_09_04_033706_add_table_cms_email_queues',
                'batch' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'migration' => '2016_09_16_035347_add_group_setting',
                'batch' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'migration' => '2016_09_16_045425_add_label_setting',
                'batch' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'migration' => '2016_09_17_104728_create_nullable_cms_apicustom',
                'batch' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'migration' => '2016_10_01_141740_add_method_type_apicustom',
                'batch' => 1,
            ),
            24 => 
            array (
                'id' => 25,
                'migration' => '2016_10_01_141846_add_parameters_apicustom',
                'batch' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'migration' => '2016_10_01_141934_add_responses_apicustom',
                'batch' => 1,
            ),
            26 => 
            array (
                'id' => 27,
                'migration' => '2016_10_01_144826_add_table_apikey',
                'batch' => 1,
            ),
            27 => 
            array (
                'id' => 28,
                'migration' => '2016_11_14_141657_create_cms_menus',
                'batch' => 1,
            ),
            28 => 
            array (
                'id' => 29,
                'migration' => '2016_11_15_132350_create_cms_email_templates',
                'batch' => 1,
            ),
            29 => 
            array (
                'id' => 30,
                'migration' => '2016_11_15_190410_create_cms_statistics',
                'batch' => 1,
            ),
            30 => 
            array (
                'id' => 31,
                'migration' => '2016_11_17_102740_create_cms_statistic_components',
                'batch' => 1,
            ),
            31 => 
            array (
                'id' => 32,
                'migration' => '2017_06_06_164501_add_deleted_at_cms_moduls',
                'batch' => 1,
            ),
            32 => 
            array (
                'id' => 33,
                'migration' => '2019_08_19_000000_create_failed_jobs_table',
                'batch' => 1,
            ),
            33 => 
            array (
                'id' => 34,
                'migration' => '2022_01_22_101733_create_admins_table',
                'batch' => 0,
            ),
            34 => 
            array (
                'id' => 35,
                'migration' => '2022_01_22_101733_create_buyers_table',
                'batch' => 0,
            ),
            35 => 
            array (
                'id' => 36,
                'migration' => '2022_01_22_101733_create_category_buyers_table',
                'batch' => 0,
            ),
            36 => 
            array (
                'id' => 37,
                'migration' => '2022_01_22_101733_create_category_courses_table',
                'batch' => 0,
            ),
            37 => 
            array (
                'id' => 38,
                'migration' => '2022_01_22_101733_create_category_news_table',
                'batch' => 0,
            ),
            38 => 
            array (
                'id' => 39,
                'migration' => '2022_01_22_101733_create_category_stakeholders_table',
                'batch' => 0,
            ),
            39 => 
            array (
                'id' => 40,
                'migration' => '2022_01_22_101733_create_category_umkms_table',
                'batch' => 0,
            ),
            40 => 
            array (
                'id' => 41,
                'migration' => '2022_01_22_101733_create_cms_apicustom_table',
                'batch' => 0,
            ),
            41 => 
            array (
                'id' => 42,
                'migration' => '2022_01_22_101733_create_cms_apikey_table',
                'batch' => 0,
            ),
            42 => 
            array (
                'id' => 43,
                'migration' => '2022_01_22_101733_create_cms_dashboard_table',
                'batch' => 0,
            ),
            43 => 
            array (
                'id' => 44,
                'migration' => '2022_01_22_101733_create_cms_email_queues_table',
                'batch' => 0,
            ),
            44 => 
            array (
                'id' => 45,
                'migration' => '2022_01_22_101733_create_cms_email_templates_table',
                'batch' => 0,
            ),
            45 => 
            array (
                'id' => 46,
                'migration' => '2022_01_22_101733_create_cms_logs_table',
                'batch' => 0,
            ),
            46 => 
            array (
                'id' => 47,
                'migration' => '2022_01_22_101733_create_cms_menus_table',
                'batch' => 0,
            ),
            47 => 
            array (
                'id' => 48,
                'migration' => '2022_01_22_101733_create_cms_menus_privileges_table',
                'batch' => 0,
            ),
            48 => 
            array (
                'id' => 49,
                'migration' => '2022_01_22_101733_create_cms_moduls_table',
                'batch' => 0,
            ),
            49 => 
            array (
                'id' => 50,
                'migration' => '2022_01_22_101733_create_cms_notifications_table',
                'batch' => 0,
            ),
            50 => 
            array (
                'id' => 51,
                'migration' => '2022_01_22_101733_create_cms_privileges_table',
                'batch' => 0,
            ),
            51 => 
            array (
                'id' => 52,
                'migration' => '2022_01_22_101733_create_cms_privileges_roles_table',
                'batch' => 0,
            ),
            52 => 
            array (
                'id' => 53,
                'migration' => '2022_01_22_101733_create_cms_settings_table',
                'batch' => 0,
            ),
            53 => 
            array (
                'id' => 54,
                'migration' => '2022_01_22_101733_create_cms_statistic_components_table',
                'batch' => 0,
            ),
            54 => 
            array (
                'id' => 55,
                'migration' => '2022_01_22_101733_create_cms_statistics_table',
                'batch' => 0,
            ),
            55 => 
            array (
                'id' => 56,
                'migration' => '2022_01_22_101733_create_cms_users_table',
                'batch' => 0,
            ),
            56 => 
            array (
                'id' => 57,
                'migration' => '2022_01_22_101733_create_course_umkms_table',
                'batch' => 0,
            ),
            57 => 
            array (
                'id' => 58,
                'migration' => '2022_01_22_101733_create_courses_table',
                'batch' => 0,
            ),
            58 => 
            array (
                'id' => 59,
                'migration' => '2022_01_22_101733_create_failed_jobs_table',
                'batch' => 0,
            ),
            59 => 
            array (
                'id' => 60,
                'migration' => '2022_01_22_101733_create_like_news_table',
                'batch' => 0,
            ),
            60 => 
            array (
                'id' => 61,
                'migration' => '2022_01_22_101733_create_news_table',
                'batch' => 0,
            ),
            61 => 
            array (
                'id' => 62,
                'migration' => '2022_01_22_101733_create_oauth_access_tokens_table',
                'batch' => 0,
            ),
            62 => 
            array (
                'id' => 63,
                'migration' => '2022_01_22_101733_create_oauth_auth_codes_table',
                'batch' => 0,
            ),
            63 => 
            array (
                'id' => 64,
                'migration' => '2022_01_22_101733_create_oauth_clients_table',
                'batch' => 0,
            ),
            64 => 
            array (
                'id' => 65,
                'migration' => '2022_01_22_101733_create_oauth_personal_access_clients_table',
                'batch' => 0,
            ),
            65 => 
            array (
                'id' => 66,
                'migration' => '2022_01_22_101733_create_oauth_refresh_tokens_table',
                'batch' => 0,
            ),
            66 => 
            array (
                'id' => 67,
                'migration' => '2022_01_22_101733_create_password_resets_table',
                'batch' => 0,
            ),
            67 => 
            array (
                'id' => 68,
                'migration' => '2022_01_22_101733_create_speakers_table',
                'batch' => 0,
            ),
            68 => 
            array (
                'id' => 69,
                'migration' => '2022_01_22_101733_create_stakeholders_table',
                'batch' => 0,
            ),
            69 => 
            array (
                'id' => 70,
                'migration' => '2022_01_22_101733_create_umkms_table',
                'batch' => 0,
            ),
            70 => 
            array (
                'id' => 71,
                'migration' => '2022_01_22_110744_create_admins_table',
                'batch' => 0,
            ),
            71 => 
            array (
                'id' => 72,
                'migration' => '2022_01_22_110744_create_buyers_table',
                'batch' => 0,
            ),
            72 => 
            array (
                'id' => 73,
                'migration' => '2022_01_22_110744_create_category_buyers_table',
                'batch' => 0,
            ),
            73 => 
            array (
                'id' => 74,
                'migration' => '2022_01_22_110744_create_category_courses_table',
                'batch' => 0,
            ),
            74 => 
            array (
                'id' => 75,
                'migration' => '2022_01_22_110744_create_category_news_table',
                'batch' => 0,
            ),
            75 => 
            array (
                'id' => 76,
                'migration' => '2022_01_22_110744_create_category_stakeholders_table',
                'batch' => 0,
            ),
            76 => 
            array (
                'id' => 77,
                'migration' => '2022_01_22_110744_create_category_umkms_table',
                'batch' => 0,
            ),
            77 => 
            array (
                'id' => 78,
                'migration' => '2022_01_22_110744_create_cms_apicustom_table',
                'batch' => 0,
            ),
            78 => 
            array (
                'id' => 79,
                'migration' => '2022_01_22_110744_create_cms_apikey_table',
                'batch' => 0,
            ),
            79 => 
            array (
                'id' => 80,
                'migration' => '2022_01_22_110744_create_cms_dashboard_table',
                'batch' => 0,
            ),
            80 => 
            array (
                'id' => 81,
                'migration' => '2022_01_22_110744_create_cms_email_queues_table',
                'batch' => 0,
            ),
            81 => 
            array (
                'id' => 82,
                'migration' => '2022_01_22_110744_create_cms_email_templates_table',
                'batch' => 0,
            ),
            82 => 
            array (
                'id' => 83,
                'migration' => '2022_01_22_110744_create_cms_logs_table',
                'batch' => 0,
            ),
            83 => 
            array (
                'id' => 84,
                'migration' => '2022_01_22_110744_create_cms_menus_table',
                'batch' => 0,
            ),
            84 => 
            array (
                'id' => 85,
                'migration' => '2022_01_22_110744_create_cms_menus_privileges_table',
                'batch' => 0,
            ),
            85 => 
            array (
                'id' => 86,
                'migration' => '2022_01_22_110744_create_cms_moduls_table',
                'batch' => 0,
            ),
            86 => 
            array (
                'id' => 87,
                'migration' => '2022_01_22_110744_create_cms_notifications_table',
                'batch' => 0,
            ),
            87 => 
            array (
                'id' => 88,
                'migration' => '2022_01_22_110744_create_cms_privileges_table',
                'batch' => 0,
            ),
            88 => 
            array (
                'id' => 89,
                'migration' => '2022_01_22_110744_create_cms_privileges_roles_table',
                'batch' => 0,
            ),
            89 => 
            array (
                'id' => 90,
                'migration' => '2022_01_22_110744_create_cms_settings_table',
                'batch' => 0,
            ),
            90 => 
            array (
                'id' => 91,
                'migration' => '2022_01_22_110744_create_cms_statistic_components_table',
                'batch' => 0,
            ),
            91 => 
            array (
                'id' => 92,
                'migration' => '2022_01_22_110744_create_cms_statistics_table',
                'batch' => 0,
            ),
            92 => 
            array (
                'id' => 93,
                'migration' => '2022_01_22_110744_create_cms_users_table',
                'batch' => 0,
            ),
            93 => 
            array (
                'id' => 94,
                'migration' => '2022_01_22_110744_create_course_umkms_table',
                'batch' => 0,
            ),
            94 => 
            array (
                'id' => 95,
                'migration' => '2022_01_22_110744_create_courses_table',
                'batch' => 0,
            ),
            95 => 
            array (
                'id' => 96,
                'migration' => '2022_01_22_110744_create_failed_jobs_table',
                'batch' => 0,
            ),
            96 => 
            array (
                'id' => 97,
                'migration' => '2022_01_22_110744_create_like_news_table',
                'batch' => 0,
            ),
            97 => 
            array (
                'id' => 98,
                'migration' => '2022_01_22_110744_create_news_table',
                'batch' => 0,
            ),
            98 => 
            array (
                'id' => 99,
                'migration' => '2022_01_22_110744_create_oauth_access_tokens_table',
                'batch' => 0,
            ),
            99 => 
            array (
                'id' => 100,
                'migration' => '2022_01_22_110744_create_oauth_auth_codes_table',
                'batch' => 0,
            ),
            100 => 
            array (
                'id' => 101,
                'migration' => '2022_01_22_110744_create_oauth_clients_table',
                'batch' => 0,
            ),
            101 => 
            array (
                'id' => 102,
                'migration' => '2022_01_22_110744_create_oauth_personal_access_clients_table',
                'batch' => 0,
            ),
            102 => 
            array (
                'id' => 103,
                'migration' => '2022_01_22_110744_create_oauth_refresh_tokens_table',
                'batch' => 0,
            ),
            103 => 
            array (
                'id' => 104,
                'migration' => '2022_01_22_110744_create_password_resets_table',
                'batch' => 0,
            ),
            104 => 
            array (
                'id' => 105,
                'migration' => '2022_01_22_110744_create_speakers_table',
                'batch' => 0,
            ),
            105 => 
            array (
                'id' => 106,
                'migration' => '2022_01_22_110744_create_stakeholders_table',
                'batch' => 0,
            ),
            106 => 
            array (
                'id' => 107,
                'migration' => '2022_01_22_110744_create_umkms_table',
                'batch' => 0,
            ),
            107 => 
            array (
                'id' => 108,
                'migration' => '2022_02_01_082459_create_admins_table',
                'batch' => 0,
            ),
            108 => 
            array (
                'id' => 109,
                'migration' => '2022_02_01_082459_create_buyers_table',
                'batch' => 0,
            ),
            109 => 
            array (
                'id' => 110,
                'migration' => '2022_02_01_082459_create_category_buyers_table',
                'batch' => 0,
            ),
            110 => 
            array (
                'id' => 111,
                'migration' => '2022_02_01_082459_create_category_courses_table',
                'batch' => 0,
            ),
            111 => 
            array (
                'id' => 112,
                'migration' => '2022_02_01_082459_create_category_news_table',
                'batch' => 0,
            ),
            112 => 
            array (
                'id' => 113,
                'migration' => '2022_02_01_082459_create_category_stakeholders_table',
                'batch' => 0,
            ),
            113 => 
            array (
                'id' => 114,
                'migration' => '2022_02_01_082459_create_category_umkms_table',
                'batch' => 0,
            ),
            114 => 
            array (
                'id' => 115,
                'migration' => '2022_02_01_082459_create_cms_apicustom_table',
                'batch' => 0,
            ),
            115 => 
            array (
                'id' => 116,
                'migration' => '2022_02_01_082459_create_cms_apikey_table',
                'batch' => 0,
            ),
            116 => 
            array (
                'id' => 117,
                'migration' => '2022_02_01_082459_create_cms_dashboard_table',
                'batch' => 0,
            ),
            117 => 
            array (
                'id' => 118,
                'migration' => '2022_02_01_082459_create_cms_email_queues_table',
                'batch' => 0,
            ),
            118 => 
            array (
                'id' => 119,
                'migration' => '2022_02_01_082459_create_cms_email_templates_table',
                'batch' => 0,
            ),
            119 => 
            array (
                'id' => 120,
                'migration' => '2022_02_01_082459_create_cms_logs_table',
                'batch' => 0,
            ),
            120 => 
            array (
                'id' => 121,
                'migration' => '2022_02_01_082459_create_cms_menus_table',
                'batch' => 0,
            ),
            121 => 
            array (
                'id' => 122,
                'migration' => '2022_02_01_082459_create_cms_menus_privileges_table',
                'batch' => 0,
            ),
            122 => 
            array (
                'id' => 123,
                'migration' => '2022_02_01_082459_create_cms_moduls_table',
                'batch' => 0,
            ),
            123 => 
            array (
                'id' => 124,
                'migration' => '2022_02_01_082459_create_cms_notifications_table',
                'batch' => 0,
            ),
            124 => 
            array (
                'id' => 125,
                'migration' => '2022_02_01_082459_create_cms_privileges_table',
                'batch' => 0,
            ),
            125 => 
            array (
                'id' => 126,
                'migration' => '2022_02_01_082459_create_cms_privileges_roles_table',
                'batch' => 0,
            ),
            126 => 
            array (
                'id' => 127,
                'migration' => '2022_02_01_082459_create_cms_settings_table',
                'batch' => 0,
            ),
            127 => 
            array (
                'id' => 128,
                'migration' => '2022_02_01_082459_create_cms_statistic_components_table',
                'batch' => 0,
            ),
            128 => 
            array (
                'id' => 129,
                'migration' => '2022_02_01_082459_create_cms_statistics_table',
                'batch' => 0,
            ),
            129 => 
            array (
                'id' => 130,
                'migration' => '2022_02_01_082459_create_cms_users_table',
                'batch' => 0,
            ),
            130 => 
            array (
                'id' => 131,
                'migration' => '2022_02_01_082459_create_course_umkms_table',
                'batch' => 0,
            ),
            131 => 
            array (
                'id' => 132,
                'migration' => '2022_02_01_082459_create_courses_table',
                'batch' => 0,
            ),
            132 => 
            array (
                'id' => 133,
                'migration' => '2022_02_01_082459_create_failed_jobs_table',
                'batch' => 0,
            ),
            133 => 
            array (
                'id' => 134,
                'migration' => '2022_02_01_082459_create_like_news_table',
                'batch' => 0,
            ),
            134 => 
            array (
                'id' => 135,
                'migration' => '2022_02_01_082459_create_news_table',
                'batch' => 0,
            ),
            135 => 
            array (
                'id' => 136,
                'migration' => '2022_02_01_082459_create_oauth_access_tokens_table',
                'batch' => 0,
            ),
            136 => 
            array (
                'id' => 137,
                'migration' => '2022_02_01_082459_create_oauth_auth_codes_table',
                'batch' => 0,
            ),
            137 => 
            array (
                'id' => 138,
                'migration' => '2022_02_01_082459_create_oauth_clients_table',
                'batch' => 0,
            ),
            138 => 
            array (
                'id' => 139,
                'migration' => '2022_02_01_082459_create_oauth_personal_access_clients_table',
                'batch' => 0,
            ),
            139 => 
            array (
                'id' => 140,
                'migration' => '2022_02_01_082459_create_oauth_refresh_tokens_table',
                'batch' => 0,
            ),
            140 => 
            array (
                'id' => 141,
                'migration' => '2022_02_01_082459_create_password_resets_table',
                'batch' => 0,
            ),
            141 => 
            array (
                'id' => 142,
                'migration' => '2022_02_01_082459_create_speakers_table',
                'batch' => 0,
            ),
            142 => 
            array (
                'id' => 143,
                'migration' => '2022_02_01_082459_create_stakeholders_table',
                'batch' => 0,
            ),
            143 => 
            array (
                'id' => 144,
                'migration' => '2022_02_01_082459_create_umkms_table',
                'batch' => 0,
            ),
        ));
        
        
    }
}