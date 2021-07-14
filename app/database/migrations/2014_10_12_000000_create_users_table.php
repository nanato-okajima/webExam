<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('last_name');
            $table->string('first_name');
            $table->tinyInteger('age')->unsigned();
            $table->tinyInteger('gender')->unsigned();
            $table->tinyInteger('score')->unsigned()->nullable();
            $table->tinyInteger('time')->unsigned()->nullable();
            $table->tinyInteger('status')->unsigned()->default(0);
            $table->string('token')->nullable();
            $table->tinyInteger('token_used_flag')->unsigned()->default(0);
            $table->dateTime('test_datetime')->nullable();
            $table->softDeletes();
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
