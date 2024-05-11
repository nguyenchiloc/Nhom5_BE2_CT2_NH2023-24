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
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('product_name');
            $table->double('product_price');
            $table->double('sale_price')->nullable();
            $table->integer('product_qty');
            $table->integer('category_id');
            $table->integer('brand_id');
            $table->string('product_description', 10000);//tăng độ dài mô tả thành 10000
            $table->string('product_status');
            $table->string('product_images_1')->nullable();
            $table->string('product_images_2')->nullable();
            $table->string('product_images_3')->nullable();
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
        Schema::dropIfExists('products');
    }
};
