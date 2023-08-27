<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marketers', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('type_marketer')->nullable();
            $table->string('level_marketer')->nullable();
            $table->string('code_marketer')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('password');
            $table->string('name')->nullable();
            $table->string('lname')->nullable();
            $table->string('gender')->nullable();
            $table->string('birth')->nullable();
            $table->string('birth_location')->nullable();
            $table->string('national_code')->nullable();
            $table->string('shenasname_code')->nullable();
            $table->string('maliat')->default(0);
            $table->text('logo')->nullable();
            $table->text('about')->nullable();

            $table->string('bank_shaba')->nullable();
            $table->text('bank_account_name')->nullable();

            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('town')->nullable();
            $table->string('village')->nullable();
            $table->string('city_part')->nullable();
            $table->string('alley')->nullable();
            $table->string('plaque')->nullable();
            $table->text('address')->nullable();
            $table->string('pin_code')->nullable();
            $table->string('telephone')->nullable();
            $table->string('location')->nullable();

            $table->string('ghardad_status')->nullable();
            $table->string('ghardad_number')->nullable();
            $table->string('ghardad_file')->nullable();
            $table->string('ghardad_start_day')->nullable();
            $table->string('ghardad_end_day')->nullable();
            $table->string('ghardad_invoice')->nullable();
            $table->string('ghardad_pay')->nullable();

            $table->string('website')->nullable();
            $table->string('telegram_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('aparat_link')->nullable();

            $table->string('learning_status')->nullable();
            $table->string('wallet')->nullable();
            $table->timestamps();

            //آتی یار

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marketers');
    }
}
