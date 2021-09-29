<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCafesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cafes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();/*نام رستوران*/
            $table->string('code')->nullable()->unique();/*کد اختصاصی رستوران*/
            $table->string('status')->nullable();/*وضعیت کار رستوران*/
            $table->string('type')->nullable();/*نوع رستوران*/
            $table->string('priceLvl')->nullable();/*سطح قیمت غذا رستوران*/
            $table->string('facilities')->nullable();/*امکانات رستوران*/
            $table->string('owner')->nullable();/*مالک رستوران*/
            $table->string('manager')->nullable();/*مدیر رستوران*/
            $table->string('employee')->nullable();/*کارمند رستوران*/
            $table->string('time')->nullable();/*ساعت کاری رستوران*/
            $table->string('address')->nullable();/*آدرس رستوران*/
            $table->string('location')->nullable();/*موقعیت جغرافیای رستوران*/
            $table->string('zipCode')->nullable();/*کد پستی رستوران*/
            $table->string('tel')->nullable();/*شماره تماس رستوران*/
            $table->string('instagram')->nullable();/*ایدی اینستاگرام رستوران*/
            $table->string('photos')->nullable();/*عکس رستوران*/
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
        Schema::dropIfExists('cafes');
    }
}
