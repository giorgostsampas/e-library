<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     * @table Authors
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Authors', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('author_id');
            $table->string('author_name', 60)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('Authors');
     }
}
