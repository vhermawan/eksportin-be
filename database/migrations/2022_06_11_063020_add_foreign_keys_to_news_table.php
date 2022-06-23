<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->foreign(['id_category_news'], 'category_news')->references(['id'])->on('category_news')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['id_cms_users'], 'cms_user_news')->references(['id'])->on('cms_users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropForeign('category_news');
            $table->dropForeign('cms_user_news');
        });
    }
}
