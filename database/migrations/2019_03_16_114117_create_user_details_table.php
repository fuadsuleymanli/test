<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('photo');
            $table->string('certificate');
            $table->string('phone', 50);
            $table->string('marketing_name', 100);
            $table->string('tour_email', 100);
            $table->string('invoice_email', 100);
            $table->string('office_location');
            $table->string('address');
            $table->string('city', 100);
            $table->string('postal_code', 50);
            $table->string('facebook');
            $table->string('instagram');
            $table->text('owerview');
            $table->tinyInteger('min_age')->unsigned();
            $table->tinyInteger('max_age')->unsigned();
            $table->tinyInteger('min_group')->unsigned();
            $table->tinyInteger('max_group')->unsigned();
            $table->tinyInteger('allowed_booking')->unsigned();
            $table->text('terms_conditions');
            $table->bigInteger('user_id')->unsigned();
            $table->tinyInteger('status')->unsigned()->default(0);
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
        Schema::dropIfExists('user_details');
    }
}
