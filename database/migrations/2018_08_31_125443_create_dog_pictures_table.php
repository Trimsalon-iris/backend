<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDogPicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dog_pictures', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dog_id')->unsigned();
            $table->string('image_url');
            $table->timestamps();
            $table->foreign('dog_id')->references('id')->on('dogs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dog_pictures');
    }
}
