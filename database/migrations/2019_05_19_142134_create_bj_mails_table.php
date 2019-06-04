<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBjMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bj_mails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('from', 100);
            $table->string('to', 100);
            $table->string('subject', 100);
            $table->text('msg');
            $table->dateTime('received_time')->nullable();
            $table->dateTime('sent_time')->nullable();
            $table->tinyInteger('status')->unsigned()->default(0);
            $table->bigInteger('user_id')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bj_mails');
    }
}
