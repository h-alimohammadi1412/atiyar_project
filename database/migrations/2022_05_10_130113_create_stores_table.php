<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            // $table->integer('personal')->nullable()->default(1);
            $table->integer('seller_id')->nullable();
            // $table->integer('back')->nullable()->default(0);
            $table->string('name')->nullable();
            $table->string('user_name')->nullable();
            $table->integer('county')->nullable();
            $table->integer('state')->nullable();
            $table->integer('city')->nullable();
            $table->integer('Village')->nullable();
            $table->integer('neighborhood')->nullable();
            $table->integer('Plaque')->nullable();
            $table->integer('address')->nullable();
            $table->string('code')->nullable();
            $table->integer('postal_code')->nullable();
            $table->string('telephone')->nullable();
            $table->string('merchant_id')->nullable();
            $table->integer('license')->default(0);
            $table->string('guild_number')->default(0);
            $table->string('call_hours')->nullable();
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
        Schema::dropIfExists('stores');
    }
}
