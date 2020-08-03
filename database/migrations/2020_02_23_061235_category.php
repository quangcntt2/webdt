<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Category extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catrgories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('c_name')->unique();
            $table->string('c_slug')->index();
            $table->char('c_icon')->nullable();
            $table->string('c_avatar')->nullable();
            $table->tinyInteger('c_active')->default(1)->index();
            $table->integer('total_product')->default(0);
            $table->string('c_detail_seo')->nullable();
            $table->string('c_description_seo')->nullable();
            $table->string('c_keywork_seo')->nullable();
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
        Schema::dropIfExists('catrgories');;
    }
}
