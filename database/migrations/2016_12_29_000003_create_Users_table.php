<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     * @table Users
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('user_id');
            $table->string('username', 60)->nullable();
            $table->string('password', 60)->nullable();
            $table->dateTime('joindate')->nullable();
            $table->dateTime('lastlogin')->nullable();
            $table->string('email', 60)->nullable();
            $table->string('city', 60)->nullable();
            $table->boolean('active')->nullable();
            $table->unique(["email", "username", "password"], 'unique_Users');
            $table -> rememberToken();        //gia to error tou token


        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {

       Schema::dropIfExists('Users');
     }
}
