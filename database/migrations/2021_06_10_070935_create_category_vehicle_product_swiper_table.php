<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryVehicleProductSwiperTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::connection('mysql-vehicle')->create('category_vehicle_product_swiper', function (Blueprint $table) {
        Schema::create('category_vehicle_product_swiper', function (Blueprint $table) {
            $table->id();
            $table->string('title_id');
            $table->string('product_id');
            $table->string('category_id');
            $table->string('subCategory_id');
            $table->string('childCategory_id')->nullable();
            $table->string('status')->default(1);
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
//        Schema::connection('mysql-vehicle')->dropIfExists('category_vehicle_product_swiper');
        Schema::dropIfExists('category_vehicle_product_swiper');
    }
}
