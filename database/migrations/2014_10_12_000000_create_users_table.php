<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('user_name')->unique();
            $table->string('email')->unique();
            $table->bigInteger('phone_number')->nullable();
            $table->string('account_type');
            $table->string('profile_picture');
            $table->string('cover_picture')->nullable();
            $table->string('gender');
            $table->string('location')->nullable();
            $table->string('prefer_area')->nullable();
            $table->text('work_experience')->nullable();
            $table->text('degree')->nullable();
            $table->text('about')->nullable();
            $table->text('makeup_type')->nullable();
            $table->text('product_info')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
