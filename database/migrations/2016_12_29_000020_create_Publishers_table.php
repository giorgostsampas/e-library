<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublishersTable extends Migration
{
    /**
     * Run the migrations.
     * @table Publishers
     *
     * @return void
     */
    public function up()
    {

        Schema::create('Publishers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('publisher_id');
            $table->string('publisher_name', 60)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {


Schema::dropIfExists('Publishers');

     }
}
