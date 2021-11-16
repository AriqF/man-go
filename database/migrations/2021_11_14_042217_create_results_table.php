<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('quizes_id')->unsigned();
            $table->string('total_mark')->nullable();
            $table->string('yes_ans')->nullable();
            $table->string('no_ans')->nullable();
            $table->string('status')->nullable();
            $table->string('date')->nullable();
            $table->timestamps();

        });

        Schema::table('results', function (Blueprint $table) {
            $table->foreign('quizes_id')->references('id')->on('quizes')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('results');
    }
}
