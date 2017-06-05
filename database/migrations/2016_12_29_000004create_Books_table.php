<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     * @table Books
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Books', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('book_id');
            $table->integer('Publishers_publisher_id');
            $table->integer('book_isbn')->nullable();
            $table->string('publisher_name', 60)->nullable();
            $table->string('book_title', 60)->nullable();
            $table->string('edition', 60)->nullable();


            $table->foreign('Publishers_publisher_id', 'fk_Books_Publishers_idx')
                ->references('publisher_id')->on('Publishers')
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
       Schema::dropIfExists('Books');
     }
}
