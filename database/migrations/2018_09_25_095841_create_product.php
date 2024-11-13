<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('proid');
            $table->string('item_name');
            $table->integer('item_price');
            $table->string('color');
            $table->string('sport');
            $table->string('brand');
            $table->string('accessories');
            $table->string('supplier');
            $table->string('gender');
            $table->string('description');
            $table->string('picture');
            $table->boolean('recieved')->default('0');
            $table->timestamps();
    });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
