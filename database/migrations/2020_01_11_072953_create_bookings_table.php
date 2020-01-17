<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('artist_user_name');
            $table->string('user_user_name');
            $table->string('full_name');
            $table->string('bookings_coupon')->unique();
            $table->bigInteger('phone_number');
            $table->string('makeup_type');
            $table->integer('number_of_people');
            $table->text('address');
            $table->string('date');
            $table->string('time');
            $table->text('message');
            $table->text('bookings_status');
            $table->integer('star')->nullable();
            $table->text('review')->nullable();
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
        Schema::dropIfExists('bookings');
    }
}
