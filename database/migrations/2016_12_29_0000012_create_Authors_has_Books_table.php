<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsHasBooksTable extends Migration
{
    /**
     * Run the migrations.
     * @table Authors_has_Books
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Authors_has_Books', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('Authors_author_id');
            $table->integer('Books_book_id');


            $table->foreign('Authors_author_id', 'fk_Authors_has_Books_Authors1_idx')
                ->references('author_id')->on('Authors')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('Books_book_id', 'fk_Authors_has_Books_Books1_idx')
                ->references('book_id')->on('Books')
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
       Schema::dropIfExists('Authors_has_Books');
     }
}
