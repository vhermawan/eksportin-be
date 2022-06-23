<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUmkmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('umkms', function (Blueprint $table) {
            $table->foreign(['id_category_umkms'], 'category_umkm')->references(['id'])->on('category_umkms')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['id_cms_users'], 'cms_user_umkm')->references(['id'])->on('cms_users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('umkms', function (Blueprint $table) {
            $table->dropForeign('category_umkm');
            $table->dropForeign('cms_user_umkm');
        });
    }
}
