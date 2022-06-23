<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('id_news')->nullable()->index('like_news');
            $table->integer('count')->nullable();
            $table->timestamps();

            $table->foreign(['id_news'], 'news')->references(['id'])->on('like_news')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('like_news');
    }
}
