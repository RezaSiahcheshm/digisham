<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users' , function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cafe_id')->nullable();
            $table->foreign('cafe_id')->references('id')->on('cafes')->onDelete('cascade');
            $table->string('name')->nullable();/*انام*/
            $table->string('lastname')->nullable();/*نام خانوادگی*/
            $table->string('username')->nullable()->unique();/*نام کاربری*/
            $table->string('mobile')->nullable()->unique();/*شماره موبایل*/
            $table->string('email')->nullable()->unique();/*آدرس ایمیل*/
            $table->timestamp('email_verified_at')->nullable();/*تایید ایمیل*/
            $table->string('identifyNumber')->nullable()->unique();/*کد ملی*/
            $table->string('birthday')->nullable();/*تاریخ تولد*/
            $table->boolean('is_superuser')->default(0);/*مدیر*/
            $table->boolean('is_staff')->default(0);/*کارمند*/
            $table->boolean('is_manager')->default(0);/*مدیر رستوران*/
            $table->string('lastSeen')->nullable();/*آخرین بازدید*/
            $table->string('image')->nullable();/**/
            $table->enum('status' , ['A' , 'S' , 'B'])->default('A');/*وضعیت حساب کاربر*/
            $table->enum('accessLevel', ['U','SR','MR','SC','MC',])->default('U');/*سمت*/
            $table->enum('gender' , ['M' , 'F'])->nullable();/*جنسیت*/
//            $table->string('verified')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
