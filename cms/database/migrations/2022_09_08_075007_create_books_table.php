<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id'); //Add:user_id
            $table->date('item_date')->nullable();
            $table->string('item_file')->nullable();   //Add:item_file
            $table->string('item_icon')->nullable();     //Add:item_icon          
            $table->time('item_number')->nullable();
            $table->time('item_number2')->nullable();
            $table->time('item_number3')->nullable();
            $table->time('item_number4')->nullable();
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
        Schema::dropIfExists('books');
    }
}