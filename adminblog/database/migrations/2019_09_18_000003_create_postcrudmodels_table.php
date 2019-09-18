<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostcrudmodelsTable extends Migration
{
    public function up()
    {
        Schema::create('postcrudmodels', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');

            $table->string('body');

            $table->string('user');

            $table->string('pic_name')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
