<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('password');
            $table->string('code_seller')->nullable();
            $table->string('type_seller')->nullable();
            $table->string('certificate_img')->nullable();
            $table->string('nationalCard_img')->nullable();
            $table->string('personalPicture_img')->nullable();
            $table->string('license_img')->nullable();
            $table->integer('status_contract')->default(0);
            $table->string('name')->nullable();
            $table->string('lname')->nullable();
            $table->string('gender')->nullable();
            $table->string('birth')->nullable();
            $table->string('national_code')->nullable();
            $table->string('shenasname_code')->nullable();

            $table->string('maliat')->default(0);
            $table->text('logo')->nullable();
            $table->text('about')->nullable();

            $table->string('bank_shaba')->nullable();
            $table->text('bank_account_name')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('website')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
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



            $table->string('learning_status')->nullable();
            $table->string('wallet')->nullable();
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
        Schema::dropIfExists('sellers');
    }
}
