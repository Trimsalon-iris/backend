<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('artrose');
            $table->boolean('epileptic');
            $table->boolean('hipp_displacement');
            $table->boolean('ear_infection');
            $table->boolean('sensitive_skin');
            $table->boolean('warts');
            $table->text('warts_note');
            $table->boolean('blind');
            $table->boolean('deaf');
            $table->boolean('old');
            $table->boolean('whiner');
            $table->boolean('muzzle');
            $table->text('note');
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
        Schema::dropIfExists('attributes');
    }
}
