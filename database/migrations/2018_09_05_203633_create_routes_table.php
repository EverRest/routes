<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('route');
            $table->text('description');
            $table->string('title', 255)->unique();
            $table->boolean('is_free')->default(true);
            $table->integer('experience')->default(0);
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
        Schema::dropIfExists('routes');
    }
}
