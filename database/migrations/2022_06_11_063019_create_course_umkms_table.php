<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseUmkmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_umkms', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_umkms')->nullable();
            $table->unsignedInteger('id_courses')->nullable()->index('umkms');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_umkms');
    }
}
