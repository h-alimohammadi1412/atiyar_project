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
        Schema::create('addresse', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('city_id')->constrained('cities')->onUpdate('cascade')->onDelete('cascade');
            $table->string('postal_code')->nullable();
            $table->text('address')->nullable();
            $table->string('plaque')->nullable();
            $table->string('alley')->nullable();
            $table->string('city_part')->nullable();
            $table->string('village')->nullable();
            $table->string('town')->nullable();
            $table->string('name')->nullable();
            $table->string('lname')->nullable();
            $table->string('mobile')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->string('telegram_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('aparat_link')->nullable();
            $table->string('website')->nullable();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresse');
    }
};
