<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->text('description');
            $table->string('address', 255);
            $table->string('lat', 25);
            $table->string('lng', 25);
            $table->timestamps();
            $table->integer('user_id')->unsigned()->foreign('user_id')->references('id')->on('users');
            $table->integer('city_id')->unsigned()->foreign('city_id')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
