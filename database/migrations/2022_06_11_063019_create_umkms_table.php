<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUmkmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('umkms', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_cms_users')->nullable()->index('cms_user_umkm');
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('photo_url')->nullable();
            $table->text('description')->nullable();
            $table->unsignedInteger('id_category_umkms')->nullable()->index('category_umkm');
            $table->string('slug')->nullable();
            $table->string('bussiness_entity')->nullable();
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
        Schema::dropIfExists('umkms');
    }
}
