<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToStakeholdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stakeholders', function (Blueprint $table) {
            $table->foreign(['id_category_stakeholders'], 'category_stakeholder')->references(['id'])->on('stakeholders')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['id_cms_users'], 'cms_user_stakeholder')->references(['id'])->on('cms_users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stakeholders', function (Blueprint $table) {
            $table->dropForeign('category_stakeholder');
            $table->dropForeign('cms_user_stakeholder');
        });
    }
}
