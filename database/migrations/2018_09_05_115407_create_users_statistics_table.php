<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_statistics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('length')->default(0);
            $table->integer('cities')->default(0);
            $table->integer('places')->default(0);
            $table->integer('events')->default(0);
            $table->integer('routes')->default(0);
            $table->integer('score')->default(0);
            $table->timestamps();

            $table->integer('user_id')->unsigned()->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_statistics');
    }
}
