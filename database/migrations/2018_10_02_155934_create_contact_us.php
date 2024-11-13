<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactUs extends Migration
{

    public function up()
    {

        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('mid');
            $table->string('name');
            $table->string('email');
            $table->string('subject')->nullable();
            $table->string('message');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
