<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksHasCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     * @table Books_has_Categories
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Books_has_Categories', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('Books_book_id');
            $table->integer('Categories_category_id');


            $table->foreign('Books_book_id', 'fk_Books_has_Categories_Books1_idx')
                ->references('book_id')->on('Books')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('Categories_category_id', 'fk_Books_has_Categories_Categories1_idx')
                ->references('category_id')->on('Categories')
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
       Schema::dropIfExists('Books_has_Categories');
     }
}
