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
            $table->increments('id');
            $table->string('name', 50);
            $table->string('lastname',50);
            $table->integer('document')->nullable()->unique();;
            $table->integer('phone')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->tinyinteger('age');
            $table->tinyinteger('sex');
            $table->tinyinteger('driver')->nullable();
            $table->tinyinteger('co-driver')->nullable();
            $table->string('profile_picture')->nullable();
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
