<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */public function up()

{
Schema::create('article', function (Blueprint $table){
    $table->increments('id');
    $table->string('name');
    $table->string('author');
    $table->string('description');
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
        //
    }
}
