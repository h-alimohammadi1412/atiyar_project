<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTitleSwiperTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_title_swiper', function (Blueprint $table) {
//        Schema::connection('mysql-category')->create('category_title_swiper', function (Blueprint $table) {
            $table->id();
            $table->string('c_id')->nullable();
            $table->string('title');
            $table->string('link')->nullable();
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
//        Schema::connection('mysql-category')->dropIfExists('category_title_swiper');
        Schema::dropIfExists('category_title_swiper');
    }
}
