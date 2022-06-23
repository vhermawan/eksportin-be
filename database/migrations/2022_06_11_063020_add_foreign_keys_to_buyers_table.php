<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBuyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('buyers', function (Blueprint $table) {
            $table->foreign(['id_category_buyers'], 'category_buyer')->references(['id'])->on('category_buyers')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['id_cms_users'], 'cms_user_buyer')->references(['id'])->on('cms_users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('buyers', function (Blueprint $table) {
            $table->dropForeign('category_buyer');
            $table->dropForeign('cms_user_buyer');
        });
    }
}
