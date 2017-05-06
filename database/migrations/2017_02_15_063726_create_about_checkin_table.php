<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutCheckinTable extends Migration
{
    /**
     * Run the migrations.
     * Creates the about table
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->increments('id');
            $table->text('about');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * Drops the about table
     * @return void
     */
    public function down()
    {
        Schema::drop('about');
    }
}
