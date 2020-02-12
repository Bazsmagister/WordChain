<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('words', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->timestamps();
            $table->timestamp('created_at')->nullable();
            $table->string('a');
            $table->string('b');
            $table->string('c');
            $table->string('d');
            $table->string('e');
            $table->string('f');
            $table->string('g');
            $table->string('h');
            $table->string('i');
            $table->string('j');
            $table->string('k');
            $table->string('l');
            $table->string('m');
            $table->string('n');
            $table->string('o');
            $table->string('p');
            $table->string('q');
            $table->string('r');
            $table->string('s');
            $table->string('t');
            $table->string('u');
            $table->string('v');
            $table->string('x');
            $table->string('y');
            $table->string('z');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('words');
    }
}
