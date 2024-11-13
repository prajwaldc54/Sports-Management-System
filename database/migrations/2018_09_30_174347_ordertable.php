<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ordertable extends Migration
{

    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('order_id');
            $table->integer('product_id')->nullable();
            $table->integer('userproduct_id')->nullable();
            $table->integer('user_id');
            $table->string('Size')->nullable();
            $table->integer('Quantity');
            $table->string('Delivery_address');
            $table->string('Delivered')->default('0');
            $table->timestamps();
    });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
