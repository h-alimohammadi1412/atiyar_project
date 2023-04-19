<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryVehicleSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::connection('mysql-vehicle')->create('category_vehicle_slider', function (Blueprint $table) {
        Schema::create('category_vehicle_slider', function (Blueprint $table) {
            $table->id();
            $table->string('img')->nullable();
            $table->string('title');
            $table->string('link');
            $table->string('status')->nullable();
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
//        Schema::connection('mysql-vehicle')->dropIfExists('category_vehicle_slider');
        Schema::dropIfExists('category_vehicle_slider');
    }
}
