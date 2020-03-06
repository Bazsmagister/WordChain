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
            //$table->string('words');
            //$table->timestamp('created_at')->nullable();
            //$table->timestamp('updated_at')->nullable();

            $table->string('a')->nullable();
            $table->string('b')->nullable();
            $table->string('c')->nullable();
            $table->string('d')->nullable();
            $table->string('e')->nullable();
            $table->string('f')->nullable();
            $table->string('g')->nullable();
            $table->string('h')->nullable();
            $table->string('i')->nullable();
            $table->string('j')->nullable();
            $table->string('k')->nullable();
            $table->string('l')->nullable();
            $table->string('m')->nullable();
            $table->string('n')->nullable();
            $table->string('o')->nullable();
            $table->string('p')->nullable();
            $table->string('q')->nullable();
            $table->string('r')->nullable();
            $table->string('s')->nullable();
            $table->string('t')->nullable();
            $table->string('u')->nullable();
            $table->string('v')->nullable();
        //$table->string('w');
            $table->string('x')->nullable();;
            $table->string('y')->nullable();;
            $table->string('z')->nullable();;
            //$table->timestamps();

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
