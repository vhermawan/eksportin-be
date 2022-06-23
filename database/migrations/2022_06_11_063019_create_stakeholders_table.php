<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStakeholdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stakeholders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('photo')->nullable();
            $table->text('description')->nullable();
            $table->unsignedInteger('id_category_stakeholders')->nullable()->index('category_stakeholder');
            $table->unsignedInteger('id_cms_users')->nullable()->index('cms_user_stakeholder');
            $table->string('slug')->nullable();
            $table->string('bussiness_entity')->nullable();
            $table->string('services')->nullable();
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
        Schema::dropIfExists('stakeholders');
    }
}
