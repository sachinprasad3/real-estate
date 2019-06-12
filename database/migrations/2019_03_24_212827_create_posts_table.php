<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('seller_id');

            $table->string('category');
            $table->string('type');

            $table->string('name');
            $table->string('company');
            $table->string('location');
            $table->string('flat');
            $table->string('price');
            $table->string('img');
            $table->string('bedroom');
            $table->string('bathroom');
            $table->string('balcony');
            $table->string('parking');
            $table->string('area');
            $table->string('who');
            $table->string('city');
            $table->string('locality');
            $table->string('houseno');
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
        Schema::dropIfExists('posts');
    }
}
