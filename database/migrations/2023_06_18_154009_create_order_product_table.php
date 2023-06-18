<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_product', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->integer('order_number');
            $table->integer('product_seller_id');
            $table->integer('product_id');
            $table->integer('color_id');
            $table->integer('warranty_id');
            $table->integer('seller_id');
            $table->string('price');
            $table->string('discount_price');
            $table->integer('anbar_id');
            $table->integer('product_available_count');
            $table->integer('product_sale_count');
            $table->integer('count_cart');
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
        Schema::dropIfExists('table_order_product');
    }
};
