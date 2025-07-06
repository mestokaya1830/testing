<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('checks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('email');
            $table->string('password');
            $table->bigInteger('phone');
            $table->dateTime('birthday');
            $table->integer('salery');
            $table->integer('age');
            $table->string('gender')->default('male');
            $table->string('marital_status')->default('single');
            $table->string('langs');
            $table->dateTime('start');
            $table->dateTime('finish');
            $table->longText('address');
            $table->longText('declaretion');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('checks');
    }
};