<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CmsLogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_logs')->delete();
        
        \DB::table('cms_logs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/login',
                'description' => 'admin@crudbooster.com login with IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-01-22 10:30:10',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/menu_management/add-save',
                'description' => 'Add New Data Master Data at Menu Management',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-01-22 10:50:21',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/menu_management/edit-save/2',
                'description' => 'Update data Kategori Pembeli at Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>icon</td><td>fa fa-glass</td><td></td></tr><tr><td>parent_id</td><td>3</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2022-01-22 10:50:41',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/menu_management/delete/4',
                'description' => 'Delete data Kategori Kelas at Menu Management',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-01-22 11:05:44',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/menu_management/delete/5',
                'description' => 'Delete data Kategori Instansi at Menu Management',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-01-22 11:05:47',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/menu_management/delete/6',
                'description' => 'Delete data Kategori Umkm at Menu Management',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-01-22 11:05:52',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/menu_management/delete/2',
                'description' => 'Delete data Kategori Pembeli at Menu Management',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-01-22 11:05:54',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/module_generator/delete/22',
                'description' => 'Delete data Pemateri at Module Generator',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-01-22 12:45:46',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/login',
                'description' => 'admin@crudbooster.com login with IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-01-23 02:34:14',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/category_umkms/add-save',
                'description' => 'Add New Data Mebel at Kategori Umkm',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-01-23 05:34:23',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/category_news/add-save',
                'description' => 'Add New Data Terkini at Kategori Berita',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-01-23 14:06:27',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/news/add-save',
                'description' => 'Add New Data  at Berita',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-01-23 14:06:42',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/login',
                'description' => 'admin@crudbooster.com login with IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-01-24 08:01:36',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/login',
                'description' => 'admin@crudbooster.com login with IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-01-31 18:40:22',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/news/add-save',
                'description' => 'Add New Data  at Berita',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-01-31 18:44:33',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/login',
                'description' => 'admin@crudbooster.com login with IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-02-01 05:20:20',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/category_stakeholders/add-save',
                'description' => 'Add New Data Kementrian at Kategori Instansi',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-02-01 06:25:38',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/category_stakeholders/add-save',
                'description' => 'Add New Data Pemerintahan Daerah at Kategori Instansi',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-02-01 06:25:45',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/category_stakeholders/add-save',
                'description' => 'Add New Data Badan Audit at Kategori Instansi',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-02-01 06:26:06',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/category_news/add-save',
                'description' => 'Add New Data Trivia at Kategori Berita',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-02-01 06:26:16',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/category_news/add-save',
                'description' => 'Add New Data Komoditas at Kategori Berita',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-02-01 06:27:41',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/menu_management/edit-save/8',
                'description' => 'Update data Kategori Materi at Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>name</td><td>Kategori Kelas</td><td>Kategori Materi</td></tr><tr><td>color</td><td></td><td>normal</td></tr><tr><td>parent_id</td><td>3</td><td></td></tr><tr><td>sorting</td><td>3</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2022-02-01 06:29:15',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/category_courses/add-save',
                'description' => 'Add New Data Pengenalan at Kategori Materi',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-02-01 06:29:27',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/category_courses/add-save',
                'description' => 'Add New Data Persuratan at Kategori Materi',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-02-01 06:29:32',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/category_courses/add-save',
                'description' => 'Add New Data Tips dan Trik at Kategori Materi',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-02-01 06:29:40',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/category_umkms/add-save',
                'description' => 'Add New Data Kerajinan at Kategori Umkm',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-02-01 06:29:51',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/category_umkms/add-save',
                'description' => 'Add New Data Tesktil at Kategori Umkm',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-02-01 06:29:55',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/category_umkms/add-save',
                'description' => 'Add New Data Perhiasan at Kategori Umkm',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-02-01 06:30:01',
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/category_umkms/add-save',
                'description' => 'Add New Data Kerajinan Tangan at Kategori Umkm',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-02-01 06:30:06',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/category_buyers/add-save',
                'description' => 'Add New Data Pemerintahan at Kategori Pembeli',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-02-01 06:30:12',
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/category_buyers/add-save',
                'description' => 'Add New Data Kementrian at Kategori Pembeli',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-02-01 06:30:16',
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/category_buyers/add-save',
                'description' => 'Add New Data Perusahaan at Kategori Pembeli',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-02-01 06:30:21',
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/statistic_builder/add-save',
                'description' => 'Add New Data Total UMKM at Statistic Builder',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-02-01 06:32:25',
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/menu_management/edit-save/17',
                'description' => 'Update data UMKM at Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>parent_id</td><td>0</td><td></td></tr><tr><td>is_dashboard</td><td>0</td><td>1</td></tr><tr><td>sorting</td><td>6</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2022-02-01 06:48:37',
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/menu_management/edit-save/17',
                'description' => 'Update data UMKM at Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>sorting</td><td>6</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2022-02-01 06:48:53',
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/menu_management/add-save',
                'description' => 'Add New Data Total UMKM at Menu Management',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-02-01 06:49:20',
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/menu_management/add-save',
                'description' => 'Add New Data Dashboard at Menu Management',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-02-01 06:50:22',
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/statistic_builder/edit-save/1',
                'description' => 'Update data Total Data at Statistic Builder',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>name</td><td>Total UMKM</td><td>Total Data</td></tr><tr><td>slug</td><td>total-umkm</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2022-02-01 06:51:05',
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/logout',
                'description' => 'admin@crudbooster.com logout',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-02-01 07:04:36',
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/login',
                'description' => 'admin@crudbooster.com login with IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-02-01 07:04:37',
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/statistic_builder/add-save',
                'description' => 'Add New Data Data Dashboard at Statistic Builder',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-02-01 07:06:08',
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/module_generator/delete/26',
                'description' => 'Delete data Materi at Module Generator',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-02-01 07:22:02',
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/menu_management/delete/20',
                'description' => 'Delete data Materi at Menu Management',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-02-01 08:05:06',
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/statistic_builder/delete/2',
                'description' => 'Delete data Data Dashboard at Statistic Builder',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2022-02-01 08:15:03',
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:96.0) Gecko/20100101 Firefox/96.0',
                'url' => 'http://127.0.0.1:8000/admin/statistic_builder/edit-save/1',
                'description' => 'Update data Dashboard at Statistic Builder',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>name</td><td>Total Data</td><td>Dashboard</td></tr><tr><td>slug</td><td>total-umkm</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2022-02-01 17:01:18',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}