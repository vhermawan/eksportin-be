<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->foreign(['id_category_courses'], 'category_course')->references(['id'])->on('category_courses')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['id_speakers'], 'speaker_course')->references(['id'])->on('speakers')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropForeign('category_course');
            $table->dropForeign('speaker_course');
        });
    }
}
