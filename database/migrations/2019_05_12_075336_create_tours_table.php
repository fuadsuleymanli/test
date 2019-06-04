<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('tour_name', 100);
            $table->string('introduction', 100);
            $table->string('duration', 100);
            $table->string('title', 100);
            $table->double('price', 10, 2)->unsigned();
            $table->string('destinations_visited', 100);
            $table->text('description');
            $table->text('inclusions');
            $table->text('exclusions');
            $table->tinyInteger('min_age')->unsigned();
            $table->tinyInteger('max_age')->unsigned();
            $table->tinyInteger('min_group')->unsigned();
            $table->tinyInteger('max_group')->unsigned();
            $table->text('accommondation');
            $table->text('transport');
            $table->text('recommended');
            $table->text('activity');
            $table->tinyInteger('status')->unsigned()->default(0);
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
