<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksHasUsersTable extends Migration
{
    /**
     * Run the migrations.
     * @table Books_has_Users
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Books_has_Users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('Books_book_id');
            $table->integer('Users_user_id');
            $table->dateTime('until_when')->nullable();


            $table->foreign('Books_book_id', 'fk_Books_has_Users_Books1_idx')
                ->references('book_id')->on('Books')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('Users_user_id', 'fk_Books_has_Users_Users1_idx')
                ->references('user_id')->on('Users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('Books_has_Users');
     }
}
