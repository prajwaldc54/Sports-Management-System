<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUserProduct extends Migration
{
        public function up()
    {
        Schema::create('user_products', function (Blueprint $table) {
            $table->increments('productid');
            $table->integer('userid');
            $table->string('product_name');
            $table->integer('retail_price');
            $table->string('color');
            $table->string('sport');
            $table->string('brand');
            $table->string('accessories');
            $table->string('Store_name');
            $table->integer('quantity');
            $table->string('picture');
            $table->boolean('approved')->default('0');
            $table->boolean('recieved')->default('0');
            $table->boolean('stocked')->default('0');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_products');
    }
}
